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

        <table border="1" align="center">
            <div class="form-group">
    <tr>
        <td colspan="5" align="right"><a class="btn btn-primary" href="<?php echo site_url('customer/create') ?>">Add</a></td>
    </tr>
            </div>
 <div class="form-group">
 <tr>
 <td>Name</td>
 <td>Surname</td>
 <td>Email</td>
 <td>Username</td>
 <td>Password</td>
 <td>Address</td>
 <td>Phonenumber</td>
 <td>City</td>
 <td>Action</td>
 </tr>
 </div>
 <?php
 foreach($customers_detail as $sd){
 ?>
 <div class="form-group">
 <tr>
 <td><?php echo $sd['name']; ?></td>
 <td><?php echo $sd['surname']; ?></td>
 <td><?php echo $sd['email']; ?></td>
 <td><?php echo $sd['username']; ?></td>
 <td><?php echo $sd['password']; ?></td>
 <td><?php echo $sd['address']; ?></td>
 <td><?php echo $sd['phonenumber']; ?></td>
 <td><?php echo $sd['city']; ?></td>
 <td><a class="btn btn-info"  href="<?php echo base_url(); ?>/customer/edit/<?php echo $sd['id']; ?>">Edit</a>&nbsp;<a class="btn btn-danger"  href="<?php echo base_url(); ?>/customer/delete/<?php echo $sd['id']; ?>">Delete</a></td>
 </tr>
 </div>
 <?php
 }
 ?>
 </table>
        
    </body>
</html>
