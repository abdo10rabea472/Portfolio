<?php

$recipient = "abdo10rabea472@gmail.com"; // البريد الإلكتروني الذي سيستلم الرسالة
$sitename = "Arter"; // اسم الموقع

// استلام البيانات من النموذج
$name = trim($_POST["name"]);
$email = trim($_POST["email"]);
$text = trim($_POST["text"]);
$message = "Name: $name \nEmail: $email \nMessage: $text";

$pagetitle = "New message from \"$sitename\"";

// إرسال البريد الإلكتروني
if (mail($recipient, $pagetitle, $message, "Content-type: text/plain; charset=\"utf-8\"\n From: $recipient")) {
    echo "Message sent successfully.";
} else {
    echo "Failed to send message.";
}
?>
