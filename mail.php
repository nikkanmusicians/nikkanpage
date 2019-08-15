<html>
 <head>
 <meta charset="utf-8" />
 </head>
 <body>
 <?php
 mb_language("Japanese");
 mb_internal_encoding("UTF-8");
 
//  $to = $_POST["chihooka@gmail.com"];
$to = "chihooka@gmail.com";
$headers = $_POST['mail'];
$title = $_POST['name'];
$content = $_POST['comment'];
 
 if(mb_send_mail($to, $title, $headers, $content)){
 echo "メールを送信しました";
 } else {
 echo "メールの送信に失敗しました";
 }
 ?>
 </body>
</html>