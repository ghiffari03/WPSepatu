<?php 
namespace App\Models;

use Codeigniter\Model;

class preferensimodel extends Model{

    protected $table = 'v_preferensi';

    public function __construct(){
        $this->db = db_connect();
    }

    function tampilpreferensi(){
        $query = $this->db->query('select * from v_preferensi');
        return $query->getResult();
    }
}