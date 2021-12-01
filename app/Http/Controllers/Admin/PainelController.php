<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

class PainelController extends Controller
{
    public static function routes()
    {
        Route::group(['prefix' => 'painel', 'middleware' => 'auth'], function () {
            Route::get('/', [self::class, 'index']);
        });
    }

    /**
     * function index
     *
     * @param Request $request
     * @return
     */
    public function index(Request $request)
    {
        return view('admin.painel.index', [
            'estoque' => 40,
            'estoque_minimo' => 25,
        ]);
    }
}
