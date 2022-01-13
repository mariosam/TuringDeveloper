/**
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package JAVA;

import java.util.Arrays;

public class SetMismatch {

    public static void main(String[] args) {
        int[] ops = {1,2,3,4,3};
        System.out.println("The result is "+Arrays.toString( findErrorNums( ops ) ) );
    }

    /**
     * Check what is the wrong duplicate number and whos missing.
     */
    public static int[] findErrorNums(int[] nums) {
        Arrays.sort(nums);
        int dup = -1, missing = 1;

        for (int i = 1; i < nums.length; i++) {
            if (nums[i] == nums[i - 1]) {
                dup = nums[i];
            } else if (nums[i] > nums[i - 1] + 1) {
                missing = nums[i - 1] + 1;
            }
        }

        return new int[] { dup, nums[nums.length - 1] != nums.length ? nums.length : missing };
    }
}
