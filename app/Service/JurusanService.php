<?php

namespace App\Service;
use App\Jurusan;
use App\Transformer\JurusanTransformer;
use App\Service\Contract\JurusanServiceProvider;

class JurusanService implements JurusanServiceProvider
{

  protected $transform;

  public function __construct(JurusanTransformer $transform)
  {
    $this->transform = $transform;
  }

  public function index()
  {
    $response  = Jurusan::all();

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
    $response = Jurusan::find($id);

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
    $response = Jurusan::create($payload);
    $response = Jurusan::find($response['id']);

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
    $response = Jurusan::where('id',$id)
                ->update($payload);
    $response = Jurusan::find($id);

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
    $response = Jurusan::destroy($id);

    $response = [
      "code" => 200,
      "status" => "destroyed",
      "data" => []
    ];

    return $response;
  }

}
