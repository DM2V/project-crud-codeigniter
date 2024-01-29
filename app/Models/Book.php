<?php

namespace App\Models;

use CodeIgniter\Model;

class Book extends Model
{
  protected $table      = 'Books';
  // Uncomment below if you want add primary key
  protected $primaryKey = 'id';
  protected $allowedFields = ['name', 'author'];
}
