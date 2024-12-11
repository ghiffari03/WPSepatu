<?php

namespace App\Models;

use CodeIgniter\Model;


class normalisasimodel extends Model
{
    protected $table = 'v_normalisasi';

    function __construct()
    {
        $this->db = db_connect();
    }

    function tampilnormalisasi(){
        $query = $this->db->query("select * from v_normalisasi");
        return $query->getResult();
    }
}
