<?php 

require_once('phpmailer/PHPMailerAutoload.php');
$mail = new PHPMailer;
$mail->CharSet = 'utf-8';

$userName = $_POST['userName'];
$userPhone = $_POST['userPhone'];

//$mail->SMTPDebug = 3;                               // Enable verbose debug output

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.mail.ru';  																							// Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'mezamol_rf@mail.ru'; // Ваш логин от почты с которой будут отправляться письма
$mail->Password = 'SqJBU7eqLbrsYeKy4Xvy'; // Ваш пароль от почты с которой будут отправляться письма
$mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 465; // TCP port to connect to / этот порт может отличаться у других провайдеров

$mail->setFrom('mezamol_rf@mail.ru'); // от кого будет уходить письмо?
$mail->addAddress('Lovemacbeth@mail.ru');     // Кому будет уходить письмо 
//$mail->addAddress('ellen@example.com');               // Name is optional
//$mail->addReplyTo('info@example.com', 'Information');
//$mail->addCC('cc@example.com');
//$mail->addBCC('bcc@example.com');
//$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
//$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = 'Заявка для Вероники Леоновой';
$mail->Body    = 
'

<html>
<body>
<center>	
<table border=1 cellpadding=6 cellspacing=0 width=90% bordercolor="#DBDBDB">
 <tr><td colspan=2 align=center bgcolor="#E4E4E4"><b>Информация о пользователе</b></td></tr>
 <tr>
  <td><b>Имя пользователя</b></td>
  <td>'.$userName.'</td>
 </tr>
 <tr>
  <td><b>Телефон пользователя</b></td>
  <td>'.$userPhone.'</td>
 </tr>
</table>
</center>	
</body>
</html>'; 

;
$mail->AltBody = '';

if(!$mail->send()) {
    echo 'Error';
} else {
    
}
?>