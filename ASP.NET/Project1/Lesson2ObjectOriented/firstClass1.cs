using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;

//Name space is where including custom libaries where you declare custom name file
//NOTE you must place classes in app code folder
namespace firstClassme
{

     /// <summary>
    /// Summary description for firstClass1
    /// </summary>
    /// 

    public class firstClass1
    {
        public int firstInt { get; set; } //Sets-get property
        public string FirstString { get; set; }
        public double firstDouble { get; set; }
        public char firstchar { get; set; }

        //Constructor
        public firstClass1()
        {
            
        }

        //Different contrsuctor - sets all characters
        public firstClass1(int first, string second, double third, char forth)
        {
            this.firstInt = first;
            this.FirstString = second;
            this.firstDouble = third;
            this.firstchar = forth;
        }

    }
}