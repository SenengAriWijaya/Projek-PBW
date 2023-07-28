<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = 'customer';
    protected $allowedFields = ['nama_customer', 'email_customer', 'password', 'no_telp'];
}
