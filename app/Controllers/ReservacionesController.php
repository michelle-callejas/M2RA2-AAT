<?php

namespace App\Controllers;
use App\Models\ReservacionesModel;

class ReservacionesController extends BaseController
{
    public function index():string{
        $reservacion=new ReservacionesModel();
        $datos['datos']=$reservacion->findAll();
        return view('reservaciones', $datos);
    }

    public function nuevaReservacion(): string
    {
        return view('reservacion_nueva');
    }


    public function agregarReservacion()
    {
        $datos=[
            'reservacion_id'=>$this->request ->getVar('txtIdReservacion'),
            'fecha'=>$this->request ->getVar('txtFecha'),
            'cliente_id'=>$this->request ->getVar('txtClienteId'),
            'hotel_id'=>$this->request ->getVar('txtHotelId'),
            'descripcion'=>$this->request ->getVar('txtDescripcion'),
            'usuario_id'=>$this->request ->getVar('txtUsuarioId')
        ];

        $reservacion=new ReservacionesModel();
        $reservacion-> insert ($datos);
        echo "Datos guardados";
        return redirect () -> route ('ver_reservaciones');
    }

    public function eliminarReservacion($id = null)
    {
        $reservacion = new ReservacionesModel();
        $reservacion->delete($id);
        return redirect()->route('ver_reservaciones');
    
    }

    public function buscarReservacion($id = null)
    {
        $reservacion = new ReservacionesModel();
        $datos['datos'] = $reservacion->where('reservacion_id', $id)->first();
        return view('form_modificar_reservacion', $datos);
    }

    public function modificarReservacion()
    {
        $datos=[
            'reservacion_id'=>$this->request ->getVar('txtIdReservacion'),
            'fecha'=>$this->request ->getVar('txtFecha'),
            'cliente_id'=>$this->request ->getVar('txtClienteId'),
            'hotel_id'=>$this->request ->getVar('txtHotelId'),
            'descripcion'=>$this->request ->getVar('txtDescripcion'),
            'usuario_id'=>$this->request ->getVar('txtUsuarioId')
        ];

        $reservacion = new ReservacionesModel();
        $reservacion->update($datos['reservacion_id'], $datos);
        return redirect('ver_reservaciones');
    }
    
}