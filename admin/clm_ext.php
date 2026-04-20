<?php
/**
 * @ CLM Extern Component
 * @Copyright (C) 2008-2026 CLM Team.  All rights reserved
 * @license http://www.gnu.org/copyleft/gpl.html GNU/GPL
 * @link https://chessleaguemanager.org
 * @author Thomas Schwietert
 * @email fishpoke@fishpoke.de
*/
// no direct access
defined('_JEXEC') or die('Restricted access');

JLoader::registerAlias('JViewLegacy', '\\Joomla\\CMS\\MVC\\View\\HtmlView', '6.0');
JLoader::registerAlias('JControllerLegacy', '\\Joomla\\CMS\\MVC\\Controller\\BaseController', '6.0');

require_once (JPATH_SITE . DIRECTORY_SEPARATOR . "components" . DIRECTORY_SEPARATOR . "com_clm_ext" . DIRECTORY_SEPARATOR . "include.php");

$controllerName = 'info';
if(!defined("DS")){define('DS', DIRECTORY_SEPARATOR);} // fix for Joomla 3.2

require_once( JPATH_COMPONENT.DS.'controllers'.DS.$controllerName.'.php' );
$controllerName = 'CLM_EXTController'.$controllerName;

// Create the controller
$controller = new $controllerName();

// Perform the Request task
$controller->execute( clm_ext_request_string('task') );

// Redirect if set by the controller
$controller->redirect();

?>
