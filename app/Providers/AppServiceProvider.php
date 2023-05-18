<?php

namespace App\Providers;

use App\Models\Category;
use App\Models\Subcategory;
use Illuminate\Support\ServiceProvider;

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
        view()->composer('*', function ($view) {
            $categories = Category::where('status','active')->orderBy('id','desc')->get();
            $data = [];
            foreach ($categories as $item => $data2)
            {
                $data[$item] = $data2;
                $data[$item]['subcategory'] = Subcategory::where('category_id','=',$data2->id)->limit(8)->get();
            }
            $view->with('global_categories',$data);
        });
    }
}
