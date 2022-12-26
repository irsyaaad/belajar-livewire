<?php

namespace App\Http\Livewire;

use App\Models\Contacts;
use Livewire\Component;

class ContactCreate extends Component
{
    // public $contacts;
    // get data from passing from view
    // public function mount($contacts)
    // {
    //     $this->contacts =  $contacts;
    // }
    // end function

    public $name;
    public $phone;

    public function render()
    {
        return view('livewire.contact-create');
    }

    public function store()
    {
        $this->validate([
            'name'  => 'required|min:3',
            'phone' => 'required|min:4',
        ]);

        $contacts = Contacts::create([
            'name'  => $this->name,
            'phone' => $this->phone,
        ]);

        $this->resetInput();

        $this->emit('simpan',$contacts);
    }

    public function update(Type $var = null)
    {
        # code...
    }

    private function resetInput()
    {
        $this->name = null;
        $this->phone = null;
    }
}
