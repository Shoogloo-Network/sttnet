<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Popular extends Model
{
    use HasFactory;
    protected $table = 'populars';
    protected $fillable = [
        'page_id',
        'subpage_id',
        'trainroute_id',
        'route_status',
        'operator_id',
        'operator_status',
    ];

    public static function getPopularRoutes($pid, $spid)
    {

        $popularData = DB::table('populars as pop')
            ->select([
                'pop.page_id',
                'pop.subpage_id',
                'pop.trainroute_id',
                'tr.name as route_name',
                'tr.slug as route_slug',
                'rtd.shortdesc as route_shdesc',
                'rtd.logo as route_logo',
            ])

            ->join('routes as tr', 'tr.id', '=', 'pop.trainroute_id')
            ->leftJoin('routedetails as rtd', function ($join) {
                $join->on('rtd.route_id', '=', 'tr.id');
                $join->where('rtd.domain_id', '=', $_ENV['DOMAIN_ID']);
            })
            ->where([
                'pop.page_id' => $pid,
                'pop.subpage_id' => $spid,
                'pop.route_status' => 'Yes',
                'tr.' . $_ENV['SITE_NAME'] => 1,
            ])
            ->get();

        return $popularData;
    }

    public static function getPopularAgents($pid, $spid)
    {

        $popularData = DB::table('populars as pop')
            ->select([
                'pop.page_id',
                'pop.subpage_id',
                'pop.operator_id',
                'opr.name as operator_name',
                'opr.slug as operator_slug',
                'od.logo as operator_logo',
                'od.shortdesc as operator_shdesc',
            ])
            ->join('operators as opr', 'opr.id', '=', 'pop.operator_id')
            ->leftJoin('operatordetails as od', function ($join) {
                $join->on('od.operator_id', '=', 'opr.id');
                $join->where('od.domain_id', '=', $_ENV['DOMAIN_ID']);
            })
            ->where('pop.operator_id', '!=', 0)
            ->where([
                'pop.page_id' => $pid,
                'pop.subpage_id' => $spid,
                'pop.operator_status' => 'Yes',
                'opr.' . $_ENV['SITE_NAME'] => 1,
            ])->get();

        return $popularData;
    }
}
