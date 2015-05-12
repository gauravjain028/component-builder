<?php

/**
* @copyright	Copyright (C) 2009 - 2012 Ready Bytes Software Labs Pvt. Ltd. All rights reserved.
* @license		GNU/GPL, see LICENSE.php
* @package 		@prefix_constant@
* @subpackage	Front-end
* @contact		@authorEmail@
*/

// no direct access
if(!defined( '_JEXEC' )){
	die( 'Restricted access' );
}

Rb_HelperTemplate::loadSetupEnv();

Rb_HelperTemplate::loadMedia(array('jquery', 'bootstrap', 'rb', 'font-awesome'));

Rb_Html::script(@prefix_constant@_PATH_CORE_MEDIA.'/@name@.js');
Rb_Html::script(@prefix_constant@_PATH_CORE_MEDIA.'/site.js');

Rb_Html::stylesheet(@prefix_constant@_PATH_CORE_MEDIA.'/@name@.css');
Rb_Html::stylesheet(@prefix_constant@_PATH_CORE_MEDIA.'/site.css');

Rb_Html::_('formbehavior.chosen', 'select');