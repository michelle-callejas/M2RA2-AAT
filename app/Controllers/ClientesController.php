<?php

namespace App\Controllers;
use App\Models\ClientesModel;

class ClientesController extends BaseController
{
    public function index():string
    {
        $cliente=new ClientesModel();
        $datos['datos']=$cliente-> findAll();
        return view('clientes', $datos);
    }
    public function nuevoCliente(): string
    {
        return view('cliente_nuevo');
    }


    public function agregarCliente()
    {
        $datos=[
            'cliente_id'=>$this->request ->getVar('txtIdCliente'),
            'nombre'=>$this->request ->getVar('txtNombre'),
            'apellido'=>$this->request ->getVar('txtApellido'),
            'nit'=>$this->request ->getVar('txtNit'),
            'telefono'=>$this->request ->getVar('txtTelefono'),
            'correo_electronico'=>$this->request ->getVar('txtCorreo'),
            'direccion'=>$this->request ->getVar('txtDireccion'),
            'contrasenia'=>$this->request ->getVar('txtContra')
        ];

        $cliente=new ClientesModel();
        $cliente-> insert ($datos);
        echo "Datos guardados";
        return redirect () -> route ('ver_clientes');
    }

    public function eliminarCliente($id = null)
    {
        $cliente = new ClientesModel();
        $cliente->delete($id);
        return redirect()->route('ver_clientes');
    
    }

    public function buscarCliente($id = null)
    {
        $cliente = new ClientesModel();
        $datos['datos'] = $cliente->where('cliente_id', $id)->first();
        return view('form_modificar_cliente', $datos);
    }

    public function modificarCliente()
    {
        $datos=[
            'cliente_id'=>$this->request ->getVar('txtIdCliente'),
            'nombre'=>$this->request ->getVar('txtNombre'),
            'apellido'=>$this->request ->getVar('txtApellido'),
            'nit'=>$this->request ->getVar('txtNit'),
            'telefono'=>$this->request ->getVar('txtTelefono'),
            'correo_electronico'=>$this->request ->getVar('txtCorreo'),
            'direccion'=>$this->request ->getVar('txtDireccion'),
            'contrasenia'=>$this->request ->getVar('txtContra')
        ];

        $cliente = new ClientesModel();
        $cliente->update($datos['cliente_id'], $datos);
        return redirect()->route('ver_clientes');     }

}