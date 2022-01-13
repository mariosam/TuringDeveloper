<?php
/**
 * @version PHP
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
namespace PHP;

//echo "The result is "+findErrorNums([1,2,2]);

class SetMismatch {

    /**
     * Check what is the wrong duplicate number and whos missing.
     */
    public function findErrorNums($nums) {
        sort($nums);
        $dup = -1;
        $missing = 1;

        for ($i=1; $i < sizeof($nums); $i++) {
            if ( $nums[$i] == $nums[$i - 1] ) {
                $dup = $nums[$i];
            } else if ( $nums[$i] > $nums[$i - 1]+1 ) {
                $missing = $nums[$i - 1]+1;
            }
        }

        return [ $dup, $nums[sizeof($nums) - 1] != sizeof($nums) ? sizeof($nums) : $missing ];
    }
}
