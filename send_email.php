<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user_text = htmlspecialchars($_POST['user_text']); // Защита от XSS

    $to = "bk8klnzs71@wywnxa.com"; // Замените на вашу почту
    $subject = "Сообщение от пользователя";
    $message = "Пользователь ввел следующий текст:nn" . $user_text;
    $headers = "From: no-reply@example.com"; // Замените на ваш адрес

    if (mail($to, $subject, $message, $headers)) {
        echo "Сообщение успешно отправлено!";
    } else {
        echo "Ошибка при отправке сообщения.";
    }
} else {
    echo "Неверный метод запроса.";
}
?>