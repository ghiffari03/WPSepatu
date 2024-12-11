<?php
namespace App\Models;

use CodeIgniter\Model;

class sepatumodel extends Model
{
    protected $table = 'alternatif'; // Nama tabel di database
    protected $primaryKey = 'id_alternatif'; // Kolom ID utama di tabel
    protected $allowedFields = ['nama_alternatif']; // Kolom yang dapat diisi (nama alternatif)

    /**
     * Menyimpan data alternatif sepatu baru
     * 
     * @param array $data Data sepatu yang akan disimpan
     * @return bool
     */
    public function simpanSepatu($data)
    {
        return $this->insert($data); // Menyimpan data alternatif baru
    }

    /**
     * Menampilkan semua data alternatif sepatu
     * 
     * @return array
     */
    public function tampilData()
    {
        $dataquery = $this->db->query("SELECT * from alternatif");
        return $dataquery -> getResult();
    }

    /**
     * Mengambil data alternatif sepatu berdasarkan ID
     * 
     * @param int $id ID alternatif sepatu
     * @return array|null
     */
    public function getsepatu($id)
    {
        // Gunakan query builder
        return $this->where('id_alternatif', $id)->get()->getRow(); // Ambil satu baris sebagai objek
    }
    
    

    /**
     * Mengupdate data alternatif sepatu berdasarkan ID
     * 
     * @param array $data Data baru untuk diupdate
     * @param int $id ID alternatif yang akan diupdate
     * @return bool
     */
    public function prosesEditSepatu($data, $id)
    {
        return $this->update($id, $data); // Update data berdasarkan ID
    }

    /**
     * Menghapus data alternatif sepatu berdasarkan ID
     * 
     * @param int $id ID alternatif yang akan dihapus
     * @return bool
     */
    public function hapusSepatu($id)
    {
        return $this->delete($id); // Hapus data berdasarkan ID
    }

    /**
     * Menghitung jumlah total alternatif sepatu dalam database
     * 
     * @return int
     */
    public function countSepatu()
    {
        return $this->countAll(); // Menghitung total baris dalam tabel alternatif
    }
}
