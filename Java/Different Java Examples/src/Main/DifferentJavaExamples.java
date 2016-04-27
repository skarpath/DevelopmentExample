/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package Main;

/**
 *
 * @author Stephen
 */
public class DifferentJavaExamples {

    /**
     * @param args the command line arguments
     */
    public static void main(String[] args) {
        // TODO code application logic here
        
        //Prints Reverse Message from string
        String Message = "My name is Stephen";
        String reverseAt = " ";
       // print_reverse(Message, reverseAt); 
        
        FizzBuzz();
    }
    
    public static void print_reverse(String message, String splitAt)
    {
        String[] reverse = message.split(splitAt);
        
        for ( int i = (reverse.length-1); i >= 0; i--)
        {
            System.out.println(reverse[i]);
        }
    }
    
    public static void FizzBuzz()
    {
        //For mutiples of 3 print Fizz
        //For mutiples of 5 print Fizz
        for ( int i = 0; i < 100; i++)
        {
            
            
            
            if (i % 3 == 0)
            {
                System.out.println("Fizz" + i);
            } else if(i % 5 == 0)
            {
                System.out.println("Buzz" + i);
            }
        }
        
    }
}
    

