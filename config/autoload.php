<?php

/**
 * Contao Open Source CMS
 *
 * Copyright (c) 2005-2017 Leo Feyer
 *
 * @license LGPL-3.0+
 */


/**
 * Register the namespaces
 */
ClassLoader::addNamespaces(array
(
	'securecookie',
));


/**
 * Register the classes
 */
ClassLoader::addClasses(array
(
	// Classes
	'securecookie\securecookie' => 'system/modules/securecookie/classes/securecookie.php',
));
