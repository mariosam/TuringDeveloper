<?php
/**
 * @version PHP
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
namespace PHP;

//echo "The result is "+isValid("({[]})");

class ValidParentheses {

    /**
     * Check if the order of opened/closed parentheses is valid.
     */
    public function isValid($s) {
        $stck = array();

        for ($i=0; $i < strlen($s); $i++) {
            if (sizeof($stck)>0)
                $pos = $stck[sizeof($stck)-1];

            if ($s[$i] == "(" || $s[$i] == "{" || $s[$i] == "[") {
                array_push($stck, $s[$i]);
            } else if ( ($pos == "(" && $s[$i] == ")") || ($pos == "{" && $s[$i] == "}") || ($pos == "[" && $s[$i] == "]") ) {
                array_pop($stck);
            } else {
                return false;
            }
        }

        return sizeof($stck) ? false : true;
    }
}
