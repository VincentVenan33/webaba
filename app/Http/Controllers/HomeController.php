<?php

namespace App\Http\Controllers;
use App\Models\PengunjungModel;
use App\Models\ProdukModel;
use App\Models\TeamModel;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function pengunjung()
                {
                    $pengunjung_data = PengunjungModel::select('ip', DB::raw('DATE(created_at) as day'), DB::raw('COUNT(id) as total_users'))
        ->groupBy('ip','day')
        ->get();

    $pengunjung_data_1 = PengunjungModel::select('ip', DB::raw('DATE(created_at) as day'), DB::raw('COUNT(id) as total_users'))
        ->groupBy('ip', 'day')
        ->get();

        $startDate = now()->subDays(5)->toDateString();
        $endDate = now()->toDateString();

        $result = PengunjungModel::select('t.day', DB::raw('COUNT(s.id) as total_users'))
        ->from(DB::raw('(

    SELECT CURDATE() - INTERVAL 6 DAY AS day UNION ALL
    SELECT CURDATE() - INTERVAL 5 DAY AS day UNION ALL
    SELECT CURDATE() - INTERVAL 4 DAY AS day UNION ALL
    SELECT CURDATE() - INTERVAL 3 DAY AS day UNION ALL
    SELECT CURDATE() - INTERVAL 2 DAY AS day UNION ALL
    SELECT CURDATE() - INTERVAL 1 DAY AS day UNION ALL
    SELECT CURDATE() AS day
) AS t'))
        ->leftJoin('pengunjung AS s', DB::raw('t.day'), '=', DB::raw('DATE(s.created_at)'))
        ->groupBy('t.day')
        ->get();




                    $totalTeams = TeamModel::count();

                    $totalProducts = ProdukModel::count();

                    $totalVisitors = PengunjungModel::count();

                    $totalMonthlyVisitors = PengunjungModel::select(DB::raw('COUNT(*) as totalMonthlyVisitors, YEAR(created_at) as year, MONTH(created_at) as month'))
                    ->whereYear('created_at', '=', date('Y'))
                    ->whereMonth('created_at', '=', date('m'))
                    // ->groupBy('year', 'month')
                    ->get();




                    $totalOnline = PengunjungModel::whereDate('created_at', '=', date('Y-m-d'))->count();

                    // dd($totalOnline);
                    $username = Auth::user()->username;
                    $title = "Home";
                    return view('index', [
                        'index' => $result,
                        'totalMonthlyVisitors' => $totalMonthlyVisitors,
                        'totalOnline' => $totalOnline,
                        'pengunjung_data' => $pengunjung_data,
                        'title' => $title,
                        'username' => $username,
                    ]);
                }
}