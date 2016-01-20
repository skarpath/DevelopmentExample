<%@ Page Language="C#" AutoEventWireup="true" CodeFile="FileUploadDropdownList.aspx.cs" Inherits="FileUploadDropdownList" %>

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
                               
                <h3>File upload and Dropdown list(ASP.NET Server controls):</h3>
                <br />
                <asp:FileUpload ID="FileUpload1" runat="server" />
                <br />

                <asp:Button ID="btnsave" runat="server" Text="Save" />
                <br />
                <br />
                <asp:DropDownList runat="server" ID="selectasp" AutoPostBack="true">
                    <asp:ListItem>1st</asp:ListItem>
                    <asp:ListItem>2nd</asp:ListItem>
                </asp:DropDownList>
                <asp:Label ID="lblmessagesave" runat="server" />

                <h3>File Upload and DropdownList (HTML Server controls):</h3>
                <br />
                <input id="file1" type="file" runat="server" />
                <br />
                <button runat="server" id="savefile">save</button>
                <br />
                <br />
                <select id="Select1">
                    <option>1st</option>
                    <option>2nd</option>
                </select>
                <br />
                <br />


            </div>
        </div>
    </div>
    </form>
</body>
</html>
