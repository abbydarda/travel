<?php

namespace App\Service;
use App\Service\Contract\SupirServiceProvider;
use App\Transformer\SupirTransformer;
use App\Supir;

class SupirService implements SupirServiceProvider
{

    protected $transform;

    public function __construct(SupirTransformer $transform)
    {
      $this->transform = $transform;
    }

    public function index()
    {
      $response  = Supir::all();
      
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
      $response = Supir::find($id);

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
      $response = Supir::create($payload);
      $response = Supir::find($response['id']);

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
      $response = Supir::where('id',$id)
                  ->update($payload);
      $response = Supir::find($id);

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
      $response = Supir::destroy($id);

      $response = [
        "code" => 200,
        "status" => "destroyed",
        "data" => []
      ];

      return $response;
    }
}
