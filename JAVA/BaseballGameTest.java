/** 
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ mvn clean test -Dtest=your.package.TestClassName
 */ 
package JAVA;

import static org.junit.Assert.assertEquals;
import org.junit.Test;

public class BaseballGameTest {

  @Test
	public void testCalPoints() throws Exception {
      //Test 1
      int want = 30;
      String[] ops = {"5","2","C","D","+"};
      int got = BaseballGame.calPoints( ops );
      assertEquals(want, got);
      //Test 2
      want = 27;
      ops = new String[]{"5","-2","4","C","D","9","+","+"};
      got = BaseballGame.calPoints( ops );
      assertEquals(want, got);
	}

}
