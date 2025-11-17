<?php

namespace App\Livewire\Admin\Contact;

use App\Models\Contact;
use Livewire\Component;

class Index extends Component
{

    public $contacts, $deleteId;

    public function render()
    {
        $contacts = Contact::get();
        return view('livewire.admin.contact.index', compact('contacts'));
    }

     public function deleteConfirm($id)
    {
        $this->deleteId = $id;
        $this->dispatch('show-delete-modal');
    }

    public function deleteContact()
    {
        $Contact = Contact::find($this->deleteId);
        $Contact->delete();

        session()->flash('message', 'Contact deleted successfully.');
        $this->dispatch('close-delete-modal');
    }
}
