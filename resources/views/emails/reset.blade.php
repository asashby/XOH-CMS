<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
    "http://www.w3.org/TR/html4/loose.dtd">
<html lang="en" style="background-color: #e6e6e6;">
<head>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700;900&display=swap" rel="stylesheet">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- So that mobile will display zoomed in -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- enable media queries for windows phone 8 -->
    <meta name="format-detection" content="telephone=no">
    <!-- disable auto telephone linking in iOS -->
    <meta charset="UTF-8">
    <title>Mailling Restablecer Contraseña Enel</title>
</head>
<body
    style="margin: 0; padding: 0; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%; box-sizing: border-box; background-color: #e6e6e6;font-family: 'Poppins', sans-serif;">
<table border="0" cellpadding="0" cellspacing="0" width="90%"
       style="background-color: #e6e6e6; height: 472px; margin: 0 auto; max-width: 700px; mso-table-lspace: 0pt; mso-table-rspace: 0pt;">
    <tr>
        <td>
            <center>
                <table border="0" cellspacing="0" cellpadding="0" width="100%"
                       style="border: 1px solid #e8e8e8; font-family: arial; height: 93px; margin: 0 auto; max-width: 620.1px;background-color: #e6e6e6;">
                    <tbody>
                    <tr>
                        <td>
                            <center>
                                <table border="0" cellspacing="0" cellpadding="0" width="100%"
                                       style="background-color: white; padding: 60px 38px;">
                                    <tbody>
                                    <tr>
                                        <td style="width: 50%;">
                                            <div
                                                style="padding-left: 17px;color: #e73766; font-size: 20px;font-weight: bold;line-height: 18.5px;max-width: 200px">
                                                Recupera tu contraseña
                                            </div>
                                        </td>
                                        <td style="width: 50%;">
                                            <div style="text-align: right; padding-right: 17px;">
                                                <img src="https://laddigital.s3-sa-east-1.amazonaws.com/logo-enel.png">
                                            </div>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                                <table style="width: 100%;background-color: white;margin-top:21px" border-color: grey;>
                                    <tbody>
                                    <tr>
                                        <td style="padding: 79px 80px 59px 80px">
                                            <div>
                                                <p style="text-align: center; font-size: 18px; color: #5c5c5c;">Hola
                                                    <span style="border-bottom: 1px solid #5c5c5c">{{$name}}</span>,
                                                </p>
                                                <p style="color: #5c5c5c;text-align: center">
                                                    Se ha restablecido su contraseña para el portal web de Sin Excusas
                                                </p>
                                                <p style="color: #5c5c5c;text-align: center">
                                                    Haz clic en el botón para recuperarla:
                                                </p>
                                                <p style="text-align: center;margin-bottom: 20px">
                                                    <button
                                                        style="background-color: #e73766;color: white;height: 45px;width: 324px;border: 1px solid #e73766;font-size: 19px;font-weight: bold;margin-top: 40px">
                                                        <a href="{{env('RESET_PASSWORD_URL','https://enel.netlify.app/nueva-contrasena?token=').$token}}"
                                                           target="_blank" style="color: white;text-decoration: none">RESTABLECER
                                                            CONTRASEÑA</a>
                                                    </button>
                                                </p>
                                            </div>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </center>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </center>
        </td>
    </tr>
</table>
<table width="100%">
    <tr>
        <td>
            <div style="background-color: #ffffff; padding-top: 45px; padding-bottom: 45px;margin-top: 20px">
                <p style="padding: 0 42px; color: #7b7b7b; text-align: center; margin-bottom: 30px;">
                    © Enel Perú Todos los derechos reservados.
                </p>
            </div>
        </td>
    </tr>
</table>
</body>
</html>
