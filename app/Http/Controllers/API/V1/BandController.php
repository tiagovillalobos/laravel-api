<?php

namespace App\Http\Controllers\API\V1;

use App\Actions\Generic\PaginateResultsByRequest;
use App\Http\Controllers\Controller;
use App\Http\Requests\BandStoreRequest;
use App\Http\Requests\BandUpdateRequest;
use App\Http\Resources\API\V1\BandResource;
use App\Models\Band;
use Illuminate\Http\Request;

class BandController extends Controller
{
    public function index(Request $request, PaginateResultsByRequest $paginator)
    {
        $bands = $paginator->execute($request, Band::class);

        return BandResource::collection($bands);
    }

    public function store(BandStoreRequest $request)
    {
        $band = Band::create($request->only('name', 'country_id'));

        $band->genres()->attach($request->genres_ids);

        return response()->json(
            new BandResource($band),
            201
        );
    }

    public function show(Band $band)
    {
        return new BandResource($band);
    }

    public function update(BandUpdateRequest $request, Band $band)
    {
        $band->update($request->only('name', 'country_id'));

        $band->genres()->sync($request->genres_ids);

        return new BandResource($band);
    }

    public function destroy(Band $band)
    {
        $band->genres()->detach();
        $band->delete();

        return response()->json(null, 204);
    }
}
