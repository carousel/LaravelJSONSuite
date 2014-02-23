<?php namespace JSONSuite;
use Illuminate\Support\Facades\Facade;

    class JSONSuiteFacade extends Facade{

	    protected static function getFacadeAccessor() { return 'json'; }
           
    }
