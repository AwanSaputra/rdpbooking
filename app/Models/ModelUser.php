<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelUser extends Model
{
    protected $table = "peserta";
    protected $allowedFields = ["username", "password", "divisi", "nama", "status"];
    protected $primaryKey = "id_data";
}
