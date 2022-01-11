/**
 * @version JAVASCRIPT
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ node NomeDaClasse.test
 */
const TEST = require('tape')
const GAME = require('./BaseballGame.js')

TEST('Starting test...', (t) => {
    //Test 1
    t.assert(GAME.calPoints(['5','2','C','D','+']) === 30, "Expect: 5 2 C D + = 30")
    //Test 2
    t.assert(GAME.calPoints(["5","-2","4","C","D","9","+","+"]) === 27, "Expect: 5 -2 4 C D 9 + + = 27")

    t.end()
})
