<?php
namespace App\Models;

use CodeIgniter\Model;

class kriteriamodel extends Model
{
    protected $table = 'kriteria'; // Nama tabel
    protected $primaryKey = 'id_kriteria'; // Primary key tabel
    protected $allowedFields = ['nama_kriteria', 'keterangan', 'bobot', 'jenis']; // Field yang boleh diisi
    protected $useTimestamps = false; // Nonaktifkan timestamps jika tidak digunakan

    // Constructor untuk koneksi database
    public function __construct()
    {
        parent::__construct();
        $this->db = db_connect();
    }

    // Simpan kriteria baru
    public function simpanKriteria($data)
    {
        return $this->insert($data);
    }

    // Ambil semua data kriteria
    public function tampilData()
    {
        $dataquery = $this->db->query("SELECT * from kriteria");
        return $dataquery -> getResult();
    }

    // Ambil data kriteria berdasarkan ID
    public function getKriteria($id)
    {
        return $this->where('id_kriteria', $id)->first();
    }

    // Tambahkan di dalam class `kriteriamodel`
    public function prosesEditKriteria($data, $id)
    {
        return $this->update($id, $data); // Memperbarui data berdasarkan id
    }

    // Hapus data kriteria berdasarkan ID
    public function hapusKriteria($id)
    {
        return $this->delete($id);
    }

    // Hitung jumlah total kriteria
    public function countKriteria()
    {
        return $this->countAll();
    }
}
