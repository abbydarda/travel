<?php

namespace App\Transformer;

class JadwalTransformer
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
            "nama_jadwal" => $param->nama_jadwal,
          ],
        ];
    });
  }

  public function RenderItem($params)
  {

    $this->params = $params;
    $param = $params['data'];

    return [
        "id" => $param->id,
        "code" => $this->params['code'],
        "status" => $this->params['status'],
        "data" => [
          "nama_jadwal" => $param->nama_jadwal,
        ],
      ];
  }
}
