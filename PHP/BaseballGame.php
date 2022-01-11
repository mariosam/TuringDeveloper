<?php
/**
 * @version PHP
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
namespace PHP;

class BaseballGame {    

    //echo "The result is "+calPoints("5 2 C D +");

    /**
     * RECEIVE ARRAY OF VALUES TO CALCULATE THE POINTS
     */
    public function calPoints($ops): int {
        $result = 0;    //to return the final result
        $ar = array();  //to save the numbers that we need sum

        //check all values of array
        foreach ($ops as $op) {
            switch ($op) {
                case "D": //echo "D double the previos number";
                    $d = $ar[ sizeof($ar)-1 ] * 2;
                    array_push($ar, $d);
                    break;
                case "C": //echo "C to remove";
                    array_pop($ar);
                    break;
                case "+": //echo "+ Add two previous number";
                    $p = $ar[ sizeof($ar)-1 ] + $ar[ sizeof($ar)-2 ];
                    array_push($ar, $p);
                    break;
                default: //echo "save the number: " + op;
                    array_push($ar, $op);
            }
        }

        //echo "Sum the numbers: " + a;
        foreach ($ar as $a) {
            $result += $a;
        }

        return $result;
    }
}
