<?php

namespace App\Http\Controllers\API\V1;

use App\Http\Controllers\Controller;
use App\Http\Requests\CountryStoreRequest;
use App\Http\Requests\CountryUpdateRequest;
use App\Http\Resources\API\V1\CountryResource;
use App\Models\Country;

class CountryController extends Controller
{
    public function index()
    {
        return CountryResource::collection(Country::paginate());
    }

    public function store(CountryStoreRequest $request)
    {
        $country = Country::create($request->validated());

        return response()->json(
            new CountryResource($country),
            201
        );
    }

    public function show(Country $country)
    {
        return new CountryResource($country);
    }

    public function update(CountryUpdateRequest $request, Country $country)
    {
        $country->update($request->validated());

        return response()->json(
            new CountryResource($country),
            200
        );
    }

    public function destroy(Country $country)
    {
        $country->delete();

        return response()->json(
            null,
            204
        );
    }
}
