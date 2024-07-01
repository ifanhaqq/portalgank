<?php

namespace App\Http\Controllers;

use App\Models\Feedback;
use Illuminate\Http\Request;

class FeedbackController extends Controller
{
    public function store(Request $request)
    {
        $feedback = new Feedback();

        $feedback->report_id = $request->report_id;
        $feedback->content = $request->content;

        $feedback->save();

        return redirect()->route('daftar-laporan')->with('success', 'Masukan anda telah berhasil dikirim! Terima kasih telah memberikan masukan');
    }
}
