<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Service\JadwalService;

class JadwalController extends Controller
{

    protected $service;

    public function __construct(JadwalService $service)
    {
      $this->service = $service;
    }

    public function index()
    {
      $response  = $this->service->index();

      return response($response,200);
    }

    public function show($id)
    {
      $response = $this->service->show($id);

      return response($response,200);
    }

    public function store(Request $request)
    {
        $response = $this->service->store($request->all());

        return response($response,201);
    }

    public function update(Request $request, $id)
    {
        $response = $this->service->update($request->all(), $id);

        return response($response, 200);
    }

    public function destroy($id)
    {
        $response = $this->service->destroy($id);
        return response($response, 200);
    }
}
