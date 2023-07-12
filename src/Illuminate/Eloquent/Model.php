<?php

namespace Ldaliwan\SsaWordpressEloquent\Illuminate\Eloquent;

use Ldaliwan\SsaWordpressEloquent\Illuminate\Eloquent\Services\ModelInterface;

abstract class Model implements ModelInterface
{     
    protected $table;

    public function create(array $array = [])
    {
        global $wpdb;
        
        $wpdb->insert($this->getTable(), $array);

        return $wpdb;
    }

    public function update(array $array = []){}

    public function delete(int $id){}


    public function getTable()
    {
        return $this->table;
    }
}