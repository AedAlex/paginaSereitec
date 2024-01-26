<?php

namespace Controllers;

use MVC\Router;

class PaginasController {
    public static function index(Router $router) {

        $router->render('paginas/index', [
        ]);
    }

    public static function paneles(Router $router) {
        
        $router->render('paginas/paneles', [
        ]);
    }

    public static function aireAcondicionado(Router $router) {
        
        $router->render('paginas/aireAcondicionado', [
        ]);
    }

    public static function domotica(Router $router) {
        
        $router->render('paginas/domotica', [
        ]);
    }

    public static function contacto(Router $router) {

        $mensaje = null;

        if($_SERVER['REQUEST_METHOD'] === 'POST') {

            $respuestas = $_POST['contacto'];

            ini_set( 'display_errors', 1 );
            error_reporting( E_ALL );
            $destino ="ventas@sereitec.com";
            $headers = "MIME-Version: 1.0 \r\n";
            $headers.= "Content-type: text/html; charset=UTF-8 \r\n";
            $headers.= "From: PAGINA WEB SEREITEC.COM <admin@sereitec.com>\r\n";
            $headers.= "To: ventas@sereitec.com\r\n";
            $contenido = '<html>';
            $contenido .= '<p style="text-transform: uppercase; font-weight: bold;">Tienes una nueva solicitud de contacto</p>';
            $contenido .= '<p><span style="font-weight: bold;">Nombre: </span>' .$respuestas['nombre'] . '</p>';
            $contenido .= '<p><span style="font-weight: bold;">Teléfono: </span>' .$respuestas['telefono'] . '</p>';
            $contenido .= '<p><span style="font-weight: bold;">Email: </span>' .$respuestas['correo'] . '</p>';
            $contenido .= '<p><span style="font-weight: bold;">Mensaje: </span>' .$respuestas['mensaje'] . '</p>';
            $contenido .='</html>';
            
            mail(
                $destino,
                "SOLICITUD DE CONTACTO Y MENSAJE DESDE LA PAGINA WEB",
                $contenido,
                $headers
            );
            $mensaje = "El correo ha sido enviado";


        }
        
        $router->render('paginas/contacto', [
            'mensaje' => $mensaje
        ]);
    }
    }
