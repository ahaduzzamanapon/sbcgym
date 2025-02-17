<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\AboutUs;
use App\Models\Offer;
use App\Models\Package_class;
use App\Models\SiteFeature;
use App\Models\SiteProfile;
use App\Models\SiteTrainer;

class HomeController extends Controller
{
    public function index()
    {

        $SiteProfile = SiteProfile::first();
        $AboutUs     = AboutUs::first();
        $SiteFeature = SiteFeature::all();
        $SiteTrainer = SiteTrainer::all();
        $offers      = Offer::where('status', 1)->get();
        $classes     = Package_class::where('status', 1)->get();

        return view( 'welcome', compact( 'SiteProfile', 'AboutUs', 'SiteFeature', 'SiteTrainer', 'offers', 'classes' ) );
    }

    public function privacy()
    {
        return view( 'frontend.privacy.privacy' );
    }
    public function terms_conditions()
    {
        return view( 'frontend.terms_conditions.terms_conditions' );
    }
    public function no_access()
    {
        return view( 'frontend.no_access_page.no_access' );
    }
}
