<?php

namespace App\Transformer;

class SupirTransformer
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
              "no_identitas" => $param->no_identitas,
              "nama_supir" => $param->nama_supir,
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
            "no_identitas" => $param->no_identitas,
            "nama_supir" => $param->nama_supir,
          ],
        ];
    }
}
