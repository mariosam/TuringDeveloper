/** 
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ mvn clean test -Dtest=your.package.TestClassName
 */ 
package JAVA;

import static org.junit.Assert.assertArrayEquals;
import org.junit.Test;

public class SetMismatchTest {

  @Test
	public void testFindErrorNums() throws Exception {
        //Test 1
        int[] want = {3, 5};
        int[] ops = {1,2,3,4,3};
        int[] got = SetMismatch.findErrorNums( ops );
        assertArrayEquals(want, got);
        //Test 2
        want = new int[] {2, 3};
        ops = new int[] {1,2,2};
        got = SetMismatch.findErrorNums( ops );
        assertArrayEquals(want, got);
	}

}
