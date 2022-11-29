<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use Illuminate\Pagination\Paginator;

use Validator;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    { 
        //
        Validator::extend('TextoRule1', function ($attribute, $value, $parameters) {
            return preg_match('/^[ a-zA-ZñÑáéíóúÁÉÍÓÚ\s]+$/',$value);
        });

        Validator::extend('TextoRule2', function ($attribute, $value, $parameters) {
            if($value == null)
            {
                return true;
            }
            return preg_match('/^[ a-zA-ZñÑáéíóúÁÉÍÓÚ\s]+$/',$value);
        });

        Validator::extend('TextoRule3', function ($attribute, $value, $parameters) {
            return preg_match('/^[0-9a-zA-ZñÑáéíóúÁÉÍÓÚ\s]+$/',$value);
        });

        Validator::extend('TextoRule4', function ($attribute, $value, $parameters) {
            if($value == null)
            {
                return true;
            }
            return preg_match('/^[0-9a-zA-ZñÑáéíóúÁÉÍÓÚ\s]+$/',$value);
        });

        Validator::extend('NumeroRule', function ($attribute, $value, $parameters) {
            return preg_match('/^[0-9]+$/',$value);
        });

        Validator::extend('NumeroRule2', function ($attribute, $value, $parameters) {
            if($value == null)
            {
                return true;
            }
            return preg_match('/^[0-9]+$/',$value);
        }); 

        Validator::extend('CorreoRule1', function ($attribute, $value, $parameters) {
            return preg_match('/^[^@]+@[^@]+\.[a-zA-Z]{2,}+$/',$value);
        });

        Validator::extend('CorreoRule2', function ($attribute, $value, $parameters) {
            if($value == null)
            {
                return true;
            }
            return preg_match('/^[^@]+@[^@]+\.[a-zA-Z]{2,}+$/',$value);
        });

        Validator::extend('ContraseñaRule', function ($attribute, $value, $parameters) {
            return preg_match('/^?=.[A-Za-z0-9])(?=.[A-Z]+$/',$value);
        });

        Validator::extend('DecimalRule', function ($attribute, $value, $parameters) {
            return preg_match('/^[0-9]+([.][0-9]+)?$/',$value);
        });

        Validator::extend('DecimalRule2', function ($attribute, $value, $parameters) {
            if($value == null)
            {
                return true;
            }
            return preg_match('/^[0-9]+([.][0-9]+)?$/',$value);
        });
        Validator::extend('UsuarioRule1', function ($attribute, $value, $parameters) {
            return preg_match('/^[a-z]+$/',$value);;
        });
        Validator::extend('ContraseñaRule', function ($attribute, $value, $parameters) {
            return preg_match('/^(?=\w*\d)(?=\w*[A-Z])(?=\w*[a-z])\S{8,16}+$/',$value);
        });


        Schema::defaultStringlength(191);
        Paginator::useBootstrap();
    }    
}
