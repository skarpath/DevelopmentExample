using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;

/// <summary>
/// Summary description for firstClass2
/// </summary>
public class firstClass1
{

    public int firstInt { get; set; }
    public string FirstString{ get; set;}
    public double firstDouble { get; set; }
    public char firstchar{ get; set; }

    //Constructor
    public firstClass1() {

    }

    //Different contrsuctor - sets all characters
    public firstClass1(int first, string second, double third, char forth)
    {
        this.firstInt = first;
        this.FirstString = second;
        this.firstDouble = third;
        this.firstchar = forth;
    }

    public string FirstMethodReturn()
    {
        return this.FirstString;
    }
   


    public int[] arrayMethods()
    {
        //Other Stuff
        double[] balanceme = new double[10];
        balanceme[0] = 4500.0;
        balanceme[2] = 5500.0;
        balanceme[3] = 6500.0;

        int[] marks = new int[] { 71, 55, 94, 44, 95};
        int[] score = marks;
        //Other
        int[] hello = new int[10];
      
        

        for (int i = 0; i < 10; i++)
        {
            hello[i] = i + 100;  
        }        
        
        return hello;

    }
   

    
}