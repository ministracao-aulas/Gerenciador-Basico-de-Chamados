<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Route;

class DemoDashboardController extends Controller
{
    public static function routes()
    {

        Route::get('/', function ()
        {
            return view('dashboard');
        })->name('demo_dashboard');

        // Route::get('/','DashboardController@index');

        Route::group(['prefix' => 'basic-ui'], function ()
        {
            Route::get('accordions', function ()
            {
                return view('demo-pages.basic-ui.accordions');
            });

            Route::get('buttons', function ()
            {
                return view('demo-pages.basic-ui.buttons');
            });

            Route::get('badges', function ()
            {
                return view('demo-pages.basic-ui.badges');
            });

            Route::get('breadcrumbs', function ()
            {
                return view('demo-pages.basic-ui.breadcrumbs');
            });

            Route::get('dropdowns', function ()
            {
                return view('demo-pages.basic-ui.dropdowns');
            });

            Route::get('modals', function ()
            {
                return view('demo-pages.basic-ui.modals');
            });

            Route::get('progress-bar', function ()
            {
                return view('demo-pages.basic-ui.progress-bar');
            });

            Route::get('pagination', function ()
            {
                return view('demo-pages.basic-ui.pagination');
            });

            Route::get('tabs', function ()
            {
                return view('demo-pages.basic-ui.tabs');
            });

            Route::get('typography', function ()
            {
                return view('demo-pages.basic-ui.typography');
            });

            Route::get('tooltips', function ()
            {
                return view('demo-pages.basic-ui.tooltips');
            });
        });

        Route::group(['prefix' => 'advanced-ui'], function ()
        {
            Route::get('dragula', function ()
            {
                return view('demo-pages.advanced-ui.dragula');
            });

            Route::get('clipboard', function ()
            {
                return view('demo-pages.advanced-ui.clipboard');
            });

            Route::get('context-menu', function ()
            {
                return view('demo-pages.advanced-ui.context-menu');
            });

            Route::get('popups', function ()
            {
                return view('demo-pages.advanced-ui.popups');
            });

            Route::get('sliders', function ()
            {
                return view('demo-pages.advanced-ui.sliders');
            });

            Route::get('carousel', function ()
            {
                return view('demo-pages.advanced-ui.carousel');
            });

            Route::get('loaders', function ()
            {
                return view('demo-pages.advanced-ui.loaders');
            });

            Route::get('tree-view', function ()
            {
                return view('demo-pages.advanced-ui.tree-view');
            });
        });

        Route::group(['prefix' => 'forms'], function ()
        {
            Route::get('basic-elements', function ()
            {
                return view('demo-pages.forms.basic-elements');
            });

            Route::get('advanced-elements', function ()
            {
                return view('demo-pages.forms.advanced-elements');
            });

            Route::get('dropify', function ()
            {
                return view('demo-pages.forms.dropify');
            });

            Route::get('form-validation', function ()
            {
                return view('demo-pages.forms.form-validation');
            });

            Route::get('step-wizard', function ()
            {
                return view('demo-pages.forms.step-wizard');
            });

            Route::get('wizard', function ()
            {
                return view('demo-pages.forms.wizard');
            });
        });

        Route::group(['prefix' => 'editors'], function ()
        {
            Route::get('text-editor', function ()
            {
                return view('demo-pages.editors.text-editor');
            });

            Route::get('code-editor', function ()
            {
                return view('demo-pages.editors.code-editor');
            });
        });

        Route::group(['prefix' => 'charts'], function ()
        {
            Route::get('chartjs', function ()
            {
                return view('demo-pages.charts.chartjs');
            });

            Route::get('morris', function ()
            {
                return view('demo-pages.charts.morris');
            });

            Route::get('flot', function ()
            {
                return view('demo-pages.charts.flot');
            });

            Route::get('google-charts', function ()
            {
                return view('demo-pages.charts.google-charts');
            });

            Route::get('sparklinejs', function ()
            {
                return view('demo-pages.charts.sparklinejs');
            });

            Route::get('c3-charts', function ()
            {
                return view('demo-pages.charts.c3-charts');
            });

            Route::get('chartist', function ()
            {
                return view('demo-pages.charts.chartist');
            });

            Route::get('justgage', function ()
            {
                return view('demo-pages.charts.justgage');
            });
        });

        Route::group(['prefix' => 'tables'], function ()
        {
            Route::get('basic-table', function ()
            {
                return view('demo-pages.tables.basic-table');
            });

            Route::get('data-table', function ()
            {
                return view('demo-pages.tables.data-table');
            });

            Route::get('js-grid', function ()
            {
                return view('demo-pages.tables.js-grid');
            });

            Route::get('sortable-table', function ()
            {
                return view('demo-pages.tables.sortable-table');
            });
        });

        Route::get('notifications', function ()
        {
            return view('demo-pages.notifications.index');
        });

        Route::group(['prefix' => 'icons'], function ()
        {
            Route::get('material', function ()
            {
                return view('demo-pages.icons.material');
            });

            Route::get('flag-icons', function ()
            {
                return view('demo-pages.icons.flag-icons');
            });

            Route::get('font-awesome', function ()
            {
                return view('demo-pages.icons.font-awesome');
            });

            Route::get('simple-line-icons', function ()
            {
                return view('demo-pages.icons.simple-line-icons');
            });

            Route::get('themify', function ()
            {
                return view('demo-pages.icons.themify');
            });
        });

        Route::group(['prefix' => 'maps'], function ()
        {
            Route::get('vector-map', function ()
            {
                return view('demo-pages.maps.vector-map');
            });

            Route::get('mapael', function ()
            {
                return view('demo-pages.maps.mapael');
            });

            Route::get('google-maps', function ()
            {
                return view('demo-pages.maps.google-maps');
            });
        });

        Route::group(['prefix' => 'user-pages'], function ()
        {
            Route::get('login', function ()
            {
                return view('demo-pages.user-pages.login');
            });

            Route::get('login-2', function ()
            {
                return view('demo-pages.user-pages.login-2');
            });

            Route::get('multi-step-login', function ()
            {
                return view('demo-pages.user-pages.multi-step-login');
            });

            Route::get('register', function ()
            {
                return view('demo-pages.user-pages.register');
            });

            Route::get('register-2', function ()
            {
                return view('demo-pages.user-pages.register-2');
            });

            Route::get('lock-screen', function ()
            {
                return view('demo-pages.user-pages.lock-screen');
            });
        });

        Route::group(['prefix' => 'error-pages'], function ()
        {
            Route::get('error-404', function ()
            {
                return view('demo-pages.error-pages.error-404');
            });

            Route::get('error-500', function ()
            {
                return view('demo-pages.error-pages.error-500');
            });
        });

        Route::group(['prefix' => 'general-pages'], function ()
        {
            Route::get('blank-page', function ()
            {
                return view('demo-pages.general-pages.blank-page');
            });

            Route::get('landing-page', function ()
            {
                return view('demo-pages.general-pages.landing-page');
            });

            Route::get('profile', function ()
            {
                return view('demo-pages.general-pages.profile');
            });

            Route::get('email-templates', function ()
            {
                return view('demo-pages.general-pages.email-templates');
            });

            Route::get('faq', function ()
            {
                return view('demo-pages.general-pages.faq');
            });

            Route::get('faq-2', function ()
            {
                return view('demo-pages.general-pages.faq-2');
            });

            Route::get('news-grid', function ()
            {
                return view('demo-pages.general-pages.news-grid');
            });

            Route::get('timeline', function ()
            {
                return view('demo-pages.general-pages.timeline');
            });

            Route::get('search-results', function ()
            {
                return view('demo-pages.general-pages.search-results');
            });

            Route::get('portfolio', function ()
            {
                return view('demo-pages.general-pages.portfolio');
            });

            Route::get('user-listing', function ()
            {
                return view('demo-pages.general-pages.user-listing');
            });
        });

        Route::group(['prefix' => 'ecommerce'], function ()
        {
            Route::get('invoice', function ()
            {
                return view('demo-pages.ecommerce.invoice');
            });

            Route::get('invoice-2', function ()
            {
                return view('demo-pages.ecommerce.invoice-2');
            });

            Route::get('pricing', function ()
            {
                return view('demo-pages.ecommerce.pricing');
            });

            Route::get('product-catalogue', function ()
            {
                return view('demo-pages.ecommerce.product-catalogue');
            });

            Route::get('project-list', function ()
            {
                return view('demo-pages.ecommerce.project-list');
            });

            Route::get('orders', function ()
            {
                return view('demo-pages.ecommerce.orders');
            });
        });

        // For Clear cache
        Route::get('/clear-cache', function ()
        {
            Artisan::call('cache:clear');
            return "Cache is cleared";
        });

        // 404 for undefined routes
        Route::any('/{page?}', function ()
        {
            return View::make('pages.error-pages.error-404');
        })->where('page', '.*');
    }
}
