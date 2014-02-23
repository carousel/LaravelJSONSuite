<?php namespace JSONSuite;

    class JSONSuiteException extends \Exception{

        public function __construct($data)
        {
            echo parent::message($data);
        }
        public function stringException()
        {
            
        }
        
    }
