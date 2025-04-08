<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use RalphJSmit\Laravel\SEO\Support\SEOData;

class WelcomeController extends Controller
{
    function index() : View {
        
        $seoData = new SEOData(
            title: 'Temukan rumah impianmu sekarang!',
            description: ''
        );

        return view('guest.welcome.index',[
            'seoData' => $seoData
        ]);

    }
}
