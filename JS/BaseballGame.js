/**
 * @version JAVASCRIPT
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */

//console.log("The total sum is "+calPoints("5 2 C D +"));

/**
 * RECEIVE ARRAY OF VALUES TO CALCULATE THE POINTS
 */
function calPoints(ops) {
	let result = 0; //to return the final result
	let ar = [];    //to save the numbers that we need sum

	//check all values of array
    ops.forEach(function (op) {
        switch (op) {
            case "D": //console.log("D double the previos number");
                let d = parseInt(ar[ ar.length-1 ]) * 2;
                ar.push(d);
                break;
            case "C": //console.log("C to remove");
                ar.pop();
                break;
            case "+": //console.log("+ Add two previous number");
                let p = parseInt(ar[ ar.length-1 ]) + parseInt(ar[ ar.length-2 ]);
                ar.push(p);
                break;
            default: //console.log("save the number: " + op);
                ar.push(op);
		}
    });

	//console.log("Sum the numbers: " + a);
    ar.forEach(function (a, i, array) {
        result += parseInt(a);
    });

	return result;
}
module.exports = {calPoints}
