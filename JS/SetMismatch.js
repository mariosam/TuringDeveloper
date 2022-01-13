/**
 * @version JAVASCRIPT
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */

//console.log("The result is "+findErrorNums([1,2,2]));

/**
 * Check what is the wrong duplicate number and whos missing.
 */
function findErrorNums(nums) {
	nums.sort();
    let dup = -1;
    let missing = 1;

    for ( i=1; i < nums.length; i++ ) {
        if ( nums[i] == nums[i - 1] ) {
            dup = nums[i];
        } else if ( nums[i] > nums[i - 1]+1 ) {
            missing = nums[i - 1]+1;
        }
    }

    return [ dup, nums[nums.length - 1] != nums.length ? nums.length : missing ];
}
module.exports = {findErrorNums}
