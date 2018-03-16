<?php

namespace App\Service;
use App\Rute;
use App\Transformer\RuteTransformer;
use App\Service\Contract\RuteServiceProvider;

class RuteService implements RuteServiceProvider
{

  protected $transform;

  public function __construct(RuteTransformer $transform)
  {
    $this->transform = $transform;
  }

  public function index()
  {
    $response  = Rute::all();
    $response = [
      "code" => 200,
      "status" => "success",
      "data" => $response
    ];
    $response = $this->transform->RenderCollection($response);
    return $response;
  }
}
