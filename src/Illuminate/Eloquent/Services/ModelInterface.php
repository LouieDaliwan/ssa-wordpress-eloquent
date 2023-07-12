<?php

namespace Ldaliwan\SsaWordpressEloquent\Illuminate\Eloquent\Services;

interface ModelInterface
{
    public function create(array $array = []);

    public function update(array $array = []);

    public function delete(int $id);

    public function findById(int $id = null);
}