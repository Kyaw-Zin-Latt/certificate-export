<?php

namespace App\Http\Controllers;

use App\Models\ExportCertificate;
use App\Http\Requests\StoreExportCertificateRequest;
use App\Http\Requests\UpdateExportCertificateRequest;

class ExportCertificateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("frontend.request-certificate");
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
        //
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
