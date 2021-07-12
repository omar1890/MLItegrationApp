<?php
/**
 * Created by PhpStorm.
 * User: Omar Wael
 * Date: 7/10/2021
 * Time: 11:47 AM
 */

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
class FileManagement extends Controller
{
    public function getMainView()
    {
        return view('index');
    }

    public function fileUploadPost(Request $request)
    {
        $request->validate([
            'file' => 'required|mimes:pdf,xlx,csv|max:2048',
        ]);

        $fileName = time().'.'.$request->file->extension();

        $request->file->move(public_path('uploads-datasets'), $fileName);
        $filePath =Storage::path($fileName);
        $result = exec(" python C:\laragon\www\MLItegrationApp\test.py  '$filePath' ");
        Log::debug($result);
        return view('sequence')
            ->with('success','You have successfully upload file.')
            ->with('File Path',Storage::path($fileName));

    }
}