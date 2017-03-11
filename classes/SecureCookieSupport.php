<?php

/**
 * Contao Open Source CMS
 *
 * Copyright (c) 2005-2016 Leo Feyer
 *
 * @package   SecureCookie
 * @author    Jens Dutzi
 * @license   MIT
 * @copyright tf-network.de Jens Dutzi 2016
 */


/**
 * Namespace
 */
namespace SecureCookieSupport;

/**
 * Class SecureCookieSupport
 *
 * @copyright  tf-network.de Jens Dutzi 2017
 * @author     Jens Dutzi
 * @package    Devtools
 */
class SecureCookieSupport {
    function setSecureFlag($objCookie) {
		if(\Environment::get('ssl')) $objCookie->blnSecure = true;

		return $objCookie;
    }
}