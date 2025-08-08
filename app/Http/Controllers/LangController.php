<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;

class LangController extends Controller
{
    /**
     * Switch the application locale
     * 
     * @param string $locale
     * @return \Illuminate\Http\RedirectResponse
     */
public function switch($locale)
{
    $availableLocales = ['en', 'ar']; // your supported locales

    if (in_array($locale, $availableLocales)) {
        session(['locale' => $locale]);
        app()->setLocale($locale);
    }

    return redirect()->back();
}

}
