<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Biodata extends Component
{
    public $biodata;
    public function render()
    {
        $this->biodata = array(
            'nama'              => 'M. Irsyadul Anam',
            'alamat'            => 'Jemirahan Jabon',
            'jk'                => 'Laki-laki',
            'no_hp'             => '089699480617',
            'kewarganegaraan'   => 'Indonesia',

        );
        return view('livewire.biodata');
    }
}
