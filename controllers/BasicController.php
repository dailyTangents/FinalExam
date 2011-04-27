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


  class BasicController extends Zend_Controller_Action
  {


      public function init()
      {

      }

      public function page1Action()
      {
        $this->getScript('page1.phtml');  // fix function name
      }

      public function page2Action()
      {
        $this->getScript('page2.phtml');  // fix function name
      }

      private function getScript($s)
      {
  //      header("Content-Type: text/html;charset=utf-8");  do not need header
        require_once APP_PATH . SLASH . 'views' . SLASH . $s;
      }

  }