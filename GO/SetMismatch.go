/**
 * @version GO
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package GO

import "sort"

func SetMismatch(nums []int) {
}

/**
 * Check what is the wrong duplicate number and whos missing.
 */
func findErrorNums(nums []int) []int {
	sort.Ints(nums)
	dup := -1
	missing := 1

	for i := 1; i < len(nums); i++ {
		if nums[i] == nums[i-1] {
			dup = nums[i]
		} else if nums[i] > nums[i-1]+1 {
			missing = nums[i-1] + 1
		}
	}

	out := missing
	if nums[len(nums)-1] != len(nums) {
		out = len(nums)
	}

	return []int{dup, out}
}
