<?php
namespace App\Controllers;

use App\Models\NilaiAlternatifModel;
use App\Models\kriteriamodel;
use App\Models\sepatumodel;


class NilaiAlternatifController extends BaseController
{
    public function __construct()
    {
        $this->nilaiAlternatifModel = new NilaiAlternatifModel();
        $this->sepatumodel = new sepatumodel();
        $this->kriteriamodel = new kriteriamodel();
    }

    public function viewNilaiAlternatif()
    {
        $kriteria = $this->kriteriamodel->tampilData();
        $alternatif = $this->sepatumodel->tampilData();
        $nilai_alternatif = $this->nilaiAlternatifModel->tampildata(); 
        $data = [
            'alternatif' => $alternatif,
            'kriteria' => $kriteria,
            'nilai_alternatif' => $nilai_alternatif, 
        ];

        echo view('Admin_header');
        echo view('Admin_nav');
        echo view('datanilai', $data); 
        echo view('Admin_footer');
    }



    public function inputNilai()
    {
        $kriteria = $this->kriteriamodel->tampilData();
        $alternatif = $this->sepatumodel->tampilData();
        $nilai_alternatif = $this->nilaiAlternatifModel->tampildata(); 
        $data = [
            'alternatif' => $alternatif,
            'kriteria' => $kriteria,
            'nilai_alternatif' => $nilai_alternatif, 
        ];

        echo view('Admin_header');
        echo view('Admin_nav');
        echo view('forminputnilai', $data);
        echo view('Admin_footer');
    }


    public function simpanNilai()
    {
        $id_alternatif = $this->request->getPost('id_alternatif');
        $kriteria = $this->kriteriamodel->tampilData();
        $nilai_alternatif = new nilaiAlternatifModel();

        foreach($kriteria as $k){
            $nilai = $this->request->getPost('C'.$k->id_kriteria);
            $data = [
                'id_alternatif' => $id_alternatif,
                'id_kriteria' => $k->id_kriteria,
                'nilai' => $nilai
            ];
            $nilai_alternatif->simpanNilaiAlternatif('nilai_kriteria', $data);
        }
        return redirect()->to(site_url('datanilai/view'))->with('success', 'Data Nilai berhasil ditambahkan');
    }

    public function formEditNilai($id)
    {
        $alternatif =  new sepatumodel();
        $kriteria = new kriteriamodel();
        $nilaialt = new NilaiAlternatifModel();

        $dtalt = $alternatif->tampilData();
        $dtkrt = $kriteria->tampilData();
        $dtnilai = $nilaialt->getNilaiAlternatif($id);

        $data = [
            'alternatif'=> $dtalt, 
            'kriteria'=> $dtkrt, 
            'nilaialternatif'=> $dtnilai, 
            'id_alternatif' =>$id
            
        ];

        echo view('Admin_header');
        echo view('Admin_nav');
        echo view('formEditNilai', $data);
        echo view('Admin_footer');
    }

    public function editNilai($id)
    {
        $nilaialt = new NilaiAlternatifModel();
        $alternatifModel = new sepatumodel();
    
        $dtpost = $this->request->getPost();
        if (!$dtpost || empty($dtpost)) {
            return redirect()->back()->with('error', 'Data tidak valid.');
        }
        $namaAlternatif = $dtpost['nama_alternatif'] ?? null;
        if ($namaAlternatif) {
            $alternatifModel->update($id, ['nama_alternatif' => $namaAlternatif]);
        }
    
        // Update nilai kriteria
        foreach ($dtpost as $key => $value) {
            if (strpos($key, 'C') === 0) {
                $idKriteria = substr($key, 1);
                $existingData = $nilaialt->where([
                    'id_alternatif' => $id,
                    'id_kriteria' => $idKriteria
                ])->first();
    
                if ($existingData) {
                    // Update existing data
                    $nilaialt->prosesEditNilaiAlternatif(
                        'nilai_kriteria',
                        ['nilai' => $value],
                        ['id_alternatif' => $id, 'id_kriteria' => $idKriteria]
                    );
                } else {
                    // Insert new data
                    $nilaialt->insert([
                        'id_alternatif' => $id,
                        'id_kriteria' => $idKriteria,
                        'nilai' => $value
                    ]);
                }
            }
        }
    
        return redirect()->to(site_url('datanilai/view'))->with('success', 'Data Nilai berhasil diperbarui');
    }
    

    public function hapusNilai($id)
    {
        $this->nilaiAlternatifModel->hapusNilaiAlternatif($id);
        return redirect()->to(site_url('datanilai/view'))->with('success', 'Data nilai berhasil dihapus.');
    }

}

?>