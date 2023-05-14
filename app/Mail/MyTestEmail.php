<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class MyTestEmail extends Mailable implements ShouldQueue
{
    use Queueable, SerializesModels;

    public $fromAddress , $to , $body , $subject , $fullname , $username;

    public function __construct($subject, $fromAddress, $fullname, $username, $body)
    {
        $this->subject = $subject;
        $this->fromAddress = $fromAddress;
        $this->fullname = $fullname;
        $this->username = $username;
        $this->body = $body;
    }

    public function build()
    {
        return $this->view('mail')
            ->with([
                'fullname' =>  $this->fullname,
                'username' =>  $this->username,
                'body' =>  $this->body,
            ])
            ->from($this->fromAddress)
            ->subject($this->subject);
    }

    public function attachments(): array
    {
        return [];
    }
}
