<?php

namespace Ldaliwan\SsaWordpressEloquent\Eloquent\Service;

interface ModelInterface
{
    public static function create();

    public static function update();

    public static function delete();

    public function findById(int $id = null);
}