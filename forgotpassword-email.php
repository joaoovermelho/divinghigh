<link rel="stylesheet" href="cssemail.css">
<?php
include 'include/config.inc.php';

$email = $_POST['email'];

$query = "SELECT * FROM utilizadores WHERE email = '$email'";
$res = my_query($query);

$token = substr(str_shuffle("0123456789abcdefghijklmnopqrstvwxyz"), 0, 15);

$query = "INSERT INTO tokens(email, token) values('$email', '$token')";
$res = my_query($query);

    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;

    require 'phpmailer/vendor/autoload.php';

    $mail = new PHPMailer(true);
    $mail->CharSet = 'UTF-8';
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = "smtp-pt.securemail.pro";    // SMTP server example
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = "no-reply@padel4u.pt";            // SMTP account username example
    $mail->Password   = "PaDeL4YoU++*";            // SMTP account password example
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = 465; 
    $mail->setFrom('no-reply@padel4u.pt', 'Diving High');
    $mail->addAddress($email, $res[0]['nome']);     //Add a recipient
    $mail->AddEmbeddedImage('assets/img/logo/divinghigh-logoBBG.png', 'logo');
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Recuperação de password';
    $mail->Body    = '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
    <html xmlns="http://www.w3.org/1999/xhtml" xmlns:o="urn:schemas-microsoft-com:office:office">
    
    <head>
        <meta charset="UTF-8">
        <meta content="width=device-width, initial-scale=1" name="viewport">
        <meta name="x-apple-disable-message-reformatting">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="telephone=no" name="format-detection">
        <title></title>
        <!--[if (mso 16)]>
        <style type="text/css">
        a {text-decoration: none;}
        </style>
        <![endif]-->
        <!--[if gte mso 9]><style>sup { font-size: 100% !important; }</style><![endif]-->
        <!--[if gte mso 9]>
    <xml>
        <o:OfficeDocumentSettings>
        <o:AllowPNG></o:AllowPNG>
        <o:PixelsPerInch>96</o:PixelsPerInch>
        </o:OfficeDocumentSettings>
    </xml>
    <![endif]-->
    </head>
    
    <body>
        <div class="es-wrapper-color">
            <!--[if gte mso 9]>
                <v:background xmlns:v="urn:schemas-microsoft-com:vml" fill="t">
                    <v:fill type="tile" color="#f4f4f4"></v:fill>
                </v:background>
            <![endif]-->
            <table class="es-wrapper" width="100%" cellspacing="0" cellpadding="0">
                <tbody>
                    <tr class="gmail-fix" height="0">
                        <td>
                            <table width="600" cellspacing="0" cellpadding="0" border="0" align="center">
                                <tbody>
                                    <tr>
                                        <td cellpadding="0" cellspacing="0" border="0" style="line-height: 1px; min-width: 600px;" height="0"><img src="https://tlr.stripocdn.email/content/guids/CABINET_837dc1d79e3a5eca5eb1609bfe9fd374/images/41521605538834349.png" style="display: block; max-height: 0px; min-height: 0px; min-width: 600px; width: 600px;" alt width="600" height="1"></td>
                                    </tr>
                                </tbody>
                            </table>
                        </td>
                    </tr>
                    <tr>
                        <td class="esd-email-paddings" valign="top">
                            <table cellpadding="0" cellspacing="0" class="es-content esd-header-popover" align="center">
                                <tbody>
                                    <tr>
                                        <td class="esd-stripe" esd-custom-block-id="7962" align="center">
                                            <table class="es-content-body" style="background-color: transparent;" width="600" cellspacing="0" cellpadding="0" align="center">
                                                <tbody>
                                                    <tr>
                                                        <td class="esd-structure es-p15t es-p15b es-p10r es-p10l" align="left">
                                                            <!--[if mso]><table width="580" cellpadding="0" cellspacing="0"><tr><td width="282" valign="top"><![endif]-->
                                                            <table class="es-left" cellspacing="0" cellpadding="0" align="left">
                                                                <tbody>
                                                                    <tr>
                                                                        <td class="esd-container-frame" width="282" align="left">
                                                                            <table width="100%" cellspacing="0" cellpadding="0">
                                                                                <tbody>
                                                                                    <tr>
                                                                                        <td class="es-infoblock esd-block-text es-m-txt-c" align="left">
                                                                                            <p style="font-family: arial, helvetica\ neue, helvetica, sans-serif;">Equipa Diving High</p>
                                                                                        </td>
                                                                                    </tr>
                                                                                </tbody>
                                                                            </table>
                                                                        </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                            <!--[if mso]></td><td width="20"></td><td width="278" valign="top"><![endif]-->
                                                            <table class="es-right" cellspacing="0" cellpadding="0" align="right">
                                                                <tbody>
                                                                    <tr>
                                                                        <td class="esd-container-frame" width="278" align="left">
                                                                            <table width="100%" cellspacing="0" cellpadding="0">
                                                                                <tbody>
                                                                                    <tr>
                                                                                        <td align="right" class="es-infoblock esd-block-text es-m-txt-c"><a class="esd-anchor" href="http://localhost/divinghigh/forgot-passwordconfirm.php?token='.$token.'" name=""></a>
                                                                                            <p>Página Principal</p>
                                                                                        </td>
                                                                                    </tr>
                                                                                </tbody>
                                                                            </table>
                                                                        </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                            <!--[if mso]></td></tr></table><![endif]-->
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <table class="es-header" cellspacing="0" cellpadding="0" align="center">
                                <tbody>
                                    <tr>
                                        <td class="esd-stripe" esd-custom-block-id="6339" align="center" bgcolor="#ffffff" style="background-color: #ffffff;">
                                            <table class="es-header-body" width="600" cellspacing="0" cellpadding="0" align="center" style="background-color: transparent;">
                                                <tbody>
                                                    <tr>
                                                        <td class="esd-structure es-p20t es-p10b es-p10r es-p10l" align="left" bgcolor="#323c46" style="background-color: #323c46;">
                                                            <table width="100%" cellspacing="0" cellpadding="0">
                                                                <tbody>
                                                                    <tr>
                                                                        <td class="esd-container-frame" width="580" valign="top" align="center">
                                                                            <table width="100%" cellspacing="0" cellpadding="0">
                                                                                <tbody>
                                                                                    <tr>
                                                                                        <td align="center" class="esd-block-image" style="font-size: 0px;"><a target="_blank"><img class="adapt-img" src="https://demo.stripocdn.email/content/guids/732dac8a-a548-4cbb-a2bc-0dfa5d33e47b/images/divinghighfinalbbg.png" alt style="display: block;" width="580"></a></td>
                                                                                    </tr>
                                                                                </tbody>
                                                                            </table>
                                                                        </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <table class="es-content" cellspacing="0" cellpadding="0" align="center">
                                <tbody>
                                    <tr>
                                        <td class="esd-stripe" esd-custom-block-id="6340" align="center">
                                            <table class="es-content-body" style="background-color: transparent;" width="600" cellspacing="0" cellpadding="0" align="center">
                                                <tbody>
                                                    <tr>
                                                        <td class="esd-structure" align="left">
                                                            <table width="100%" cellspacing="0" cellpadding="0">
                                                                <tbody>
                                                                    <tr>
                                                                        <td class="esd-container-frame" width="600" valign="top" align="center">
                                                                            <table style="background-color: #ffffff; border-radius: 4px; border-collapse: separate;" width="100%" cellspacing="0" cellpadding="0" bgcolor="#ffffff">
                                                                                <tbody>
                                                                                    <tr>
                                                                                        <td class="esd-block-text es-p35t es-p5b es-p30r es-p30l" align="center">
                                                                                            <h1>Problemas em iniciar sessão?</h1>
                                                                                        </td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td class="esd-block-spacer es-p5t es-p5b es-p20r es-p20l" bgcolor="#ffffff" align="center" style="font-size:0">
                                                                                            <table width="100%" height="100%" cellspacing="0" cellpadding="0" border="0">
                                                                                                <tbody>
                                                                                                    <tr>
                                                                                                        <td style="border-bottom: 1px solid #ffffff; background: rgba(0, 0, 0, 0) none repeat scroll 0% 0%; height: 1px; width: 100%; margin: 0px;"></td>
                                                                                                    </tr>
                                                                                                </tbody>
                                                                                            </table>
                                                                                        </td>
                                                                                    </tr>
                                                                                </tbody>
                                                                            </table>
                                                                        </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <table class="es-content" cellspacing="0" cellpadding="0" align="center">
                                <tbody>
                                    <tr>
                                        <td class="esd-stripe" align="center">
                                            <table class="es-content-body" style="background-color: #ffffff;" width="600" cellspacing="0" cellpadding="0" bgcolor="#ffffff" align="center">
                                                <tbody>
                                                    <tr>
                                                        <td class="esd-structure" align="left">
                                                            <table width="100%" cellspacing="0" cellpadding="0">
                                                                <tbody>
                                                                    <tr>
                                                                        <td class="esd-container-frame" width="600" valign="top" align="center">
                                                                            <table style="background-color: #ffffff;" width="100%" cellspacing="0" cellpadding="0" bgcolor="#ffffff">
                                                                                <tbody>
                                                                                    <tr>
                                                                                        <td class="esd-block-text es-m-txt-l es-p20t es-p15b es-p30r es-p30l" bgcolor="#ffffff" align="left">
                                                                                            <p>Se te esqueceste da palavra-passe clica no botão abaixo para a alterar.<br></p>
                                                                                        </td>
                                                                                    </tr>
                                                                                </tbody>
                                                                            </table>
                                                                        </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="esd-structure es-p20b es-p30r es-p30l" align="left">
                                                            <table width="100%" cellspacing="0" cellpadding="0">
                                                                <tbody>
                                                                    <tr>
                                                                        <td class="esd-container-frame" width="540" valign="top" align="center">
                                                                            <table width="100%" cellspacing="0" cellpadding="0">
                                                                                <tbody>
                                                                                    <tr>
                                                                                        <td class="esd-block-button es-p40t es-p40b es-p10r es-p10l" align="center"><span class="es-button-border" style="background: #323c46;"><a href="localhost/divinghigh/login.php?info=1" class="es-button" target="_blank" style="background: #323c46; border-color: #323c46;" href="http://localhost/divinghigh/forgotpasswordconfirm.php?token='.$token.'">Alterar palavra-passe</a></span></td>
                                                                                    </tr>
                                                                                </tbody>
                                                                            </table>
                                                                        </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <table class="es-content" cellspacing="0" cellpadding="0" align="center">
                                <tbody>
                                    <tr>
                                        <td class="esd-stripe" esd-custom-block-id="6344" align="center">
                                            <table class="es-content-body" width="600" cellspacing="0" cellpadding="0" bgcolor="#ffffff" align="center">
                                                <tbody>
                                                    <tr>
                                                        <td class="esd-structure" align="left">
                                                            <table width="100%" cellspacing="0" cellpadding="0">
                                                                <tbody>
                                                                    <tr>
                                                                        <td class="esd-container-frame" width="600" valign="top" align="center">
                                                                            <table style="border-radius: 4px; border-collapse: separate; background-color: #111111;" width="100%" cellspacing="0" cellpadding="0" bgcolor="#111111">
                                                                                <tbody>
                                                                                    <tr>
                                                                                        <td align="center" class="esd-empty-container" style="display: none;"></td>
                                                                                    </tr>
                                                                                </tbody>
                                                                            </table>
                                                                        </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <table class="es-content" cellspacing="0" cellpadding="0" align="center">
                                <tbody>
                                    <tr>
                                        <td class="esd-stripe" align="center">
                                            <table class="es-content-body" style="background-color: transparent;" width="600" cellspacing="0" cellpadding="0" align="center">
                                                <tbody>
                                                    <tr>
                                                        <td class="esd-structure" align="left">
                                                            <table width="100%" cellspacing="0" cellpadding="0">
                                                                <tbody>
                                                                    <tr>
                                                                        <td class="esd-container-frame" width="600" valign="top" align="center">
                                                                            <table width="100%" cellspacing="0" cellpadding="0">
                                                                                <tbody>
                                                                                    <tr>
                                                                                        <td class="esd-block-spacer es-p10t es-p20b es-p20r es-p20l" align="center" style="font-size:0">
                                                                                            <table width="100%" height="100%" cellspacing="0" cellpadding="0" border="0">
                                                                                                <tbody>
                                                                                                    <tr>
                                                                                                        <td style="border-bottom: 1px solid #f4f4f4; background: rgba(0, 0, 0, 0) none repeat scroll 0% 0%; height: 1px; width: 100%; margin: 0px;"></td>
                                                                                                    </tr>
                                                                                                </tbody>
                                                                                            </table>
                                                                                        </td>
                                                                                    </tr>
                                                                                </tbody>
                                                                            </table>
                                                                        </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <table class="es-content" cellspacing="0" cellpadding="0" align="center">
                                <tbody>
                                    <tr>
                                        <td class="esd-stripe" esd-custom-block-id="6341" align="center">
                                            <table class="es-content-body" style="background-color: #c6c2ed;" width="600" cellspacing="0" cellpadding="0" bgcolor="#c6c2ed" align="center">
                                                <tbody>
                                                    <tr>
                                                        <td class="esd-structure" align="left">
                                                            <table width="100%" cellspacing="0" cellpadding="0">
                                                                <tbody>
                                                                    <tr>
                                                                        <td class="esd-container-frame" width="600" valign="top" align="center">
                                                                            <table style="border-radius: 4px; border-collapse: separate;" width="100%" cellspacing="0" cellpadding="0">
                                                                                <tbody>
                                                                                    <tr>
                                                                                        <td class="esd-block-text es-p30t es-p30r es-p30l" align="center" bgcolor="#9ebede">
                                                                                            <h3 style="color: #111111;">Não foste tu que pediste alterações de senha?</h3>
                                                                                        </td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td class="esd-block-text es-p30b es-p30r es-p30l" esdev-links-color="#7c72dc" align="center" bgcolor="#9ebede">Então podes ignorar este e-mail.</td>
                                                                                    </tr>
                                                                                </tbody>
                                                                            </table>
                                                                        </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <table cellpadding="0" cellspacing="0" class="es-footer" align="center">
                                <tbody>
                                    <tr>
                                        <td class="esd-stripe" esd-custom-block-id="6342" align="center">
                                            <table class="es-footer-body" width="600" cellspacing="0" cellpadding="0" align="center">
                                                <tbody>
                                                    <tr>
                                                        <td class="esd-structure es-p30t es-p30b es-p30r es-p30l" align="left">
                                                            <table width="100%" cellspacing="0" cellpadding="0">
                                                                <tbody>
                                                                    <tr>
                                                                        <td class="esd-container-frame" width="540" valign="top" align="center">
                                                                            <table width="100%" cellspacing="0" cellpadding="0">
                                                                                <tbody>
                                                                                    <tr>
                                                                                        <td align="center" class="esd-empty-container" style="display: none;"></td>
                                                                                    </tr>
                                                                                </tbody>
                                                                            </table>
                                                                        </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <table class="esd-footer-popover es-content" cellspacing="0" cellpadding="0" align="center">
                                <tbody>
                                    <tr>
                                        <td class="esd-stripe" align="center">
                                            <table class="es-content-body" style="background-color: transparent;" width="600" cellspacing="0" cellpadding="0" align="center">
                                                <tbody>
                                                    <tr>
                                                        <td class="esd-structure es-p30t es-p30b es-p20r es-p20l" align="left">
                                                            <table width="100%" cellspacing="0" cellpadding="0">
                                                                <tbody>
                                                                    <tr>
                                                                        <td class="esd-container-frame" width="560" valign="top" align="center">
                                                                            <table width="100%" cellspacing="0" cellpadding="0">
                                                                                <tbody>
                                                                                    <tr>
                                                                                        <td align="center" class="esd-block-image" style="font-size: 0px;"><a target="_blank"><img class="adapt-img" src="cid:logo" alt style="display: block;" width="560"></a></td>
                                                                                    </tr>
                                                                                </tbody>
                                                                            </table>
                                                                        </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </body>
    
    </html>';

    $mail->AltBody = 'Aceda ao seguinte link confirmar o seu endereço de email';
    $mail->send(); 

    header('Location: '.$arrConfig['url_site'].'/forgotpassword.php?aviso=1');
    exit();

?>