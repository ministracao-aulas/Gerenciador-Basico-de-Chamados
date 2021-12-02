<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Libs\Formaters\BoolenFormater;
use Illuminate\Http\Request;
use Route;

class SessionPreferences extends Controller
{
    public static function routes()
    {
        Route::group(['prefix' => 'session-preferences', 'as' => 'admin.session-preferences.'], function () {
            Route::get('/', [
                'as' => 'index',
                'uses' => 'App\Http\Controllers\SessionPreferences@index',
            ]);
            Route::post('/', [
                'as' => 'update',
                'uses' => 'App\Http\Controllers\SessionPreferences@update',
            ]);
            Route::match(['post', 'get', 'put'],'/put', [
                'as' => 'put',
                'uses' => 'App\Http\Controllers\SessionPreferences@updateKey',
            ]);
        });
    }

    /**
     * function index
     *
     * Retorna as preferencias do usuario na sessão
     *
     * @param Request $request
     * @return
     */
    public function index(Request $request)
    {
        $preferences = self::getCurrentPreferences($request) ?? [];
        return response()->json($preferences);
    }

    /**
     * function update
     *
     * Sobrescreve as preferencias do usuario na sessão
     *
     * @param Request $request
     * @return
     */
    public function update(Request $request)
    {
        $preferences = $request->session()->get('preferences');

        $preferences['theme']           = $request->theme           ?? $preferences['theme']          ?? 'default';
        $preferences['language']        = $request->language        ?? $preferences['language']       ?? config('app.locale');
        $preferences['dark_mode']       = $request->dark_mode       ?? $preferences['dark_mode']      ?? false;
        $preferences['sidebar_opened']  = $request->sidebar_opened  ?? $preferences['sidebar_opened'] ?? false;

        $request->session()->put('preferences', $preferences);

        return response()->json($preferences);
    }

    /**
     * function updateKey
     *
     * Atualiza uma chave das preferencias do usuario na sessão
     *
     * @param Request $request
     * @return
     */
    public function updateKey(Request $request)
    {
        $accepted_keys = ['theme', 'language', 'dark_mode', 'sidebar_opened'];

        if(
            !in_array($request->key, $accepted_keys) ||
            !$request->key ||
            strlen($request->key) < 1
        )
        {
            return response()->json(['error' => 'Invalid key or value'], 400);
        }

        $preferences = self::getCurrentPreferences($request) ?? [];

        $preferences[$request->key]     = in_array($request->key, ['sidebar_opened', 'dark_mode'])
                                        ? !! self::typeByValue($request->value)
                                        : self::typeByValue($request->value);

        $request->session()->put('preferences', $preferences);

        return response()->json($preferences);
    }

    public static function getCurrentPreferences()
    {
        $preferences = \Session::get('preferences');

        $preferences['theme']           = $preferences['theme']          ?? 'default';
        $preferences['language']        = $preferences['language']       ?? config('app.locale');
        $preferences['dark_mode']       = $preferences['dark_mode']      ?? false;
        $preferences['sidebar_opened']  = $preferences['sidebar_opened'] ?? false;

        return $preferences ?? [];
    }

    public static function getPreference(string $key)
    {
        $preferences = self::getCurrentPreferences();

        return $preferences[$key] ?? null;
    }

    public static function typeByValue($value)
    {
        if(in_array($value, ['true', 'false']))
            return BoolenFormater::strToBool($value);

        return $value;
    }
}
