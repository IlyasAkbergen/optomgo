<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Services\v1\OfferService;
use Illuminate\Http\Request;

class OfferController extends Controller
{
    protected $offerService;
    public function __construct(OfferService $offerService)
    {
        $this->middleware('auth')
            ->except('index', 'show');
        $this->offerService = $offerService;
    }

    public function index()
    {
        $offers = $this->offerService->getAllOffers();
        return view('web.offer.index', compact('offers'));
    }

    public function create()
    {
        return view('web.offer.create');
    }

    public function store(Request $request)
    {
        $this->offerService->storeOffer($request);
        $offers = $this->offerService->getAllOffers();
        return view('web.offer.index', compact('offers'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        dd('show');
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
