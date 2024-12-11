<?php
namespace App\Controllers;

use App\Models\kriteriamodel;

class kriteriacontroller extends BaseController
{
    protected $kriteriamodel;

    public function __construct()
    {
        $this->kriteriamodel = new kriteriamodel();
    }
    
    public function getKriteria($id)
    {
        return $this->where('id_kriteria', $id)->first(); // Mengembalikan satu objek
    }

    // Menampilkan semua kriteria
    public function viewkriteria()
    {
        $kriteria = new kriteriamodel();
        $datakrit = $kriteria->tampilData();
        $data = [
            'datakr' => $datakrit
        ];

        echo view('Admin_header');
        echo view('Admin_nav');
        echo view('kriteria', $data);
        echo view('Admin_footer');
    }

    // Menampilkan form tambah kriteria
    public function inputkr()
    {
        echo view('Admin_header');
        echo view('Admin_nav');
        echo view('forminputkriteria');
        echo view('Admin_footer');
    }

    // Menyimpan data kriteria baru
    public function simpankr()
    {
        $data = [
            'nama_kriteria' => $this->request->getPost('nama_kriteria'),
            'keterangan' => $this->request->getPost('keterangan'),
            'bobot' => $this->request->getPost('bobot'),
            'jenis' => $this->request->getPost('jenis'),
        ];

        $this->kriteriamodel->simpanKriteria($data);
        return redirect()->to(site_url('datakriteria/view'))->with('success', 'Data kriteria berhasil ditambahkan.');
    }

    // Menampilkan form edit kriteria berdasarkan ID
    public function formeditkr($id_kriteria)
    {
        $datakr = $this->kriteriamodel->getKriteria($id_kriteria); // Ambil data tunggal

        $data = [
            'datakr' => $datakr // Kirimkan sebagai objek
        ];

        echo view('Admin_header');
        echo view('Admin_nav');
        echo view('formeditkriteria', $data);
        echo view('Admin_footer');
    }

    // Memproses update data kriteria
    public function editkr($id)
    {
        $data = [
            'nama_kriteria' => $this->request->getPost('nama_kriteria'),
            'keterangan' => $this->request->getPost('keterangan'),
            'bobot' => $this->request->getPost('bobot'),
            'jenis' => $this->request->getPost('jenis'),
        ];
    
        // Debug untuk memastikan data
        // echo '<pre>';
        // print_r($data);
        // echo '</pre>';
        // die();
    
        $this->kriteriamodel->prosesEditKriteria($data, $id);
    
        return redirect()->to(site_url('datakriteria/view'))->with('success', 'Data kriteria berhasil diperbarui.');
    }
    


    // Menghapus data kriteria berdasarkan ID
    public function hapuskr($id)
    {
        $this->kriteriamodel->hapusKriteria($id);
        return redirect()->to(site_url('datakriteria/view'))->with('success', 'Data kriteria berhasil dihapus.');
    }
}
