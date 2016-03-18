using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;
using System.Web.UI;
using System.Web.UI.WebControls;

public partial class index : System.Web.UI.Page
{
    //Post back is what is generated when the event is generated 
    protected void Page_Load(object sender, EventArgs e)
    {

    }

    //Server controls
    protected void Button1_Click(object sender, EventArgs e)
    {
        submit1text.Text = TextBox1.Text;
    }
    protected void Button2_Click(object sender, EventArgs e)
    {
       
    }

    //HTML controls - Simliar to JavaScript
    protected void button2_ServerClick(object sender, EventArgs e)
    {
        submit2text.InnerText = text1.Value;
    }
}