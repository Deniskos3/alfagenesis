<?php

// Файлы phpmailer
require 'phpmailer/PHPMailer.php';
require 'phpmailer/SMTP.php';
require 'phpmailer/Exception.php';

// Переменные, которые отправляет пользователь
$name = $_POST['name'];
$phone = $_POST['phone'];
$callback_comment = $_POST['callback_comment'];
$strsite=$_POST['strsite'];
$butstrsite=$_POST['butstrsite'];

$token = "1187877709:AAG8vYlhLbflTNUffI3yJJ1kPHVqrRC6djs";
$chat_id = "-395843976";
$msg1 = "ok1";
$arr = array(
  'Имя пользователя: ' =>$name,
  'Телефон: ' =>$phone,
  'Комментарий:' =>$callback_comment,
  'Клик был сделан со страницы:' =>$strsite,
  'При нажатие на кнопку :' =>$butstrsite
);
foreach($arr as $key => $value) {
  $txt .= "<b>".$key."</b> ".$value."%0A";
};

$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");
if ($sendToTelegram) {
    echo "$msg1";
  } else {
    echo "Error";
}


$mail = new PHPMailer\PHPMailer\PHPMailer();
try {
    $msg = "ok";
    $mail->isSMTP();   
    $mail->CharSet = "UTF-8";                                          
    $mail->SMTPAuth   = true;

    // Настройки вашей почты
    $mail->Host       = 'smtp.mail.ru'; // SMTP сервера GMAIL
    $mail->Username   = 'alfo.vork@mail.ru'; // Логин на почте
    $mail->Password   = 'hfphf,jnrf1'; // Пароль на почте
    $mail->SMTPSecure = 'ssl';
    $mail->Port       = 465;
    $mail->setFrom('alfo.vork@mail.ru', 'admin'); // Адрес самой почты и имя отправителя

    // Получатель письма
    $mail->addAddress('deniskos200029@gmail.com');  
    // Прикрипление файлов к письму
if (!empty($_FILES['myfile']['name'][0])) {
    for ($ct = 0; $ct < count($_FILES['myfile']['tmp_name']); $ct++) {
        $uploadfile = tempnam(sys_get_temp_dir(), sha1($_FILES['myfile']['name'][$ct]));
        $filename = $_FILES['myfile']['name'][$ct];
        if (move_uploaded_file($_FILES['myfile']['tmp_name'][$ct], $uploadfile)) {
            $mail->addAttachment($uploadfile, $filename);
        } else {
            $msg .= 'Неудалось прикрепить файл ' . $uploadfile;
        }
    }   
}


        // -----------------------
        // Само письмо
        // -----------------------
        $mail->isHTML(true);
    
        $mail->Subject = 'Заявка для обсуждения проектиа';
        $mail->Body    = "<b>Имя:</b> $name <br>
        <b>Номер:</b> $phone<br>
        <b>Сообщение:</b>$callback_comment<br>
        Заявка была отправлена со страницы (<b>$strsite</b>) c кнопки (<b>$butstrsite</b>)" ;


// Проверяем отравленность сообщения
if ($mail->send()) {
    echo "$msg";
} else {
echo "Сообщение не было отправлено. Неверно указаны настройки вашего тф";
}

} catch (Exception $e) {
    echo "Сообщение не было отправлено. Причина ошибки: {$mail->ErrorInfo}";
}

?>