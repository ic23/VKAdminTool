<?php
$chat_id        = ""; // id БЕСЕДЫ
$access_token   = ""; // Токен страницы Бота (создетеля беседы). Получить его http://vk.cc/4KeIFn (Нужно скопировать часть из адресной строки между "&access_token=" и "&expires_in")
$client_id      = ""; // Создайте приложение здеся - https://vk.com/dev/ и возьмите id приложения в настройках
$client_secret  = ""; // Секретный Ключ в настройках тоже
$redirect_uri   = "/index.php"; // Полный адрес нахождения Index страницы скрипта
$moder_id       = array("112851185", "1", "123123123"); // Впишите сюда id Модеров беседы
$reason_message = true; // Включение и выключение причины исключения
$bot_prefix     = "(HAKAZAHNE EbLAHOB)"; // Префикс скрипта для причины
$chat_name      = "Что-то!"; // Имя беседы (вводить самому)
$design         = true; //Дизайн Вкл - true Выкл - false     Фон меняется в css/image

//Всё что дальше, не трогать!!!!!!
$back = '<h2><form action="index.php"><button type="submit" class="butt">Вернуться обратно</button></form></h2>';
if($design == true){
echo "<link rel='stylesheet' href='css/style.css'>";
}
?>
