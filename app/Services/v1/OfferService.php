<?php


namespace App\Services\v1;


use Illuminate\Http\Request;

interface OfferService
{
    public function getAllOffers();
    public function getFilteredOffers(Request $request);
    public function storeOffer(Request $request);
    public function updateOffer(Request $request, $id);
    public function destroyOffer($id);
}