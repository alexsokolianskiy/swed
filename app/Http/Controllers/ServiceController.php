<?php

namespace App\Http\Controllers;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;

class ServiceController extends Controller
{
    /**
     * Change app locale
     *
     * @param Request $request
     * @param string $locale
     * @return Closure
     */
    public function switchLang(Request $request, string $locale = 'en')
    {
        if (! in_array($locale, ['en', 'ua'])) {
            abort(400);
        }
        Session::put('locale', $locale);

        return redirect()->back();
    }
}
