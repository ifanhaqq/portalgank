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
                  'suspects.profession as suspect_profession'
                 )->get();

      dd($reports);
                 
   }

   public function getProsesReports()
   {
      $reports = DB::table('reports')
                 ->where('status', '=', 'tinjau')
                 ->join('reporters', 'reporters.id', '=', 'reports.reporter_id')
                 ->join('chronologies', 'chronologies.id', '=', 'reports.chronology_id')
                 ->join('suspects', 'suspects.id', '=', 'reports.suspect_id')
                 ->select()->get();

      dd($reports);
                 
   }

   public function getSelesaiReports()
   {
      $reports = DB::table('reports')
                 ->where('status', '=', 'tinjau')
                 ->join('reporters', 'reporters.id', '=', 'reports.reporter_id')
                 ->join('chronologies', 'chronologies.id', '=', 'reports.chronology_id')
                 ->join('suspects', 'suspects.id', '=', 'reports.suspect_id')
                 ->select();

      dd($reports);
                 
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
