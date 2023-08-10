<?php

use Illuminate\Support\Facades\Route;
use App\Models\centroEjecutor;
use App\Models\Sistrat;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/centros-sistrat', function () {


    $centros = Sistrat::all();
    dd($centros);
    return view('welcome');
});

Route::get('/centros', function () {


    $centros = centroEjecutor::all();
    dd($centros);
    return view('welcome');

    // error_reporting(E_ALL);
    // ini_set('display_errors', '1');

    // //TOKEN QUE NOS DA FACEBOOK
    // $token = 'EAAKbkzQx9gQBAB55ZB53cCuQhwBuWZBGWVsKpVNgCvrYWEl1xsAwGucZB0knbyJjttBgawnyoX8M8Wx3VJmBG0Nhe9wWZCY7hT6b0ZBGkwSVHQFIbL1rKMV2y4wDQYFZBitZAoxRzHJi6fQ2cGvEaw8xf5DmQZCekaKDkRUymjlOZBNmKCNdQskuWanb0ahV9WwCMeH6i87aAYQZDZD';
    // //NUESTRO TELEFONO
    // $telefono = '521234567891';

    // $telefono = '56987493415';
    // //$telefono = '56926420713';

    // //URL A DONDE SE MANDARA EL MENSAJE
    // $url = 'https://graph.facebook.com/v16.0/112671775101658/messages';

    // //CONFIGURACION DEL MENSAJE
    // $mensaje = ''
    //         . '{'
    //         . '"messaging_product": "whatsapp", '
    //         . '"to": "'.$telefono.'", '
    //         . '"type": "template", '
    //         . '"template": '
    //         . '{'
    //         . '     "name": "Hola AMOR ",'
    //         . '     "language":{ "code": "en_US" } '
    //         . '} '
    //         . '}';
    // //DECLARAMOS LAS CABECERAS
    // $header = array("Authorization: Bearer " . $token, "Content-Type: application/json",);
    // //INICIAMOS EL CURL
    // $curl = curl_init();
    // curl_setopt($curl, CURLOPT_URL, $url);
    // curl_setopt($curl, CURLOPT_POSTFIELDS, $mensaje);
    // curl_setopt($curl, CURLOPT_HTTPHEADER, $header);
    // curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    // //OBTENEMOS LA RESPUESTA DEL ENVIO DE INFORMACION
    // echo "paso2";
    // $response = json_decode(curl_exec($curl), true);
    // //IMPRIMIMOS LA RESPUESTA
    // var_dump($response);

});
