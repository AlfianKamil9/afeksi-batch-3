<?php

namespace App\Http\Controllers\AF_Admin_Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Event;

class CampaignController extends Controller
{
    public function showCampaignEvents()
    {
        $dataCampaign = Event::where('activity_category_event', 'CAMPAIGN')->get();
        return view('A_Page_Admin.K_Event.admin-event', [
            'data' => $dataCampaign
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
