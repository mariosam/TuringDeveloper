<?php
/**
 * @version PHP
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ ./vendor/bin/phpunit NomeDaClasseTest.php
 */
namespace PHP;

use PHPUnit\Framework\TestCase;
require ("BaseballGame.php");

class BaseballGameTest extends TestCase {

    public function testBaseballGame() {
        $game = new BaseballGame();
        //Test 1
        $want = 30;
        $got = $game->calPoints(["5","2","C","D","+"]);
        $this->assertEquals($want, $got);
        //Test 2
        $want = 27;
        $got = $game->calPoints(["5","-2","4","C","D","9","+","+"]);
        $this->assertEquals($want, $got);
    }
}
