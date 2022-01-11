<?php
/**
 * @version PHP
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ ./vendor/bin/phpunit NomeDaClasseTest.php
 */
namespace PHP;

use PHPUnit\Framework\TestCase;
require ("ValidParentheses.php");

class ValidParenthesesTest extends TestCase {

    public function testValidParentheses() {
        $obj = new ValidParentheses();
        //Test 1
        $want = true;
        $got = $obj->isValid("()");
        $this->assertEquals($want, $got);
        //Test 2
        $want = true;
        $got = $obj->isValid("()[]{}");
        $this->assertEquals($want, $got);
        //Test 3
        $want = false;
        $got = $obj->isValid("(]");
        $this->assertEquals($want, $got);
        //Test 4
        $want = false;
        $got = $obj->isValid("([)]");
        $this->assertEquals($want, $got);
        //Test 5
        $want = true;
        $got = $obj->isValid("{[]}");
        $this->assertEquals($want, $got);
    }
}
