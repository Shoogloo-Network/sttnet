<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Controller;
use App\Models\Navbar;
use App\Models\Route;
use App\Models\RouteDetail;
use App\Models\RouteNavbar;
use Illuminate\Http\Request;

class JourneyController extends Controller
{
    public function index(Request $request, $extension)
    {
        $navbarUrl = substr($request->segments()[0], 0, -5);
        $nestedNavbars = Navbar::getNestedNavbars();
        $pageData = Navbar::where('slug', $navbarUrl)->firstOrFail();

        $viewpage = '404';
        $data = Route::where(['status' => 'Yes', $_ENV['SITE_NAME'] => 1])->orderBy('name', 'asc')->get();
        $viewpage = 'cityroute.routemain';

        return view($viewpage, [
            'result' => $nestedNavbars,
            'data' => $data,
            'pageDetail' => $pageData,
        ]);
    }

    /**
     *
     */
    public function routeDetail(Request $request, $route)
    {
        $route = substr($route, 0, -5);
        //$route = substr($request->segments()[1], 0, -5);
        $nestedNavbars = Navbar::getNestedNavbars();
        $pageId = RouteNavbar::where(['domain_id' => $nestedNavbars[0]['domainid']])->get()->pluck('page_id')->firstOrFail();
        $routeData = Route::where('slug', $route)->firstOrFail();
        $pageDetail = RouteDetail::where(['route_id' => $routeData['id'], 'domain_id' => $_ENV['DOMAIN_ID']])->firstOrFail();
        //$routeshome = Trainroutes::inRandomOrder()->limit(4)->get();

        return view('cityroute.route-detail', [
            'result' => $nestedNavbars,
            'routeData' => $routeData,
            'pageDetail' => $pageDetail,
            'pageId' => $pageId,
            'slug' => $route,
        ]);
    }
}
