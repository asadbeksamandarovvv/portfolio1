<?php
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactMail extends Mailable
{
    use Queueable, SerializesModels;

    public $request;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($request)
    {
        $this->request = $request;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('email.contact')
                    ->with([
                        'name' => $this->request->name,
                        'email' => $this->request->email,
                        'subject' => $this->request->subject,
                        'message' => $this->request->message,
                    ]);
    }
}