<?php

namespace App\Http\Controllers;

use App\Models\Chronology;
use App\Models\Report;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MemberController extends Controller
{
    public function index()
    {
        return view('pages.user.home');
    }

    public function reportsList()
    {
        $reports = Report::where('user_id', Auth::user()->id)->get();
        $chronologies = Chronology::where('user_id', Auth::user()->id)->get();
        $count = count($reports);

        $data = [
            'reports' => $reports,
            'chronologies' => $chronologies,
            'count' => $count
        ];

        return view('pages.user.daftar-laporan', $data);
    }
}
