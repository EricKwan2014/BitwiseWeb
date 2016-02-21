<?php

namespace Api\Controllers;

use App\Elderly;
use App\Http\Requests;
use Illuminate\Http\Request;
use Api\Transformers\ElderlyTransformer;

class ElderlyController extends BaseController
{
    public function index()
    {
        return $this->collection(Elderly::all(), new ElderlyTransformer);
    }

    public function store(Request $request)
    {
        return Elderly::create($request->only(['elderly_id','percentage','name']));
    }

    public function show($id)
    {
        return $this->item(Elderly::findOrFail($id), new ElderlyTransformer);
    }
}
