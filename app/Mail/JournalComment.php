<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class JournalComment extends Mailable
{
    use Queueable, SerializesModels;

    public $data; // property aprasymas

    /**
     * Create a new message instance.
     *
     * @return void
     */
    //$data ateina iš kontrolerio  $EmailInfo
    public function __construct($data) //kai kuriama n nauja obj
    {
//        dd($data);
        $this->data = $data; // $this-> - targetinu property ir issisaugau duomenis kas paduodama $data
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('Emails/JournalCommentForm');
    }
}
