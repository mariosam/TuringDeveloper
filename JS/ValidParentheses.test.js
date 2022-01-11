/**
 * @version JAVASCRIPT
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ node NomeDaClasse.test
 */
const TEST = require('tape')
const OBJ = require('./ValidParentheses.js')

TEST('Starting ValidParentheses test...', (t) => {
    //Test 1
    t.assert(OBJ.isValid("()") === true, "Expect: () = valid")
    //Test 2
    t.assert(OBJ.isValid("()[]{}") === true, "Expect: ()[]{} = valid")
    //Test 3
    t.assert(OBJ.isValid("(]") === false, "Expect: (] = invalid")
    //Test 4
    t.assert(OBJ.isValid("([)]") === false, "Expect: ([)] = invalid")
    //Test 5
    t.assert(OBJ.isValid("{[]}") === true, "Expect: {[]} = valid")
 
    t.end()
})
 
