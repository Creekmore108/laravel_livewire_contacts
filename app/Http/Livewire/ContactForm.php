<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Contact;

class ContactForm extends Component
{
    public $name;
    public $email;
    public $body;
    public $contacts;

    public function submit()
    {
        $validatedData = $this->validate([
            'name'  => 'required|min:6',
            'email' => 'required|email',
            'body'  => 'required',
        ]);

        Contact::create($validatedData);

        return redirect()->to('/contact-form');
    }

    public function render()
    {
        $this->contacts = Contact::all();
        return view('livewire.contact-form');
    }
}
