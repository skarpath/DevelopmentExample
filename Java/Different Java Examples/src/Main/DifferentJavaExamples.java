/* 
    This Java program is simple program to practice programming skills with Java.
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
        
        if ( 5 == 5)
        {
            System.out.println("A");
        }
        
        
        /*
        print_reverse(Message, reverseAt, true);  //If Last part is true shows reversed else no
        
        
        //Show FizzBuzz with ability to adjust numbers
        System.out.println("\nFizzBuzz Program\n");
        FizzBuzz(3, 5);
        
        
        System.out.println("\nSend Email Program\n");
                */
        
    }
    
    
    public static void print_reverse(String message, String splitAt, Boolean showReversed)
    {
        String[] reverse = message.split(splitAt);        
        
        if ( showReversed == true)
        {
            for ( int i = (reverse.length-1); i >= 0; i--)
            {
                System.out.println(reverse[i]);
            }            
        }
        else
        {
          for ( int i = 0; i < reverse.length; i++)
          {
            System.out.println(reverse[i]);
          }
        }
    }
    
    public static void FizzBuzz(int FizzCharIndex, int BuzzCharIndex)
    {
        //For mutiples of 3 print Fizz
        //For mutiples of 5 print Fizz
        for ( int i = 0; i < 100; i++)
        {           
            
            if ( i % FizzCharIndex == 0 && i % BuzzCharIndex == 0 )
            {
                System.out.println("Fizz Buzz -" + i);
            }
            else if (i % FizzCharIndex == 0)
            {
                System.out.println("Fizz -" + i);
            } else if(i % BuzzCharIndex == 0)
            {
                System.out.println("Buzz -" + i);
            }
        }
        
    }
}
    

