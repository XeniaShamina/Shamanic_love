<?php
    $name = $_POST['name'];
	$phone = $_POST['phone'];


    $name = htmlspecialchars($name);
    $phone = htmlspecialchars($phone);

    $name = urldecode($name);
    $phone = urldecode($phone);

    $name = trim($name);
    $phone = trim($phone);


if (mail("shamanic_love@mail.ru",
"Новое письмо с сайта",
"Имя" ".$name."\n.
"Телефон" ".$phone."\n.
)){
    echo ('Ok');
}
else {
    echo ('No')
}
	

?>
