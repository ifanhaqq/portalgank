<?php

namespace App\Http\Controllers;

use App\Models\Reporter;
use Illuminate\Http\Request;
use App\Models\Chronology;
use App\Models\Report;
use Carbon\Carbon;
use DateTime;
use Illuminate\Support\Facades\DB;
use IntlDateFormatter;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
   public function index()
   {
      return view('pages.admin.dashboard');
   }

   public function getReports()
   {
      $reports = Report::get();
      $chronologies = Chronology::get();
      $reporters = Reporter::get();
      $count = count($reports);
      $chronologiesDate = [];

      foreach ($chronologies as $item) {
         $chronologiesDate[] = $this->formatDateIndonesian($item['date']);
      }

      $data = [
         'reports' => $reports,
         'chronologies' => $chronologies,
         'reporters' => $reporters,
         'chronologiesDate' => $chronologiesDate,
         'count' => $count
      ];

      return view('pages.admin.laporan', $data);
   }

   public function getTinjauReports()
   {
      $reports = DB::table('reports')
                 ->where('status', '=', 'tinjau')
                 ->join('reporters', 'reporters.id', '=', 'reports.reporter_id')
                 ->join('chronologies', 'chronologies.id', '=', 'reports.chronology_id')
                 ->join('suspects', 'suspects.id', '=', 'reports.suspect_id')
                 ->select(
                  'suspects.profession as suspect_profession',
                  'chronologies.date as chronology_date',
                  'chronologies.location as chronology_location',
                  'reporters.name as reporter_name',
                  'chronologies.category as chronology_category',
                  'chronologies.detail as chronology_detail',
                  'chronologies.supporting_evidence as chronology_supporting_evidence',
                  'reports.status as report_status',
                  'reports.id as report_id'

                 )->get();
                 

      $data = [
         'reports' => $reports,
      ];

      // dd($reports);

      return view('pages.admin.laporan-tinjau', $data);
                 
   }

   public function getProsesReports()
   {
      $reports = DB::table('reports')
                 ->where('status', '=', 'proses')
                 ->join('reporters', 'reporters.id', '=', 'reports.reporter_id')
                 ->join('chronologies', 'chronologies.id', '=', 'reports.chronology_id')
                 ->join('suspects', 'suspects.id', '=', 'reports.suspect_id')
                 ->select(
                  'suspects.profession as suspect_profession',
                  'chronologies.date as chronology_date',
                  'chronologies.location as chronology_location',
                  'reporters.name as reporter_name',
                  'chronologies.category as chronology_category',
                  'chronologies.detail as chronology_detail',
                  'chronologies.supporting_evidence as chronology_supporting_evidence',
                  'reports.status as report_status',
                  'reports.id as report_id'

                 )->get();
                 

      $data = [
         'reports' => $reports,
      ];

      // dd($reports);

      return view('pages.admin.laporan-proses', $data);
                 
   }

   public function getSelesaiReports()
   {
      $reports = DB::table('reports')
                 ->where('status', '=', 'selesai')
                 ->join('reporters', 'reporters.id', '=', 'reports.reporter_id')
                 ->join('chronologies', 'chronologies.id', '=', 'reports.chronology_id')
                 ->join('suspects', 'suspects.id', '=', 'reports.suspect_id')
                 ->select(
                  'suspects.profession as suspect_profession',
                  'chronologies.date as chronology_date',
                  'chronologies.location as chronology_location',
                  'reporters.name as reporter_name',
                  'chronologies.category as chronology_category',
                  'chronologies.detail as chronology_detail',
                  'chronologies.supporting_evidence as chronology_supporting_evidence',
                  'reports.status as report_status',
                  'reports.id as report_id'

                 )->get();
                 

      $data = [
         'reports' => $reports,
      ];

      // dd($reports);

      return view('pages.admin.laporan-proses', $data);
                 
   }



   public function formatDateIndonesian($date)
   {
      // Create a DateTime object
      $date = new DateTime($date);

      // Set the locale to Indonesian
      $locale = 'id_ID';

      // Create an IntlDateFormatter object
      $formatter = new IntlDateFormatter(
         $locale,
         IntlDateFormatter::LONG,  // Date format
         IntlDateFormatter::NONE,  // No time format needed
         'Asia/Jakarta',           // Timezone
         IntlDateFormatter::GREGORIAN
      );

      // Format the date
      return $formatter->format($date);
   }
}
