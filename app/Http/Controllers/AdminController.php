<?php

namespace App\Http\Controllers;

use App\Models\Article;
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
      $todayReport = Chronology::where('date', Carbon::today()->toDateString())->get();
      
      $data = [
         'totalArticle' => count(Article::get()),
         'todayReport' => count($todayReport),
         'totalReport' => count(Report::get()),
         'totalTinjauReport' => count(Report::where('status', 'tinjau')->get()),
         'totalProsesReport' => count(Report::where('status', 'proses')->get()),
         'totalSelesaiReport' => count(Report::where('status', 'selesai')->get()),
      ]; 
      return view('pages.admin.dashboard', $data);
   }

   public function getReports()
   {
      $reports = DB::table('reports')
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
         )->orderBy('chronology_date', 'desc')
         ->get();

      foreach ($reports as $report) {
         $report->chronology_date = $this->formatDateIndoConverter($report->chronology_date);
      }
      $data = [
         'reports' => $reports,
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

         )
         ->orderBy('chronology_date', 'desc')
         ->get();

      foreach ($reports as $report) {
         $report->chronology_date = $this->formatDateIndoConverter($report->chronology_date);
      }

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

         )->orderBy('chronology_date', 'desc')
         ->get();

      foreach ($reports as $report) {
         $report->chronology_date = $this->formatDateIndoConverter($report->chronology_date);
      }

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

         )->orderBy('chronology_date', 'desc')
         ->get();

      foreach ($reports as $report) {
         $report->chronology_date = $this->formatDateIndoConverter($report->chronology_date);
      }

      $data = [
         'reports' => $reports,
      ];

      return view('pages.admin.laporan-selesai', $data);

   }

   public function formatDateIndoConverter($date)
   {
      $tanggal = date("j", strtotime($date));
      $bulan = date("n", strtotime($date));
      $tahun = date("Y", strtotime($date));

      switch ($bulan) {
         case '1':
            $bulan = "Januari";
            break;
         case '2':
            $bulan = "Februari";
            break;
         case '3':
            $bulan = "Maret";
            break;
         case '4':
            $bulan = "April";
            break;
         case '5':
            $bulan = "Mei";
            break;
         case '6':
            $bulan = "Juni";
            break;
         case '7':
            $bulan = "Juli";
            break;
         case '8':
            $bulan = "Agustus";
            break;
         case '9':
            $bulan = "September";
            break;
         case '10':
            $bulan = "Oktober";
            break;
         case '11':
            $bulan = "November";
            break;
         case '12':
            $bulan = "Desember";
            break;
      }

      return $tanggal . ' ' . $bulan . ' ' . $tahun;

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
