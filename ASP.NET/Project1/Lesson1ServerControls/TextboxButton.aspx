<%@ Page Language="C#" AutoEventWireup="true" CodeFile="TextboxButton.aspx.cs" Inherits="Lesson1ServerControls_TextboxButton" %>

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
        <!--ASP.NET Server form control-->
        <asp:TextBox ID="TextBox1" runat="server"></asp:TextBox><br />
        <asp:Button ID="Button1" runat="server" Text="first" /><br />

        <!--HTML Server form control-->
        <input id="text1" type="text" runat="server" /><br />
        <button type="button" id="button2" runat="server">Second</button>
    </div>
    </form>
</body>
</html>
