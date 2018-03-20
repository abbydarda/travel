<?php

namespace App\Service;
use App\Transformer\JadwalTransformer;
use App\Jadwal;

class JadwalService
{
  protected $transform;

  public function __construct(JadwalTransformer $transform)
  {
    $this->transform = $transform;
  }

  public function index()
  {

    $response  = Jadwal::all();

    $response = [
      "code" => 200,
      "status" => "success",
      "data" => $response
    ];

    $response = $this->transform->RenderCollection($response);
    return $response;
  }

  public function show($id)
  {
    $response = Jadwal::find($id);

    $response = [
      "code" => 200,
      "status" => "success",
      "data" => $response
    ];

    $respone = $this->transform->RenderItem($response);
    return $response;
  }
  public function store($payload)
  {
    $response = Jadwal::create($payload);
    $response = Jadwal::find($response['id']);

    $response = [
      "code" => 201,
      "status" => "created",
      "data" => $response
    ];

    $response = $this->transform->RenderItem($response);

    return $response;
  }

  public function update($payload, $id)
  {
    $response = Jadwal::where('id',$id)
                ->update($payload);
    $response = Jadwal::find($id);

    $response = [
      "code" => 200,
      "status" => "updated",
      "data" => $response
    ];

    $response = $this->transform->RenderItem($response);

    return $response;
  }

  public function destroy($id)
  {
    $response = Jadwal::destroy($id);

    $response = [
      "code" => 200,
      "status" => "destroyed",
      "data" => []
    ];

    return $response;
  }
}
