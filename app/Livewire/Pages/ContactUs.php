<?php

namespace App\Livewire\Pages;

use App\Mail\UserFeedback;
use Illuminate\Support\Facades\Mail;
use Livewire\Attributes\Title;
use Livewire\Component;

class ContactUs extends Component
{
    #[Title('Contact Us')]

    public $name;
    public $email;
    public $message;

    protected $rules = [
        'name' => 'required|min:6',
        'email' => 'required|email',
        'message' => 'required|min:10',
    ];

    public function render()
    {
        return view('livewire.pages.contact-us');
    }

    function SubmitMessage()
    {
        $this->validate();
        // Send email

        $feedback = [
            'name' => $this->name,
            'email' => $this->email,
            'user_message' => $this->message,
        ];

        Mail::to('info@gentriiqsafaris.co.ke')->send(new UserFeedback($feedback));

        $this->reset();
    }
}
