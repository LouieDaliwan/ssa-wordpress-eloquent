<?php

namespace Test\Unit\Eloquent;
use PHPUnit\Framework\TestCase;
use Ldaliwan\SsaWordpressEloquent\Illuminate\Eloquent\Model;

final class ModelTest extends TestCase
{
    /** @test */
    function model_class_have_create_method(): void
    {
        $this->assertTrue(method_exists(Model::class, 'create'));
    }

    /** @test */
    function model_class_have_update_method(): void
    {
        $this->assertTrue(method_exists(Model::class, 'update'));
    }

    /** @test */
    function model_class_have_delete_method(): void
    {
        $this->assertTrue(method_exists(Model::class, 'delete'));
    }

    /** @test */
    function model_class_have_property_table(): void
    {
        $this->assertTrue(property_exists(Model::class, 'table'));
    }
}