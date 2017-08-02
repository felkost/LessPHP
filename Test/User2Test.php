<?php
/**
 * Created by PhpStorm.
 * User: Jarvis
 * Date: 02.08.2017
 * Time: 22:01
 */

namespace MyProject;

use PHPUnit\Framework\TestCase;

class User2Test extends TestCase
{
    public function testDataClass()
    {
        $user2 = new User("Джон", 33);
        $user2->getInfo();
        $this->assertEquals(33, $user2->getAge());
    }
}
