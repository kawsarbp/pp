<?php

namespace App\Providers;

use App\Models\Category;
use App\Models\Subcategory;
use App\Models\Transaction;
use Illuminate\Support\Facades\Auth;
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
                $data[$item]['subcategory'] = Subcategory::where('category_id','=',$data2->id)->where('status','=','active')->limit(8)->get();
            }
            $view->with('global_categories',$data);

            $transactions = Transaction::where('user_id',Auth::id())->orderBy('id','desc')->limit(3)->get();
            $view->with('global_transactions',$transactions);
        });
    }
}
