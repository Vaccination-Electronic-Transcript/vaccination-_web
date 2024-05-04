<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Validator;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //

            Validator::extend('enum', function ($attribute, $value, $parameters, $validator) {
                if (!isset($parameters[0])) {
                    return false; // No enum values specified
                }

                // Define the allowed enum values
                $allowedValues = $parameters;

                // Check if the value is in the list of allowed values
                return in_array($value, $allowedValues);
            });
        }

    }

