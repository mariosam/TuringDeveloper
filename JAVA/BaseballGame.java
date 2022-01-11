/**
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package JAVA;

import java.util.ArrayList;
import java.util.List;
import java.util.Scanner;

public class BaseballGame {

    public static void main(String[] args) {
        Scanner sc = new Scanner(System.in);
        String[] ops = sc.nextLine().split(" ");
        sc.close();
        
        //call function and show the result
        System.out.printf("The total sum is %d\n", calPoints(ops));
    }

    /**
     * RECEIVE ARRAY OF VALUES TO CALCULATE THE POINTS
     */
    public static int calPoints(String[] ops) {
        int result = 0; //to return the final result
        List<String> ar = new ArrayList<String>(); //to save the numbers that we need sum

        //check all values of array
        for ( String op : ops ) {
            switch (op) {
                case "D": //System.out.println("D double the previos number");
                    String d = String.valueOf(Integer.parseInt( ar.get( ar.size()-1 ) )*2);
                    ar.add( d );
                    break;
                case "C": //System.out.println("C to remove");
                    ar.remove( ar.size()-1 );
                    break;
                case "+": //System.out.println("+ Add two previous number");
                    String p = String.valueOf( Integer.parseInt(ar.get( ar.size()-1 ))+Integer.parseInt(ar.get( ar.size()-2 )) );
                    ar.add( p );
                    break;
                default: //System.out.println("save the number: "+op);
                    ar.add( op );
            }
        }

        //System.out.println("Sum the numbers: "+a);
        for ( String a : ar ) {
            result += Integer.parseInt( a );
        }

        return result;
    }
}
