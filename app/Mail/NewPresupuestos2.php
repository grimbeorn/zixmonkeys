<?php

namespace App\Mail;        

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

use App\nombre;
use App\correo;
use App\telefono;

use App\nombreProyecto;
use App\ubicacionProyecto;
use App\tipoEstructura;
use App\otra;
use App\servicioRequerido;
use App\m2Proyecto;
use App\mensaje;
use App\adjuntar;
use App\data;

class NewPresupuestos2 extends Mailable
{
    use Queueable, SerializesModels;

    protected $data;

    public $nombre;
    public $correo;
    public $telefono;
    // datos proyecto
    public $nombreProyecto;
    public $ubicacionProyecto;
    public $tipoEstructura;
    public $otra;
    public $servicioRequerido;
    public $m2Proyecto;
    public $mensaje;
    public $adjuntar;
    

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($nombre, $correo, $telefono, $nombreProyecto, $ubicacionProyecto, $tipoEstructura, $otra, $servicioRequerido, $m2Proyecto, $mensaje, $adjuntar, $data=[])
    {
        $this->nombre = $nombre;
        $this->correo = $correo;
        $this->telefono = $telefono;
        $this->nombreProyecto = $nombreProyecto;
        $this->ubicacionProyecto = $ubicacionProyecto;
        $this->tipoEstructura = $tipoEstructura;
        $this->otra = $otra;
        $this->servicioRequerido = $servicioRequerido;
        $this->m2Proyecto = $m2Proyecto;
        $this->mensaje = $mensaje;
        $this->adjuntar = $adjuntar;
        $this->data = $data;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.presupuestos2')->subject('Nueva Solicitud de Presupuesto')
                                                  ->attach($this->data['adjuntar']->getRealPath(),
                                                    [
                                                        'as'=>$this->data['adjuntar']->getClientOriginalName(),
                                                        'mime'=>$this->data['adjuntar']->getClientMimeType(),
                                                    ]);
    }
}