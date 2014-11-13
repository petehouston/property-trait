<?php namespace Petehouston\Supports\Eloquent;

trait PropertyTrait {

    public function hasProperty($prop)
    {
        return isset($this->attributes[$prop]);
    }
}
