<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\View;
use App\Models\Setting;
use App\Models\CommitteeName;

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
        Blade::directive('bn', function ($expression) {
            return "<?php 
                echo str_replace(
                    ['0','1','2','3','4','5','6','7','8','9','/','.','-'],
                    ['০','১','২','৩','৪','৫','৬','৭','৮','৯','/','.','-'],
                    $expression
                ); 
            ?>";
        });

        View::composer('*', function ($view) {
            $view->with('setting', Setting::first());
        });

        View::composer('*', function ($view) {
            $view->with('committeeNames', CommitteeName::get());
        });
    }
}
