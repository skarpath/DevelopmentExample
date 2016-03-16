using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;
using System.Web.UI;
using System.Web.UI.WebControls;

public partial class Lesson2ObjectOriented_Default : System.Web.UI.Page
{
    protected void Page_Load(object sender, EventArgs e)
    {
        firstClass1 afirst = new firstClass1();

        //Gets and sets data
        Listbox1.DataSource = afirst.arrayMethods();
        Listbox1.DataBind();

        //Bulleted List
        BulletedList.DataSource = afirst.arrayMethods();
        BulletedList.DataBind();


        firstClass1 asecond = new firstClass1(3, "hello", 9.00, 'Z');
        hello.Text = asecond.FirstMethodReturn();
     }
}