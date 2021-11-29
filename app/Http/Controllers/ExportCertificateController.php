<?php

namespace App\Http\Controllers;

use App\Models\ExportCertificate;
use App\Http\Requests\StoreExportCertificateRequest;
use App\Http\Requests\UpdateExportCertificateRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

class ExportCertificateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function design() {
        return view("frontend.certificate-design");
    }

    public function export(Request $request) {

        $file = $request->file("photo");
        $name = $request->name;
        $nrc = $request->nrc;
        $verifyCode = Auth::user()->github_id;
        $courseName = $request->course_name;
        $newName = uniqid()."_".$file->getClientOriginalName();
        $img = Image::make($file);
        $waterMark = Image::make(Auth::user()->photo);
        $waterMark->resize("70","70");
        $img->insert($waterMark,'top-left',115,310);
//        $img->text($name, 1800, 1500, function($font) {
//            $font->file(public_path("Roboto-Regular.ttf"));
//            $font->size(120);
//            $font->color('#000');
//            $font->align('center');
//            $font->valign('top');
//        });
        $img->text($nrc, 351, 313, function($font) {
            $font->file(public_path("google-fonts/Montserrat-Medium.ttf"));
            $font->size(12);
            $font->color('#000');
            $font->align('center');
            $font->valign('top');
        });
        $img->text($verifyCode, 313, 333, function($font) {
            $font->file(public_path("google-fonts/Montserrat-Medium.ttf"));
            $font->size(12);
            $font->color('#000');
            $font->align('center');
            $font->valign('top');
        });
        $img->text($courseName, 253, 423, function($font) {
            $font->file(public_path("google-fonts/Montserrat-Bold.ttf"));
            $font->size(25);
            $font->color('#009eff');
            $font->align('center');
            $font->valign('top');
        });

        //save in local
        $img->save("certificates/".$newName);

        //save in db
        $exportCertificate = new ExportCertificate();
        $exportCertificate->file_path = public_path("certificates/".$newName);
        $exportCertificate->file_name = $newName;
        $exportCertificate->user_id = Auth::user()->id;
        $exportCertificate->save();

//        return $img->response();
        return redirect()->back();

    }

    public function download(Request $request) {
//        return $request;
        $exportCertificate = ExportCertificate::find($request->id);
//        return $exportCertificate;
        return response()->download($exportCertificate->file_path);
    }


    public function index()
    {
        $exportCertificate = ExportCertificate::latest("id")->get();
        return view("frontend.request-certificate",compact("exportCertificate"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreExportCertificateRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreExportCertificateRequest $request)
    {

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ExportCertificate  $exportCertificate
     * @return \Illuminate\Http\Response
     */
    public function show(ExportCertificate $exportCertificate)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ExportCertificate  $exportCertificate
     * @return \Illuminate\Http\Response
     */
    public function edit(ExportCertificate $exportCertificate)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateExportCertificateRequest  $request
     * @param  \App\Models\ExportCertificate  $exportCertificate
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateExportCertificateRequest $request, ExportCertificate $exportCertificate)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ExportCertificate  $exportCertificate
     * @return \Illuminate\Http\Response
     */
    public function destroy(ExportCertificate $exportCertificate)
    {
        //
    }
}
