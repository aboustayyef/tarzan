<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class ContactSent extends Mailable
{
    use Queueable, SerializesModels;

    public $email, $email_message;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($email,$email_message)
    {
        $this->email = $email;
        $this->email_message = $email_message;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from(['address' => 'donotreply@tarzan.com.gh', 'name' => 'Tarzan Website Visitor'])
                    ->to('mustapha.hamoui@gmail.com')
                    ->subject('[Tarzan Contact Form Message]')
                    ->view('email.contact')->with([
                        'email' => $this->email,
                        'email_message' => $this->email_message,
                    ]);
    }
}
