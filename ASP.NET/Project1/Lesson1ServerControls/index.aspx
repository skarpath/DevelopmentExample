<%@ Page Language="C#" AutoEventWireup="true" CodeFile="index.aspx.cs" Inherits="index" %>

<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">
<head runat="server">
    <title>Introduction TextBox Button</title>
    <link href="../Content/bootstrap.css" rel="stylesheet" />
    <script src="../Scripts/bootstrap.js"></script>
    <script src="../Scripts/jquery-1.10.2.js"></script>
</head>
<body>
    <form id="form1" runat="server">
    <div>
        <div class="container">
            <div class="row"><br />
                <!--ASP.NET Server form control | CssClass = class tag for ASP-->
                <asp:TextBox ID="TextBox1" CssClass="form-control" runat="server"></asp:TextBox><br />
                <asp:Button ID="Button1" CssClass="btn btn-primary" OnClick="Button1_Click" runat="server" Text="first" /><br />
                <asp:Label runat="server" ID="submit1text"></asp:Label>
                <br /><br />
            
                <!--HTML Server form control-->
                <input id="text1"  class="form-control" type="text" runat="server" /><br />
                <button type="Button2" class="btn btn-success" onserverclick="button2_ServerClick"  id="button2" runat="server">Second</button><br />
                <span id="submit2text" runat="server"></span>

            </div>
        </div>
    </div>
    </form>
</body>
</html>
