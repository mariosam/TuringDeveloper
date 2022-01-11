/**
 * @version GO
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package GO

/**
 * CONNECTED WITH TEST CLASS
 */
func ValidParentheses(s string) {
}

/**
 * Check if the order of opened/closed parentheses is valid.
 */
func isValid(s string) bool {
	var stck []string
	var result bool

	for i := 0; i < len(s); i++ {
		var pos string
		if len(stck) > 0 {
			pos = stck[len(stck)-1]
		}

		if s[i] == '(' || s[i] == '{' || s[i] == '[' {
			stck = append(stck, string(s[i]))
		} else if (pos == "(" && s[i] == ')') || (pos == "{" && s[i] == '}') || (pos == "[" && s[i] == ']') {
			stck = stck[:len(stck)-1]
		} else {
			result = false
		}
	}

	if len(stck) > 0 {
		result = false
	} else {
		result = true
	}

	return result
}
