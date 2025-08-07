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
        // Define supported locales, adjust as needed
        $availableLocales = ['en', 'ar'];

        if (in_array($locale, $availableLocales)) {
            // Store the selected locale in session
            Session::put('locale', $locale);

            // Optionally, you can also set the app locale immediately
            App::setLocale($locale);
        }

        // Redirect back to previous page or homepage if no previous URL
        return Redirect::back();
    }
}
