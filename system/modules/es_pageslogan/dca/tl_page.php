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

$GLOBALS['TL_DCA']['tl_page']['palettes']['regular']    = str_replace('description;', 'description;{legend_pageslogan}, slogan;', $GLOBALS['TL_DCA']['tl_page']['palettes']['regular']);
$GLOBALS['TL_DCA']['tl_page']['palettes']['error_403']  = str_replace('description;', 'description;{legend_pageslogan}, slogan;', $GLOBALS['TL_DCA']['tl_page']['palettes']['error_403']);
$GLOBALS['TL_DCA']['tl_page']['palettes']['error_404']  = str_replace('description;', 'description;{legend_pageslogan}, slogan;', $GLOBALS['TL_DCA']['tl_page']['palettes']['error_404']);
$GLOBALS['TL_DCA']['tl_page']['palettes']['root']       = str_replace('{dns_legend}', '{legend_pageslogan}, slogan;{dns_legend}', $GLOBALS['TL_DCA']['tl_page']['palettes']['root']);


// Fields
$GLOBALS['TL_DCA']['tl_page']['fields']['slogan'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_page']['slogan'],
    'exclude'                 => true,
    'inputType'               => 'textarea',
    'eval'                    => array('style'=>'height:60px;', 'tl_class'=>'clr', 'allowHtml' => true),
    'sql'                     => 'mediumtext NULL'
);
