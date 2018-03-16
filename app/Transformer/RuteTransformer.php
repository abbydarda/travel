<?php

namespace App\Transformer;

class RuteTransformer
{

  protected $params;
  public function RenderCollection($params)
  {
    $this->params = $params;
    $param = $params['data'];

    return $param->map(function ($param){
        return [
          "id" => $param->id,
          "code" => $this->params['code'],
          "status" => $this->params['status'],
          "data" => [
            "rute_name" => $param->rute_name,
            "rute_price" => $param->rute_price,
          ],
        ];
    });
  }
}
