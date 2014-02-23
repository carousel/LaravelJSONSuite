<?php
require "vendor/autoload.php";

    class JSONSuiteTests extends \PHPUnit_Framework_TestCase{
        protected $json;
        public function setUp()
        {
            $this->json = new JSONSuite;
        }
        /** @test */ 
        public function basicTest()
        {
            $this->assertInstanceOf("JSONSuite",$this->json);    
        }

    };

