<?php

namespace App\Controllers;

use App\Models\NilaiAlternatifModel;
use App\Models\normalisasimodel;
use App\Models\sepatumodel;
use App\Models\kriteriamodel;
use App\Models\preferensimodel;
use App\Models\rankmodel;

class Home extends BaseController
{
    // public function index(): string
    // {
    //     return view('welcome_message');
    // }
    public function __construct()
    {
        $this->sepatumodel = new sepatumodel(); // Load model
        $this->kriteriamodel = new kriteriamodel(); // Load model
        $this->NilaiAlternatifModel = new NilaiAlternatifModel();
    }
    public function index()
    {
        $data['jumlah_sepatu'] = $this->sepatumodel->countsepatu();
        $data['jumlah_kriteria'] = $this->kriteriamodel->countkriteria();
        $data['jumlah_nilai'] = $this->NilaiAlternatifModel->countNilaiAlternatif();
        echo view('Admin_header');
        echo view('Admin_nav');
        echo view('home', $data);
        echo view('Admin_footer');
    }

    public function formnormalisasi()
    {
        $normalisasi = new normalisasimodel();
        $dtnorm = $normalisasi->tampilnormalisasi();

        $data =[
            'dtnorm' => $dtnorm
        ];
        echo view('Admin_header');
        echo view('Admin_nav');
        echo view('viewNormalisasi', $data);
        echo view('Admin_footer');
    }
    public function formpreferensi()
    {
        $preferensi = new preferensimodel();
        $dtpre = $preferensi->tampilpreferensi();

        $data =[
            'dtpre' => $dtpre
        ];
        echo view('Admin_header');
        echo view('Admin_nav');
        echo view('viewPreferensi', $data);
        echo view('Admin_footer');
    }
    public function formrank()
    {
        $rank = new rankmodel();
        $dtrnk = $rank->tampilrank();

        $data =[
            'dtrank' => $dtrnk
        ];
        echo view('Admin_header');
        echo view('Admin_nav');
        echo view('viewRank', $data);
        echo view('Admin_footer');
    }
}
