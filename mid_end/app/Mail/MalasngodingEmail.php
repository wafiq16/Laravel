<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class MalasngodingEmail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('blueamethys16@gmail.com')
                    ->view('emailku')
                    ->with([
                        'nama' => 'Vincenzo Cassanno',
                        'website' => 'www.huda.com',
                    ])
                    ->attach(public_path('/data_file').'/huda.png', [
                      'as' => 'huda.png',
                      'mime' => 'image/png',
                    ]);
    }
}
