/**
 * @version GO
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ go test
 */
package GO

import "testing"

func TestBaseballGame(t *testing.T) {
	tables := []struct {
		ops  string
		want int
	}{
		{"5 2 C D +", 30},
		{"5 -2 4 C D 9 + +", 27},
	}

	for _, table := range tables {
		got := BaseballGame(table.ops)

		if got != table.want {
			t.Errorf("Waiting for this %d but the return was this: %d", table.want, got)
		}
	}
}
