<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Contacts;

class DataDiriIndex extends Component
{
    public $statusUpdate = false;

    protected $listeners = [
        'simpan'    => 'handlesimpan',
        'update'    => 'handleUpdate',
    ];

    public function render()
    {
        $data['contacts'] = Contacts::latest()->get();
        return view('livewire.data-diri-index',$data);
    }

    public function getContact($id)
    {
        $this->statusUpdate = true;

        $contacts = Contacts::find($id);
        $this->emit('getContact',$contacts);
    }

    public function hapus($id)
    {
        if ($id) {
            $contacts = Contacts::find($id);
            $contacts->delete();
            session()->flash('message','Data Berhasil di Hapus');
        }
    }


    public function handlesimpan($contacts)
    {
        // dd($contacts);
        session()->flash('message','Data tersimpan');
    }

    public function handleUpdate($contacts)
    {
        // dd($contacts);
        session()->flash('message','Data '.$contacts['name'].' di Update');
    }
}
