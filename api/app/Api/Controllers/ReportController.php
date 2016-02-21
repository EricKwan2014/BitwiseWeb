<?php

namespace Api\Controllers;

use App\Report;
use App\Http\Requests;
use Illuminate\Http\Request;
use Api\Transformers\ReportTransformer;

class ReportController extends BaseController
{
    public function index()
    {
        return $this->collection(Report::all(), new ReportTransformer);
    }

    public function store(Request $request)
    {
        return Report::create($request->only(['report_id','elderly_id','attempt_num','percentage','goal']));
    }

    public function show($id)
    {
        return $this->item(Report::findOrFail($id), new ReportTransformer);
    }
}
