<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Contacts;

class ContactUpdate extends Component
{
    public $name;
    public $phone;
    public $contactId;

    protected $listeners = [
        'getContact' => 'showContact'
    ];

    public function render()
    {
        return view('livewire.contact-update');
    }

    public function showContact($contacts)
    {
        $this->name            = $contacts['name'];
        $this->phone           = $contacts['phone'];
        $this->contactId       = $contacts['id'];
    }

    public function update()
    {
        $this->validate([
            'name'  => 'required|min:3',
            'phone' => 'required|min:4',
        ]);

        if (isset($this->contactId)) {
            $contacts = Contacts::find($this->contactId);
            $contacts->update([
                'name'  => $this->name,
                'phone' => $this->phone,
                ]);
        }

        $this->resetInput();

        $this->emit('update',$contacts);
    }

    private function resetInput()
    {
        $this->name = null;
        $this->phone = null;
    }
}
