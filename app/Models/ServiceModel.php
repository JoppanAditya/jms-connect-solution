<?php

namespace App\Models;

use CodeIgniter\Model;

class ServiceModel extends Model
{
    protected $table = 'orders';
    protected $primaryKey = 'id';
    protected $useAutoIncrement = false;
    protected $allowedFields = ['id', 'user_id', 'fullname', 'email', 'company', 'phone', 'service', 'message', 'date_created'];
}
