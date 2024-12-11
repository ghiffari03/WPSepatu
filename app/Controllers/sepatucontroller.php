<?php
namespace App\Controllers;

use App\Models\SepatuModel;

class sepatucontroller extends BaseController
{
    public function __construct()
    {
        $this->sepatuModel = new SepatuModel(); // Load model yang akan digunakan
    }

    /**
     * Menampilkan daftar alternatif sepatu
     */
    public function viewSepatu()
    {
        $sepatu =new SepatuModel(); // Mengambil semua data dari tabel alternatif
        $datasepatu = $sepatu->tampilData() ;// Mengambil semua data dari tabel alternatif
        $data = [
            'datasepatu' => $datasepatu
        ];
        
        echo view('Admin_header');
        echo view('Admin_nav');
        echo view('datasepatu', $data); // View untuk menampilkan data
        echo view('Admin_footer');
    }

    /**
     * Menampilkan form untuk menambahkan alternatif sepatu baru
     */
    public function inputSepatu()
    {
        echo view('Admin_header');
        echo view('Admin_nav');
        echo view('forminputsepatu'); // View form input sepatu
        echo view('Admin_footer');
    }

    /**
     * Menyimpan data alternatif sepatu baru
     */
    public function simpanSepatu()
    {
        // Ambil data dari form
        $alternatif = $this->request->getPost('nama_alternatif'); // Nama alternatif

        // Data yang akan disimpan
        $data = [
            'nama_alternatif' => $alternatif,
        ];

        // Simpan data menggunakan model
        $this->sepatuModel->simpanSepatu($data);

        // Redirect ke halaman daftar sepatu
        return redirect()->to(site_url('datasepatu/view'))->with('success', 'Data alternatif berhasil ditambahkan.');
    }

    /**
     * Menampilkan form untuk mengedit data alternatif sepatu
     * 
     * @param int $id ID alternatif sepatu yang akan diedit
     */
    public function formeditsepatu($id)
    {
        $sepatuModel = new sepatumodel();
        $datasepatu = $sepatuModel->getsepatu($id); // Ambil satu data
    
        if (!$datasepatu) {
            // Redirect jika data tidak ditemukan
            return redirect()->to(site_url('datasepatu/view'))->with('error', 'Data tidak ditemukan!');
        }
    
        $data = [
            'datasepatu' => $datasepatu, // Mengirimkan satu objek data ke view
        ];
    
        echo view('Admin_header');
        echo view('Admin_nav');
        echo view('formeditsepatu', $data);
        echo view('Admin_footer');
    }

    /**
     * Mengupdate data alternatif sepatu
     * 
     * @param int $id ID alternatif sepatu yang akan diupdate
     */
    public function editSepatu($id)
    {
        // Ambil data dari form
        $alternatif = $this->request->getPost('nama_alternatif'); // Nama alternatif baru

        // Data yang akan diupdate
        $data = [
            'nama_alternatif' => $alternatif,
        ];

        // Update data menggunakan model
        $this->sepatuModel->prosesEditSepatu($data, $id);

        // Redirect ke halaman daftar sepatu
        return redirect()->to(site_url('datasepatu/view'))->with('success', 'Data alternatif berhasil diperbarui.');
    }

    /**
     * Menghapus data alternatif sepatu
     * 
     * @param int $id ID alternatif sepatu yang akan dihapus
     */
    public function hapusSepatu($id)
    {
        $this->sepatuModel->hapusSepatu($id); // Hapus data berdasarkan ID

        // Redirect ke halaman daftar sepatu
        return redirect()->to(site_url('datasepatu/view'))->with('success', 'Data alternatif berhasil dihapus.');
    }
}
