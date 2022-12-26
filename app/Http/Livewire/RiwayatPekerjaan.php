<?php

namespace App\Http\Livewire;

use Livewire\Component;

class RiwayatPekerjaan extends Component
{
    public $riwayat;
    public function render()
    {
        $this->riwayat = array(
            'perusahaan'              => 'Pt. Lintas Samudera Jaya',
            'tahun'                   => '2020',
            'deskripsi'               => array(
                '1'     => 'Membuat aplikasi administrasi perusahaan',
                '2'     => 'Membuat aplikasi booking setiap anak perusahaan'
            ),

        );
        return view('livewire.riwayat-pekerjaan');
    }
}
