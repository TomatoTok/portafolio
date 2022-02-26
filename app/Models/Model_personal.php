<?php namespace App\Models;

use CodeIgniter\Model;

class model_personal extends Model
{
    
    protected $table    = 'review';
    protected $primaryKey = 'id';

    protected $returnType = 'array';
    protected $useSoftDeletes = false;

    protected $allowedFields = ['nombre_juego','recomendacion','observacion'];

    protected $useTimestamps = false;
    
    public function getAll()
    {
        $db      = \Config\Database::connect();
        $builder = $db->table('review');
        $query = $builder->get();
        return $query;
    }
}
