<?php

/**
 * Contao Open Source CMS
 * 
 * Copyright (C) 2005-2012 Leo Feyer
 * 
 * @package Es_pageslogan
 * @link    http://www.contao.org
 * @license http://www.gnu.org/licenses/lgpl-3.0.html LGPL
 */


/**
 * Register the classes
 */
ClassLoader::addClasses(array
(
	// Es_pageslogan
	'es_pageslogan' => 'system/modules/es_pageslogan/es_pageslogan.php',
));


/**
 * Register the templates
 */
TemplateLoader::addFiles(array
(
	'es_pageslogan' => 'system/modules/es_pageslogan/templates',
));
