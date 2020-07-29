<?php namespace App\Models;

use CodeIgniter\Database\ConnectionInterface;
use CodeIgniter\Model;

class CustomerModel extends Model
{
    protected $table = 'Customers';
    
    protected $allowedFields = ['name', 'surname', 'email', 'username', 'password', 'address', 'phonenumber', 'city'];
}

?>