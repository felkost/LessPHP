<?php
/**
 * Created by PhpStorm.
 * User: Jarvis
 * Date: 02.08.2017
 * Time: 21:55
 */

namespace MyProject;

use PHPUnit\Framework\TestCase;

class UserTest extends TestCase
{
    public function testDataClass()
    {
        $user2 = new User("Джон", 33);

        $this->assertEquals(33, $user2->getAge());
    }
}
