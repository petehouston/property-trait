<?php
use Petehouston\Supports\Eloquent\PropertyTrait;

class User extends Illuminate\Database\Eloquent\Model {

    use PropertyTrait;
}

class PropertyTraitTest extends PHPUnit_Framework_TestCase {

    public function testPropertyExists()
    {
        $user = new User;
        $prop = 'existing_prop';
        $user->{$prop} = 'certainly exists';
        $this->assertTrue($user->hasProperty($prop));
    }

    public function testProperyNotExist()
    {
        $user = new User;
        $this->assertFalse($user->hasProperty('inexistence_property'));
    }
}


