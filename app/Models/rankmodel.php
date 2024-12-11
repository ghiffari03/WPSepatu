<?php

namespace App\Models;

use Codeigniter\Model;

class rankmodel extends Model
{
    protected $table = 'v_final';

    public function __construct() {
        $this->db = db_connect();
    }

    function tampilrank(){
        $query = $this->db->query('select * from v_final');
        return $query->getResult();
    }
}
