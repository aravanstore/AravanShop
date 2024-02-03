<?php

$Имя = $_POST[Имя];
$tel = $_POST[tel];
$email = $_POST[email];

$Имя = htmlspecialchars($Имя);
$tel = htmlspecialchars($tel);
$email = htmlspecialchars($email);



$Имя = urldecode($Имя);
$tel = urldecode($tel);
$email = urldecode($email);



$Имя = trim($Имя);
$tel = trim($tel);
$email = trim($email);

if(mail("1dreammer@mail.ru",
         "Новое Письмо С Сайта",
         "Имя: ".$Имя. "\n".
         "tel: ".$tel. "\n".
         "email: ".$email,
         "from: no-reply@mydomain.ru \r\n" )

    )
    {
    echo("Письмо успешно отправлено!");
    };

    else {
      // code...
      echo ('Есть Ошибки! Проверьте Данные...');
    }

 ?>
