<?php namespace JSONSuite;
use Illuminate\Support\ServiceProvider;

    class JSONSuiteServiceProvider extends ServiceProvider{
            
        public function register()
        {
            $this->app->bind('json', function() { return new JSONSuite; });
        }
    }
