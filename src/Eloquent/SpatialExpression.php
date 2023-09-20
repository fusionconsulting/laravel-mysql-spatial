<?php

namespace Grimzy\LaravelMysqlSpatial\Eloquent;

use Illuminate\Database\Query\Expression;

class SpatialExpression extends Expression
{
    public function getValue(\Illuminate\Database\Query\Grammars\Grammar $grammar)
    {
        if( config('spatial.include_axis_order', false) )
            return "ST_GeomFromText(?, ?)";
        
        return "ST_GeomFromText(?, ?)";
    }

    public function getSpatialValue()
    {
        return $this->value->toWkt();
    }

    public function getSrid()
    {
        return $this->value->getSrid();
    }
}
