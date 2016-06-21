
import static org.junit.Assert.assertEquals;

import java.io.IOException;

import javax.naming.spi.DirStateFactory.Result;

import junit.framework.TestCase;

import org.junit.Test;
import org.junit.Ignore;
import org.junit.runner.JUnitCore;
import org.junit.runner.RunWith;
import org.junit.runners.JUnit4;



public class TestJunit extends TestCase{
	
    
    /**************************** testGetAmount() ***************************************/
	//test de getAmount, si il renvoi la bonne valeur
   @Test
    public void testGetAmount() throws Exception {
    	Money m = new Money();
    	float delta = 0.01f;
        assertEquals(m.getAmount(), m.amount,delta);  
       System.out.println("testGetAmount(TestJunit): No Error");
     
      }
       
/**************************************testGetCurrency(Money a)***********************************/
    @Test
    public void testGetCurrency() throws Exception {
    	Money m = new Money();
      	float delta = 0.01f;
    	assertEquals(m.getCurrency(), m.currency,delta);
    	System.out.println("testGetCurrency(TestJunit): No Error");
    }
    
/**************************************testCheckCurrency(Money a)***********************************/

    @Test
    public void testCheckCurrencyIfTrueM() throws Exception {
    	Money m = new Money();
    	assertTrue(m.checkCurrency(m));
     System.out.println("testCheckCurrencyIfTrueM(TestJunit): No Error");
    } 
    
/**********************************testchangeCurrency(String c, float rate)*******************************/
    @Test
    public void testChangeCurrency() throws Exception{
    			
    	Money m = new Money();
    	float rate = 2;
    	String c = "USD";
    	m.changeCurrency(c, rate);
    	float delta = 0.01f;
    	assertEquals(m.getAmount(),m.amount *rate, delta);
     System.out.println("testChangeCurrency(TestJunit): No Error");
    }
    

/**********************************testAdd(float amount)*******************************/
    @Test
    public void testAdd() throws Exception{
    	Money m = new Money();
    	float amount_before = m.amount;
    	float amount = 10;
    	m.add(amount);
    	float delta = 0.01f;
    	assertEquals( m.amount, amount_before + amount, delta);
      System.out.println("testAdd(TestJunit): No Error");
    }
    
    
    
/**********************************testSub(float amount)*******************************/
    
    @Test
    public void testSud(float amount) throws Exception{
    	Money m = new Money();
    	m.sub(amount);
    	float delta = 0.01f;
    	assertEquals(m.getAmount(),m.amount - amount,delta);
      System.out.println("testSud(TestJunit): No Error");

    }
    
    
    
    
/**********************************testAdd(Money m)*******************************/
    @Test
    public void testAddAmount(Money m) throws Exception{
    	Money m2 = new Money();
    	m.add(m2);
      float delta = 0.01f;
    	assertEquals(m.getAmount(), m.amount + m2.amount,delta);
      System.out.println("testAddAmount(TestJunit): No Error");
          
     }
    
    
    
    
/**********************************testSub(Money m)*******************************/
    
    @Test
    public void testSubAmountM() throws Exception{
    	Money m = new Money();
    	Money m2 = new Money();
    	m.sub(m2);
    	float delta = 0.01f;
    	assertEquals(m.getAmount(), m.amount - m2.amount,delta);
    	System.out.println("testSubAmountM(TestJunit): No Error");
          		
    	
    }
    
/**********************************TestToString()*******************************/
    
    @Test
    public void TestToString() throws Exception{
    	Money m = new Money();
      	float delta = 0.01f;
    	assertEquals(m.getAmount() + m.getCurrency(),m.amount + m.currency, delta);
       System.out.println("TestToString(TestJunit): No Error");

    }

}


    
