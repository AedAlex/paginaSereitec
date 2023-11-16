<?php

namespace Controllers;

use MVC\Router;
use PHPMailer\PHPMailer\PHPMailer;

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
            
            //Crear una instancia de PHP Mailer
            $mail = new PHPMailer();

            //Configurar SMTP
            $mail->isSMTP();
            $mail->Host = $_ENV['EMAIL_HOST'];
            $mail->SMTPAuth = true;
            $mail->Username = $_ENV['EMAIL_USER'];
            $mail->Password = $_ENV['EMAIL_PASS'];
            $mail->SMTPSecure = 'tls';
            $mail->Port = $_ENV['EMAIL_PORT'];

            //Configurar el contenido del email

            $mail->setFrom('admin@sereitec.com');
            $mail->addAddress('ventas@sereitec.com', 'Sereitec.com');
            $mail->Subject = 'Solicitud de Contacto desde la Página Web Sereitec.com';

            //Habilitar HTML

            $mail->isHTML(true);
            $mail->CharSet = 'UTF-8';

            //Definir contenido

            $contenido = '<html>';
            $contenido .= '<p style="text-transform: uppercase; font-weight: bold;">Tienes una nueva solicitud de contacto</p>';
            $contenido .= '<p><span style="font-weight: bold;">Nombre: </span>' .$respuestas['nombre'] . '</p>';
            $contenido .= '<p><span style="font-weight: bold;">Teléfono: </span>' .$respuestas['telefono'] . '</p>';
            $contenido .= '<p><span style="font-weight: bold;">Email: </span>' .$respuestas['correo'] . '</p>';
            $contenido .= '<p><span style="font-weight: bold;">Mensaje: </span>' .$respuestas['mensaje'] . '</p>';
            $contenido .='</html>';


            $mail->Body = $contenido;
            $mail->AltBody = 'Tienes una nueva solicitud de contacto desde la página web';


            //Enviar el email

            if($mail->send()) {
                $mensaje = "mensaje enviado correctamente";
            } else {
                $mensaje = "El mensaje no se pudo enviar...";
            }
        }
        
        $router->render('paginas/contacto', [
            'mensaje' => $mensaje


        ]);
    }
}