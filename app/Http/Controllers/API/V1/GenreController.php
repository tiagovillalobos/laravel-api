<?php

namespace App\Http\Controllers\API\V1;

use App\Actions\Generic\PaginateResultsByRequest;
use App\Http\Controllers\Controller;
use App\Http\Requests\GenreStoreRequest;
use App\Http\Requests\GenreUpdateRequest;
use App\Http\Resources\API\V1\GenreResource;
use App\Models\Genre;
use Illuminate\Http\Request;

class GenreController extends Controller
{
    public function index(Request $request, PaginateResultsByRequest $paginator)
    {
        $genres = $paginator->execute($request, Genre::class);

        return GenreResource::collection($genres);
    }

    public function show(Genre $genre)
    {
        return new GenreResource($genre);
    }

    public function store(GenreStoreRequest $request)
    {
        $genre = Genre::create($request->validated());

        return response()->json(
            new GenreResource($genre),
            201
        );
    }

    public function update(GenreUpdateRequest $request, Genre $genre)
    {
        $genre->update($request->validated());

        return response()->json(
            new GenreResource($genre)
        );
    }

    public function destroy(Genre $genre)
    {
        $genre->delete();

        return response()->json(
            null,
            204
        );
    }
}
