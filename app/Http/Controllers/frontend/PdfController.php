<?php

namespace App\Http\Controllers\frontend;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;

class PdfController extends Controller
{
    public function download()
    {
        $filePath = public_path('files/বামযুকসের_সংবিধান.pdf'); 
        if (!file_exists($filePath)) {
            abort(404, 'PDF file not found!');
        }

        return response()->download($filePath, 'বামযুকসের_সংবিধান.pdf', [
            'Content-Type' => 'application/pdf',
        ]);
    }
}
