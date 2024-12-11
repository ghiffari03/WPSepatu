<?php
namespace App\Models;

use CodeIgniter\Model;

class NilaiAlternatifModel extends Model
{
    protected $table = 'nilai_kriteria'; 
    protected $primaryKey = 'id_nilai';
    protected $allowedFields = ['id_alternatif', 'id_kriteria', 'nilai']; 


     function simpanNilaiAlternatif($table, $data)
    {
        $this->db->table($table)->insert($data);
        return true;
    }

    public function tampilDataNilaiAlternatif()
    {
        $dataquery = $this->db->query("SELECT * from nilai_kriteria, kriteria, alternatif where nilai_kriteria.id_alternatif=alternatif.id_alternatif and nilai_kriteria.id_kriteria=kriteria.id_kriteria");
        return $dataquery -> getResult();
    }
    public function tampildata()
    {
        $dataquery = $this->db->query("SELECT * from nilai_kriteria");
        return $dataquery -> getResult();
    }

    public function getNilaiAlternatif($id)
    {
        $query =$this->db->query('select * from nilai_kriteria where id_alternatif='.$id);
        return $query->getResult();
    }

    public function prosesEditNilaiAlternatif($table, $data, $where)
    {
        $this->db->table($table)->update($data, $where);
        return true;
    }

    public function hapusNilaiAlternatif($id)
    {
        return $this->delete($id);
    }

    public function countNilaiAlternatif()
    {
        return $this->countAll();
    }
}