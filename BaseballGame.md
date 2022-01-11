Baseball Game

You are keeping score for a baseball game with strange rules. The game consists of several rounds, where the scores of past rounds may affect future round's scores.
At the beginning of the game, you start with an empty record. You are given a list of strings ops, where ops[i] is the ith operating you must apply to the record and is one of the following:

1. An integer x - record a new score of x.
2. "+" - record a new score that is the sum of the previous two scores. It is guaranteed there will always be two previous scores.
3. "D" - record a new score that is double the previous score. It is guaranteed there will always be a previous score.
4. "C" - invalidate the previous score, removing it from the record. It is guaranteed there will always be a previous score.

Return the sum of all scores on the record.

Example 1:

Input: ops = ["5","2","C","D","+"]
Output: 30
Explanation:
"5" - add 5 to the record, record is now [5].
"2" - add 2 to the record, record is now [5,2].
"C" - invalidate and remove the previous score, record is now [5].
"D" - add 2 * 5 = 10 to the record, record is now [5,10].
"+" - add 5 + 10 = 15 to the record, record is now [5,10,15].
The total sum is 5 + 10 + 15 = 30.

Example 2:

Input: ops = ["5","-2","4","C","D","9","+","+"]
Output: 27
Explanation:
"5" - add 5 to the record, record is now [5].
"-2" - add -2 to the record, record is now [5,-2].
"4" - add 4 to the record, record is now [5,-2,4].
"C" - invalidate and remove the previous score, record is now [5,-2].
"D" - add 2 * -2 = -4 to the record, record is now [5,-2,-4].
"9" - add 9 to the record, record is now [5,-2,-4,9].
"+" - add -4 + 9 = 5 to the record, record is now [5,-2,-4,9,5].
"+" - add 9 + 5 = 14 to the record, record is now [5,-2,-4,9,5,14].
The total sum is 5 + -2 + -4 + 9 + 5 + 14 = 27.
