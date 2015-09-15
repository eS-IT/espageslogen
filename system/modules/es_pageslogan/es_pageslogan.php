<?php if (!defined('TL_ROOT')) die('You cannot access this file directly!');

/**
 * Contao Open Source CMS
 * Copyright (C) 2005-2011 Leo Feyer
 *
 * Formerly known as TYPOlight Open Source CMS.
 *
 * This program is free software: you can redistribute it and/or
 * modify it under the terms of the GNU Lesser General Public
 * License as published by the Free Software Foundation, either
 * version 3 of the License, or (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU
 * Lesser General Public License for more details.
 *
 * You should have received a copy of the GNU Lesser General Public
 * License along with this program. If not, please visit the Free
 * Software Foundation website at <http://www.gnu.org/licenses/>.
 *
 * PHP version 5
 * @copyright  e@sy Solutions IT 2012
 * @author     pfroch <info@easySolutionsIT.de>
 * @license    GPL
 * @filesource
 */

/**
 * Description:
 * Die Klasse es_pagesloga erstellt die Ausgabe fuer die Microformat Adresse aus dem Content-Element
 *
 * @copyright      2012 by easySolutions IT
 * @author         pfroch <info@easySolutionsIT.de>
 * @version     1.0.0
 * @since       21.09.12 - 13:44
 * @license     LGPL
 * @uses        Contao-Framework
 */
class es_pageslogan extends Module
{


    /**
     * Template
     * @var string
     */
    protected $strTemplate = 'es_pageslogan';


    /**
     * Generate the content element
     */
    protected function compile()
    {
        if (TL_MODE == 'BE') {
            $this->genBeOutput();
        } else {
            $this->genFeOutput();
        }
    }


    /**
     * Erzeugt die Ausgebe für das Backend.
     * @return string
     */
    private function genBeOutput()
    {
        $this->strTemplate          = 'be_wildcard';
        $this->Template             = new BackendTemplate($this->strTemplate);
        $this->Template->title      = $this->headline;
        $this->Template->wildcard   = "### es_pageslogan ###";
    }


    /**
     * Gibt den Slogan aus
     */
    public function genFeOutput()
    {
        global $objPage;
        $this->Template->slogan = $this->getSlogan($objPage->id);
    }


    /**
     * Sucht den Slogan der Seite und aller übergeordneten Seiten (bis der erste gefunden wurde).
     * @param $intId
     * @return string
     */
    private function getSlogan($intId)
    {
        $this->import('Database', 'db');
        $query  = "SELECT `pid`, `slogan` FROM `tl_page` WHERE `id` = $intId";
        $result = $this->db->execute($query);

        if($result->numRows){
            $row = $result->fetchAssoc();

            if($row['slogan']){
                return $row['slogan'];
            } else {

                if($row['pid'] != 0){
                    return $this->getSlogan($row['pid']);
                }
            }
        }

        return '';
    }
}
