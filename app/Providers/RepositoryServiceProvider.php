<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
/*            $this->app->bind(
                \App\Repositories\Product\ProductRepositoryInterface::class,
                \App\Repositories\Product\ProductRepository::class
            );*/

        $models = array(
            'Product',
            'Post'
        );

        foreach ($models as $model) {
             // $this->app->bind("App\Repositories\{$model}\{$model}RepositoryInterface", "App\Repositories\{$model}\{$model}Repository");
                $this->app->bind("App\Repositories\Product\ProductRepositoryInterface", "\App\Repositories\Product\ProductRepository");
        }
    }

}
