<?php

namespace App\Http\Controllers;

use App\Http\Resources\StateResource;
use App\Models\State;
use Illuminate\Http\Request;

class StateController extends Controller
{

    public function indexSite()
    {
        try {
            $data = State::orderBy('name')->get();

            return response(StateResource::collection($data), 200);
        } catch (\Exception $exception) {
            return response($exception);

        }
    }

    public function show(State $State)
    {
        try {
            return response(new StateResource($State), 200);
        } catch (\Exception $exception) {
            return response($exception);
        }
    }


}
