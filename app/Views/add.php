<html>
    <head>
        <meta charset="UTF-8">
        <title>Customer</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    </head>
    <body>
<div class="row justify-content-center">
<form method="post" name="frmAdd" action="<?php echo site_url('customer/store');?>">
    <table class="table" align="center">
            <div class="form-group">
            <tr>
                <td colspan="2" align="center">Add Record</td>
            </tr>
            </div>
            <div class="form-group">
            <tr>
                <td>First Name</td>
                <td><input type="text" name="txtName"> </td>
            </tr>
            </div>
            <div class="form-group">
            <tr>
                <td>Last Name</td>
                <td><input type="text" name="txtSurname"> </td>
            </tr>
            </div>
            <div class="form-group">
            <tr>
                <td>Email</td>
                <td><input type="text" name="txtEmail"> </td>
            </tr>
            </div>
            <div class="form-group">
            <tr>
                <td>Username</td>
                <td><input type="text" name="txtUsername"> </td>
            </tr>
            </div>
            <div class="form-group">
            <tr>
                <td>Password</td>
                <td><input type="text" name="txtPassword"> </td>
            </tr>
            </div>
            <div class="form-group">
            <tr>
                <td>Address</td>
                <td><input type="text" name="txtAddress"> </td>
            </tr>
            </div>
            <div class="form-group">
            <tr>
                <td>Phonenumber</td>
                <td><input type="text" name="txtPhonenumber"> </td>
            </tr>
            </div>
            <div class="form-group">
            <tr>
                <td>City</td>
                <td><input type="text" name="txtCity"> </td>
            </tr>
            </div>
            <div class="form-group">
            <tr>
                <td colspan="2" align="center"><input class="btn btn-primary" type="submit" value="Add" name="btnadd"> </td>
            </tr>
            </div>
        </table>
</form>
</div>
    </body>
</html>