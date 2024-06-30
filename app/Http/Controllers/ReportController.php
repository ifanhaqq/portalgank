<?php

namespace App\Http\Controllers;

use App\Models\Chronology;
use App\Models\Report;
use App\Models\Reporter;
use App\Models\Suspect;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReportController extends Controller
{
    public function store(Request $request)
    {
        $manualIncrement = count(Report::get()) + 1;
        $image = $request->file('chronology_file');
        $imageName = $image->getClientOriginalName();

        $report = new Report();
        $reporter = new Reporter();
        $suspect = new Suspect();
        $chronology = new Chronology();

        $reporter->id = $manualIncrement;
        $reporter->as = $request->reporter_role;
        $reporter->name = $request->reporter_name;
        $reporter->profession = $request->reporter_profession;
        $reporter->profession_id = $request->reporter_profession_id;
        $reporter->address = $request->reporter_address;
        $reporter->phone_number = $request->reporter_phone_number;

        $suspect->id = $manualIncrement;
        $suspect->name = $request->suspect_name;
        $suspect->profession = $request->suspect_profession;
        $suspect->profession_id = $request->suspect_profession_id;

        $chronology->id = $manualIncrement;
        $chronology->date = $request->chronology_date;
        $chronology->user_id = Auth::user()->id;
        $chronology->category = $request->chronology_category;
        $chronology->location = $request->chronology_location;
        $chronology->detail = $request->chronology_detail;
        $chronology->supporting_evidence = $imageName;

        $report->id = $manualIncrement;
        $report->user_id = Auth::user()->id;
        $report->reporter_id = $manualIncrement;
        $report->suspect_id = $manualIncrement;
        $report->chronology_id = $manualIncrement;
        $report->status = 'tinjau';

        $report->save();
        $reporter->save();
        $suspect->save();
        $chronology->save();

        $image->storeAs('public/img', $imageName);

        return redirect()->route('daftar-laporan')->with('success', 'Laporan anda telah berhasil ditambahkan! Silahkan menunggu untuk informasi selanjutnya.');
    }

    public function updateStatus(Request $request)
    {
        $report = Report::find($request->report_id);

        $report->status = $request->status;

        $report->save();

        return redirect()->route('get-reports')->with('success', 'Status laporan anda telah berhasil diubah!');
    } 
}
