<?php


namespace App\Services\v1\impl;


use App\Http\Errors\ErrorCode;
use App\Models\Core\Offer;
use App\Services\v1\BaseServiceImpl;
use App\Services\v1\OfferService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OfferServiceImpl
    extends BaseServiceImpl
    implements OfferService
{

    public function getAllOffers()
    {
        return Offer::all();
    }

    public function getFilteredOffers(Request $request)
    {
        // TODO: Implement getFilteredOffers() method.
    }

    public function storeOffer(Request $request)
    {
        return $this->storeOrUpdateOffer($request);
    }

    public function updateOffer(Request $request, $id)
    {
        // TODO: Implement updateOffer() method.
    }

    public function destroyOffer($id)
    {
        // TODO: Implement destroyOffer() method.
    }

    private function storeOrUpdateOffer(Request $request, $id = null)
    {
        $offer = null;
        DB::beginTransaction();
        try {

            if (!!$id) {
                $offer = Offer::findOrFail($id);
            } else {
                $offer = new Offer();
            }

            $offer->fill($request->only([
                'title',
                'description',
                'price',
                'retail_price'
            ]));

            $offer->author_id = $request->user()->id;

            $offer->save();

            DB::commit();
        } catch (\Exception $e) {
            dd($e->getMessage());
            $this->onError($e, 'System Error', ErrorCode::SYSTEM_ERROR);
        }

        return $offer;
    }
}