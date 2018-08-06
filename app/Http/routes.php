<?php
use App\Ciudad;
use App\Centro_Costo;
use App\Unidad_Medida;
use App\Marca;
use App\Estado_Pago;
use App\Categoria;
use App\Proveedores;
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/



////////////////////////////////////////////////////Ciudad
Route::resource('userss', 'UserssController');


Route::post('/ciudad/delete', function () {
 $data =  Request::all();
 $delete = Ciudad::where('id_ciudad',$data['idt'])->delete();
 return Redirect::back();
});



Route::resource('ciudad/index', 'CiudadController');




  Route::POST('addciudad','CiudadController@addCiudad');


  Route::POST('editarciudad','CiudadController@editarCiudad');



///////////////////////////////////////////////////////////Ciudad







///////////////////////////////////////////////////////////CENTRO COSTO


Route::resource('CentroCosto/index', 'CentroCostoController');


  Route::POST('addcentro','CentroCostoController@addcentro');



  Route::POST('editarcentro','CentroCostoController@editarCentro');


Route::post('/Centro/delete', function () {
  $data =  Request::all();
 $delete = Centro_Costo::where('id_cc',$data['idt'])->delete();
 return Redirect::back();
});




///////////////////////////////////////////////////////////////CENTRO COSTO










////////////////////////////////////////////////////Unidad Medida
Route::resource('UnidadMedida/index', 'UnidadMedidaController');


Route::post('/UnidadMedida/delete', function () {
 $data =  Request::all();
 $delete = Unidad_Medida::where('id_unidadmedida',$data['idt'])->delete();
 return Redirect::back();
});



  Route::POST('editarunidad','UnidadMedidaController@editarunidad');


  Route::POST('addunidad','UnidadMedidaController@addunidad');





///////////////////////////////////////////////////////////Unidad Medida






////////////////////////////////////////////////////Marca
Route::resource('Marca/index', 'MarcaController');

 Route::POST('addmarca','MarcaController@addmarca');




  Route::POST('editarmarca','MarcaController@editarmarca');





Route::post('/Marca/delete', function () {
 $data =  Request::all();
 $delete = Marca::where('id_marca',$data['idt'])->delete();
 return Redirect::back();
});




///////////////////////////////////////////////////////////Marca




////////////////////////////////////////////////////Estado Pago
Route::resource('Estado_Pago/index', 'EstadoPagoController');


Route::POST('addestadopago','EstadoPagoController@addestadopago');


Route::post('Estado_Pago/delete', function () {
 $data =  Request::all();
 $delete = Estado_Pago::where('id_pago',$data['idt'])->delete();
 return Redirect::back();
});

Route::POST('editarpagoestado','EstadoPagoController@editarpagoestado');


///////////////////////////////////////////////////////////Estado Pago







////////////////////////////////////////////////////Categoría
Route::resource('Categoria/index', 'CategoriaController');




Route::POST('addcategoria','CategoriaController@addcategoria');


Route::POST('editarcategoria','CategoriaController@editarcategoria');




Route::post('/Categoria/delete', function () {
  $data =  Request::all();
 $delete = Categoria::where('id_categoria',$data['idt'])->delete();
 return Redirect::back();
});


////////////////////////////Categoría





///////////////////////////////////////////////////////////Proveedores




 Route::resource('ProveedoresC','ProveedoresController');




Route::resource('Proveedores/index', 'ProveedoresController');


Route::post('Proveedores/delete', function () {
 $data =  Request::all();
 $delete = Proveedores::where('id_proveedor',$data['idt'])->delete();
  Session::flash('delete','Se ha eliminado correctamente');
 return Redirect::back();
});



Route::get('Proveedores/create', function () {
    return view('Proveedores.crear');
});

///////////////////////////////////////////////////////////////Proveedores






////////////////////////////////////////////////////////////////////producto


Route::resource('Producto/index', 'ProductoController');


 Route::resource('ProductoInventario','ProductoController');


Route::resource('ProductoC','ProductoController');


///////////////////////////////////////////////////////////////////producto










////////////////////////////////////////////////////////////////////producto


Route::resource('Factura/index', 'FacturaController');


  Route::POST('addPost','FacturaController@addPost');


  Route::POST('adddetalletemporal','FacturaController@addtemporal');

  Route::POST('delatedetalletemporal','FacturaController@delatedetalletemporal');


///////////////////////////////////////////////////////////////////producto





///////////////////////////////////////////////////////////////////////stock

Route::resource('StockC','StockController');




  ///////////////////////////////////////////////////////////////////Stock










Route::get('/', function () {
    return view('welcome');
});

Route::get('/be', function () {
    return view('menu/menu_principal');
});
Route::auth();

Route::group(['middleware' => ['auth']], function() {

	Route::get('/home', 'HomeController@index');

	Route::resource('users','UserController');

	Route::get('roles',['as'=>'roles.index','uses'=>'RoleController@index','middleware' => ['permission:role-list|role-create|role-edit|role-delete']]);
	Route::get('roles/create',['as'=>'roles.create','uses'=>'RoleController@create','middleware' => ['permission:role-create']]);
	Route::post('roles/create',['as'=>'roles.store','uses'=>'RoleController@store','middleware' => ['permission:role-create']]);
	Route::get('roles/{id}',['as'=>'roles.show','uses'=>'RoleController@show']);
	Route::get('roles/{id}/edit',['as'=>'roles.edit','uses'=>'RoleController@edit','middleware' => ['permission:role-edit']]);
	Route::patch('roles/{id}',['as'=>'roles.update','uses'=>'RoleController@update','middleware' => ['permission:role-edit']]);
	Route::delete('roles/{id}',['as'=>'roles.destroy','uses'=>'RoleController@destroy','middleware' => ['permission:role-delete']]);

	Route::get('users',['as'=>'users.index','uses'=>'UserController@index','middleware' => ['permission:Crear_Usuarios|Mostrar_Usuarios|Editar_Usuarios|Eliminar_Usuarios']]);
	Route::get('users/create',['as'=>'users.create','uses'=>'UserController@create','middleware' => ['permission:Crear_Usuarios']]);
	Route::post('users/create',['as'=>'users.store','uses'=>'UserController@store','middleware' => ['permission:Crear_Usuarios']]);
	Route::get('users/{id}',['as'=>'users.show','uses'=>'UserController@show']);
	Route::get('users/{id}/edit',['as'=>'users.edit','uses'=>'UserController@edit','middleware' => ['permission:Editar_Usuarios']]);
	Route::patch('users/{id}',['as'=>'users.update','uses'=>'UserController@update','middleware' => ['permission:Editar_Usuarios']]);
	Route::delete('users/{id}',['as'=>'users.destroy','uses'=>'UserController@destroy','middleware' => ['permission:Eliminar_Usuarios']]);
});