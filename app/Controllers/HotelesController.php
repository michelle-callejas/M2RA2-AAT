<?php

namespace App\Controllers;
use App\Models\HotelesModel;

class HotelesController extends BaseController
{
    public function index():string{
        $hotel=new HotelesModel();
        $datos['datos']=$hotel->findAll();
        return view('hoteles', $datos);
    }

    public function nuevoHotel(): string
    {
        return view('hotel_nuevo');
    }


    public function agregarHotel()
    {
        $datos=[
            'hotel_id'=>$this->request ->getVar('txtIdHotel'),
            'nombre'=>$this->request ->getVar('txtNombre'),
            'correoelectronico'=>$this->request ->getVar('txtCorreo'),
            'telefono'=>$this->request ->getVar('txtTelefono'),
            'direccion'=>$this->request ->getVar('txtDireccion'),
            'ciudad_id'=>$this->request ->getVar('txtCiudadId'),
            'categoria_id'=>$this->request ->getVar('txtCategoriaId'),
            'usuario_id'=>$this->request ->getVar('txtUsuarioId')
           


        ];
        $hotel=new HotelesModel();
        $hotel-> insert ($datos);
        echo "Datos guardados";
        return redirect () -> route ('ver_hoteles');
    }

    public function eliminarHotel($id = null)
    {
        $hotel = new HotelesModel();
        $hotel->delete($id);
        return redirect()->route('ver_hoteles');
    
    }

    public function buscarHotel($id = null)
    {
       $hotel = new HotelesModel();
        $datos['datos'] = $hotel->where('hotel_id', $id)->first();
        return view('form_modificar_hotel', $datos);
    }

    public function modificarHotel()
    {
        $datos=[
            'hotel_id'=>$this->request ->getVar('txtIdHotel'),
            'nombre'=>$this->request ->getVar('txtNombre'),
            'correoelectronico'=>$this->request ->getVar('txtCorreo'),
            'telefono'=>$this->request ->getVar('txtTelefono'),
            'direccion'=>$this->request ->getVar('txtDireccion'),
            'ciudad_id'=>$this->request ->getVar('txtCiudadId'),
            'categoria_id'=>$this->request ->getVar('txtCategoriaId'),
            'usuario_id'=>$this->request ->getVar('txtUsuarioId')
        ];

        $hotel = new HotelesModel();
        $hotel->update($datos['hotel_id'], $datos);
        return redirect('ver_hoteles');
    }

}