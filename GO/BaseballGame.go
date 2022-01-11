/**
 * @version GO
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package GO

import (
	"strconv"
	"strings"
)

/*
func main() {
	reader := bufio.NewReader(os.Stdin)
	rawInput, _ := reader.ReadString('\n')
	rawInput = strings.Replace(rawInput, "\n", " ", -1)

	ops := strings.Split(rawInput, " ")
	fmt.Println(calPoints(ops))
}
*/
/**
 * CONNECTED WITH TEST CLASS
 */
func BaseballGame(s string) int {
	//put the value in a valid format (array)
	ops := strings.Split(s, " ")

	//call function and show the result
	return calPoints(ops)
}

/**
 * RECEIVE ARRAY OF VALUES TO CALCULATE THE POINTS
 */
func calPoints(ops []string) int {
	var result int = 0 //to return the final result
	var ar []string    //to save the numbers that we need sum

	//check all values of array
	for _, op := range ops {
		switch op {
		case "D": //fmt.Println("D double the previos number")
			d, _ := strconv.Atoi(ar[len(ar)-1])
			ar = append(ar, strconv.Itoa(d*2))
		case "C": //fmt.Println("C to remove")
			ar = ar[:len(ar)-1]
		case "+": //fmt.Println("+ Add two previous number")
			p1, _ := strconv.Atoi(ar[len(ar)-1])
			p2, _ := strconv.Atoi(ar[len(ar)-2])
			ar = append(ar, strconv.Itoa(p1+p2))
		default: //fmt.Println("save the number: " + op)
			ar = append(ar, op)
		}
	}

	//fmt.Println("Sum the numbers: " + a)
	for _, a := range ar {
		num, _ := strconv.ParseInt(a, 10, 64)
		result += int(num)
	}

	return result
}
