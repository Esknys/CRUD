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
<form method="post" name="frmEdit" action="<?php echo base_url('customer/update');?>">
 <table class="table" align="center">
 <div class="form-group">
 <tr>
 <td colspan="2" align="center">Edit Record</td>
 </tr>
 </div>
 <input type="hidden" name="id" class="form-control" id="id" value="<?php echo $customer['id'] ?>">
 <div class="form-group">
 <tr>
 <td>Name</td>
 <td><input type="text" name="txtName" value="<?php echo $customer['name']; ?>"> </td>
 </tr>
 </div>
 <div class="form-group">
 <tr>
 <td>Surame</td>
 <td><input type="text" name="txtSurname" value="<?php echo $customer['surname']; ?>"> </td>
 </tr>
 </div>
 <div class="form-group">
 <tr>
 <td>Email</td>
 <td><textarea name="txtEmail" ><?php echo $customer['email']; ?></textarea> </td>
 </tr>
 </div>
 <div class="form-group">
 <tr>
 <td>Username</td>
 <td><input type="text" name="txtUsername" value="<?php echo $customer['username']; ?>"> </td>
 </tr>
 </div>
 <div class="form-group">
 <tr>
 <td>Password</td>
 <td><input type="text" name="txtPassword" value="<?php echo $customer['password']; ?>"> </td>
 </tr>
 </div>
 <div class="form-group">
 <tr>
 <td>Address</td>
 <td><input type="text" name="txtAddress" value="<?php echo $customer['address']; ?>"> </td>
 </tr>
 </div>
 <div class="form-group">
 <tr>
 <td>Phonenumber</td>
 <td><input type="text" name="txtPhonenumber" value="<?php echo $customer['phonenumber']; ?>"> </td>
 </tr>
 </div>
 <div class="form-group">
 <tr>
 <td>City</td>
 <td><input type="text" name="txtCity" value="<?php echo $customer['city']; ?>"> </td>
 </tr>
 </div>
 <div class="form-group">
 <tr>
 <td colspan="2" align="center"><input class="btn btn-info" type="submit" value="Edit" name="btnEdit"> </td>
 </tr>
 </div>
 </table>
</form>
</div>
    </body>
</html>