<?php
/**
 * @version PHP
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ ./vendor/bin/phpunit NomeDaClasseTest.php
 */
namespace PHP;

use PHPUnit\Framework\TestCase;
require ("SetMismatch.php");

class SetMismatchTest extends TestCase {

    public function testSetMismatch() {
        $obj = new SetMismatch();
        //Test 1
        $want = [2,3];
        $got = $obj->findErrorNums([1,2,2]);
        $this->assertEquals($want, $got);
        //Test 2
        $want = [3,5];
        $got = $obj->findErrorNums([1,2,3,4,3]);
        $this->assertEquals($want, $got);
    }
}
