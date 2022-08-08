<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ApiModels;
use App\Models\Invoice;
use App\Models\Orders;
use App\Models\Rp99k;
use Illuminate\Http\Request;

class Invoice99kController extends Controller
{
    
    public function __construct()
    {
        $this->apiModels = new ApiModels();
        $this->dataInvoice = new Rp99k();
    }

    public function index()
    {
        $invoices = $this->dataInvoice->getIndex()->paginate(20);
        // dd($invoices);
        $clubs = $this->apiModels->allClubs()['rows'];
        // dd($invoices);
        return view('admin.joins.index', compact('invoices', 'clubs'));
    }
    
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
