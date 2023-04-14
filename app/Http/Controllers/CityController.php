<?php

namespace App\Http\Controllers;

use App\Http\Resources\CityResource;
use App\Models\City;

class CityController extends Controller
{
    public function indexSite()
    {
        try {
            $data = City::orderBy('name')->get();

            return response(CityResource::collection($data), 200);
        } catch (\Exception $exception) {
            return response($exception);

        }
    }

    public function show(City $City)
    {
        try {
            return response(new CityResource($City), 200);
        } catch (\Exception $exception) {
            return response($exception);
        }
    }

}
