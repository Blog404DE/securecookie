<?php

/**
 * Contao Open Source CMS
 *
 * Copyright (c) 2005-2016 Leo Feyer
 *
 * @package   securecookie
 * @author    Jens Dutzi
 * @license   MIT
 * @copyright tf-network.de Jens Dutzi 2017
 */


/**
 * Namespace
 */
namespace securecookie;

/**
 * Class securecookie
 *
 * @copyright  tf-network.de Jens Dutzi 2017
 * @author     Jens Dutzi
 * @package    Devtools
 */
class securecookie {
    function setSecureFlag($objCookie) {
		if(\Environment::get('ssl')) $objCookie->blnSecure = true;

		return $objCookie;
    }
}
