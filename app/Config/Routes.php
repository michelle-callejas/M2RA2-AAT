<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');


$routes->get('ver_clientes','ClientesController::index');
$routes->post('agregar_cliente','ClientesController::agregarCliente');
$routes->get ('nuevo_cliente', 'ClientesController::nuevoCliente');
$routes->get('eliminar_cliente/(:num)', 'ClientesController::eliminarCliente/$1');
$routes->get('buscar_cliente/(:num)', 'ClientesController::buscarCliente/$1');
$routes->post('modificar_cliente', 'ClientesController::modificarCliente');


$routes->get('ver_hoteles','HotelesController::index');
$routes->post('agregar_hotel','HotelesController::agregarHotel');
$routes->get('nuevo_hotel','HotelesController::nuevoHotel');
$routes->get('eliminar_hotel/(:num)', 'HotelesController::eliminarHotel/$1');
$routes->get('buscar_hotel/(:num)', 'HotelesController::buscarHotel/$1');
$routes->post('modificar_hotel', 'HotelesController::modificarHotel');


$routes->get('ver_reservaciones','ReservacionesController::index');
$routes->post('agregar_reservacion','ReservacionesController::agregarReservacion');
$routes->get('nueva_reservacion','ReservacionesController::nuevaReservacion');
$routes->get('eliminar_reservacion/(:num)', 'ReservacionesController::eliminarReservacion/$1');
$routes->get('buscar_reservacion/(:num)', 'ReservacionesController::buscarReservacion/$1');
$routes->post('modificar_reservacion', 'ReservacionesController::modificarReservacion');