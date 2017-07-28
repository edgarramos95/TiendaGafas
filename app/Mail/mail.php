<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\Cliente;

class mail extends Mailable
{
    use Queueable, SerializesModels;
    public $cliente;
    public $correo_electronico;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($correo_electronico, Cliente $cliente)
    {
        $this->cliente=$cliente;
        $this->correo_electronico=$correo;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('mailBienvenida');
    }
}
