<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

class PainelController extends Controller
{
    public static function routes()
    {
        Route::get('/', [self::class, 'index'])->name('painel.index');
        Route::get('/blank', [self::class, 'blank'])->name('painel.blank');
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

    /**
     * function blank
     *
     * @param Request $request
     * @return
     */
    public function blank(Request $request)
    {
        return view('admin.blank-page');
    }
}
