<?php

namespace App\Http\Controllers;

use App\Models\Chronology;
use App\Models\Report;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\AdminController;

class MemberController extends Controller
{
    public function index()
    {
        $reports = Report::where('user_id', Auth::user()->id)->get();
        $count = count($reports);

        $data = [
            'count' => $count
        ];
        return view('pages.user.home', $data);
    }

    public function reportsList()
    {
        $reports = DB::table('reports')
            ->where('reports.user_id', '=', Auth::user()->id)
            ->join('chronologies', 'chronologies.id', '=', 'reports.chronology_id')
            ->select(
                'chronologies.date as chronology_date',
                'chronologies.category as chronology_category',
                'reports.status as report_status',
                'reports.id as report_id'
            )->get();
        
        $adminController = new AdminController;
        foreach ($reports as $report) {
            $report->chronology_date = $adminController->formatDateIndoConverter($report->chronology_date);
        }

        

        $data = [
            'reports' => $reports,
        ];

        return view('pages.user.daftar-laporan', $data);
    }
}
