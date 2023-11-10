<?php

namespace App\Http\Controllers;

use App\Imports\PjmImport;
use App\Models\Pjm;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class PjmController extends Controller
{
    public function importViewPJM(Request $request)
    {
        $pjms = Pjm::where('users_id', auth()->user()->id)->get();
        return view('importPJM', [
            'pageTitle' => 'File Import PJM',
            'pjms' => $pjms
        ]);
    }

    public function import(Request $request)
    {
        Excel::import(new PjmImport, $request->file('file')->store('files'));
        return redirect()->back();
    }
}
