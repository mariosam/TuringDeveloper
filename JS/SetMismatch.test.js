/**
 * @version JAVASCRIPT
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ node NomeDaClasse.test
 */
 const TEST = require('tape')
 const OBJ = require('./SetMismatch.js')
 
 TEST('Starting SetMismatch test...', (t) => {
     //Test 1
     let ops = [1,2,2]
     let want = [2,3]
     let got = OBJ.findErrorNums( ops )
     t.assert(want.toString === got.toString, "Expect: [1,2,2] = [2,3]")
     //Test 2
     ops = [1,2,3,4,3]
     want = [3,5]
     got = OBJ.findErrorNums( ops )
     t.assert(want.toString === got.toString, "Expect: [1,2,3,4,3] = [3,5]")
  
     t.end()
 })
  
