<?php namespace App\Models;

use CodeIgniter\Model;

class model_games extends Model
{
        protected $table      = 'games';
        protected $primaryKey = 'id';
    
        protected $useAutoIncrement = true;
    
        protected $returnType     = 'array';
        protected $useSoftDeletes = false;
    
        protected $allowedFields = ['name','recomendacion','description', 'email'];
    
        protected $useTimestamps = true;
        protected $createdField  = 'created_at';
    
        }
