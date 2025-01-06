<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Controller;
use App\Models\Deal;
use App\Models\Navbar;
use App\Models\OperatorDetail;
use App\Models\OperatorNavbar;
use App\Models\Operators;
use App\Models\Popular;
use Illuminate\Http\Request;

class OperatorController extends Controller
{
    public function index(Request $request, $extension)
    {
        $navbarUrl = substr($request->segments()[0], 0, -5);
        $nestedNavbars = Navbar::getNestedNavbars();
        $pageData = Navbar::where('slug', $navbarUrl)->firstOrFail();
        $viewpage = '404';
        $data = Operators::join('operatordetails', function ($join) {
            $join->on('operators.id', '=', 'operatordetails.operator_id');
        })->where(['operators.status' => 'Yes',
            'operators.' . $_ENV['SITE_NAME'] => 1,
            'operatordetails.domain_id' => $_ENV['DOMAIN_ID'],
        ])->select('operators.*', 'operatordetails.logo AS logo', 'operatordetails.shortdesc AS shortdesc')
            ->get();

        $viewpage = 'operator.main';
        return view($viewpage, [
            'result' => $nestedNavbars,
            'data' => $data,
            'pageDetail' => $pageData,
        ]);
    }

    /**
     *
     */
    public function otaDetail(Request $request, $url)
    {
        $ota = substr($url, 0, -5);
        $nestedNavbars = Navbar::getNestedNavbars();
        $pageId = OperatorNavbar::where(['domain_id' => $nestedNavbars[0]['domainid']])->get()->pluck('page_id')->firstOrFail();
        $otaData = Operators::where('slug', $ota)->firstOrFail();
        $popularData = Popular::getPopularRoutes($pageId, $otaData['id']);
        $pageDetail = OperatorDetail::where(['operator_id' => $otaData['id'], 'domain_id' => $_ENV['DOMAIN_ID']])->firstOrFail();
        $dealsData = Deal::where(['domain_id' => $_ENV['DOMAIN_ID'], 'page_id' => $pageId, 'slug' => $ota, 'status' => 'Yes'])->orderBy('id', 'desc')->get();
        //dd($dealsData);
        return view('operator.detail', [
            'result' => $nestedNavbars,
            'otaData' => $otaData,
            'pageDetail' => $pageDetail,
            'popData' => $popularData,
            'pageId' => $pageId,
            'dealsData' => $dealsData,
            'slug' => $ota,
        ]);
    }
}
