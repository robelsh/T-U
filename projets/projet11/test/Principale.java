
import static org.junit.Assert.assertEquals;

import java.io.IOException;

import javax.naming.spi.DirStateFactory.Result;

import junit.framework.TestCase;

import org.junit.Test;
import org.junit.Ignore;
import org.junit.runner.JUnitCore;
import org.junit.runner.RunWith;
import org.junit.runners.JUnit4;
import java.util.List;
import java.util.ArrayList;
import java.util.Collection;

public class Principale{
	


    public static void main(String[] args) { 
    	
    	 org.junit.runner.Result result = JUnitCore.runClasses(TestJunit.class); 
    	 System.out.println(result.getFailures());
       int i = 0;
       ArrayList<String> listFail = new ArrayList<String>();
    	 while(i != result.getFailures().size()) {
    		 String a = result.getFailures().get(i).toString();
    		listFail.add(result.getFailures().get(i).toString());
    		 System.out.println(listFail.get(i));
    		 i ++;
              	 }

    	 }
}


    
