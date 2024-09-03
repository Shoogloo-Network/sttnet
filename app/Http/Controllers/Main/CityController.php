<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Controller;
use App\Models\Cities;
use App\Models\City_navbar;
use App\Models\Faq;
use App\Models\Navbar;
use App\Models\Popular;
use App\Models\Review;
use Illuminate\Http\Request;

class CityController extends Controller
{
    public function index(Request $request, $extension)
    {
        $navbarUrl = substr($request->segments()[0], 0, -5);
        $nestedNavbars = Navbar::getNestedNavbars();
        $pageData = Navbar::where('slug', $navbarUrl)->firstOrFail();
        $viewpage = '404';
        $data = Cities::where(['stt' => '1', 'status' => 'Yes'])->get();
        $viewpage = 'city.citymain';

        return view($viewpage, [
            'result' => $nestedNavbars,
            'data' => $data,
            'pageDetail' => $pageData,
        ]);
    }

    public function cityDetail(Request $request, $url)
    {
        $slug = substr($url, 0, -5);
        $nestedNavbars = Navbar::getNestedNavbars();

        $cityData = Cities::where('slug', $slug)->firstOrFail();
        $pageDetail = Cities::getCityDetails($cityData['id'], $_ENV['DOMAIN_ID']);
        $pageId = City_navbar::where(['domain_id' => $nestedNavbars[0]['domainid'], 'city_id' => $cityData['id']])
            ->pluck('page_id')->firstOrFail();

        $popularRoutes = Popular::getPopularRoutes($pageId, $cityData['id']);
        $popularAgents = Popular::getPopularAgents($pageId, $cityData['id']);

        $faqData = Faq::where(['page_id' => $pageId, 'slug' => $cityData['slug'], 'status' => 'Yes'])->get();

        $reviewData = Review::where(['page_id' => $pageId, 'slug' => $cityData['slug'], 'status' => 'Yes'])->get();

        return view('city.detail', [
            'result' => $nestedNavbars,
            'pageData' => $cityData,
            'pageDetail' => $pageDetail,
            'routeData' => $popularRoutes,
            'agentData' => $popularAgents,
            'faqData' => $faqData,
            'reviews' => $reviewData,
            'slug' => $slug,
            'pageId' => $pageId,
        ]);
    }

}
