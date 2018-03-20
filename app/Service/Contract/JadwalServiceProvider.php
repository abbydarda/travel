<?php

namespace App\Service\Contract;

interface JadwalServiceProvider
{
  public function index();
  public function show($id);
  public function store($payload);
  public function update($payload, $id);
  public function destroy($id);
}
