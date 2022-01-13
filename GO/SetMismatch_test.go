/**
 * @version GO
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ go test
 */
package GO

import (
	"reflect"
	"testing"
)

func TestSetMismatch(t *testing.T) {
	tables := []struct {
		ops  []int
		want []int
	}{
		{[]int{1, 2, 2}, []int{2, 3}},
		{[]int{1, 2, 3, 4, 3}, []int{3, 5}},
	}

	for _, table := range tables {
		got := findErrorNums(table.ops)

		if !reflect.DeepEqual(got, table.want) {
			t.Errorf("Waiting for this %v but the return was this: %v", table.want, got)
		}
	}
}
