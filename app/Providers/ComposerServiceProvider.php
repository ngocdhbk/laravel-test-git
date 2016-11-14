<?php namespace App\Providers;
#This is an example file to demo Serive Provider with composer, not original Laravel file
use View;
use Illuminate\Support\ServiceProvider;

class ComposerServiceProvider extends ServiceProvider {

    /**
     * Register bindings in the container.
     *
     * @return void
     */
    public function boot()
    {
        // Using class based composers...
        View::composer('profile', 'App\Http\ViewComposers\ProfileComposer');

        // Using Closure based composers...
        View::composer('dashboard', function($view)
        {

        });

        // Co the dung composer de link nhieu tham chieu View Composer
        /*View::composers([
            'App\Http\ViewComposers\AdminComposer' => ['admin.index', 'admin.profile'],
            'App\Http\ViewComposers\UserComposer' => 'user',
            'App\Http\ViewComposers\ProductComposer' => 'product'
        ]);
*/    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        //
    }

}