<?php

namespace App\Transformer;

class JurusanTransformer
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
            "nama_jurusan" => $param->nama_jurusan,
            "biaya_jurusan" => $param->biaya_jurusan,
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
          "nama_jurusan" => $param->nama_jurusan,
          "biaya_jurusan" => $param->biaya_jurusan,
        ],
      ];
  }
}
