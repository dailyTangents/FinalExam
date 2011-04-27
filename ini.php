
<?php

/**
 *
 *
 * @author Brendan Howard
 * @category ANM293 - Advanced PHP
 *
 * Final Exam
 *
 */

  @ini_set('default_charset','utf-8');  // fixed
  @ini_set('default_mimetype','text/html');  // fixed
  date_default_timezone_set('America/Detroit');
  @ini_set('display_errors','Off');
  @ini_set('log_errors','Off');
  // error_reporting(0);

  if( PATH_SEPARATOR  == ';' )
    define('SLASH','\\');  // fixed
  else
    define('SLASH','/');  // fixed

  define('APP_PATH', realpath(dirname(__FILE__)));

  set_include_path('.'.PATH_SEPARATOR.implode(PATH_SEPARATOR, array(
    realpath(APP_PATH . SLASH . 'library')
    ,realpath(APP_PATH . SLASH . 'library' . SLASH . 'Zend' . SLASH . '1.11.3')  // fixed version
  )));

// removed extra define line

  require_once 'Zend/Config/Ini.php';
  require_once 'Zend/Controller/Action.php';
  require_once 'Zend/Controller/Front.php';
  require_once 'Zend/Controller/Router/Route/Regex.php';
  require_once 'Zend/Controller/Dispatcher/Standard.php';



