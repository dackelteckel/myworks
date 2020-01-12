<?php
if($_SERVER['REQUEST_METHOD'] != 'POST'){
    //methodがPOSTでない場合変数をすべて空にする
    $name = '';
    $email = '';
    $subject = '';
    $message = '';
    $complete_msg = '';
}else{
    //取得した値を変数に代入
    $name = $_POST['name'];
    $email = $_POST['email'];
    // $subject = $_POST['subject'];
    $subject = 'from my site';
    $message = $_POST['message'];
    //完了メッセージの初期化
    $complete_msg = '';
    //送り先のアドレス
    $to = 'nrkktok@gmail.com';
    //送信者情報
    $headrs = "From: ".$email."\r\n";
 
    $message .= "\r\n\r\n".$name;
    //送信処理
    mb_send_mail($to,$subject,$message,$headrs);
    
    $complete_msg = '送信されました！';
    //完了メッセージを返す
    echo $complete_msg;
    // 初期化
    $name = '';
    $email = '';
    $subject = '';
    $message = '';
}
?>