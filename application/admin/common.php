<?php


/**
 * 判断管理员是否登陆
 */

function is_login(){

}

function send_mail($tomail, $name, $subject = '', $body = '', $attachment = null) {
    echo '<pre/>';
    $mail = new \PHPMailer();           //实例化PHPMailer对象
    $mail->CharSet = 'UTF-8';           //设定邮件编码，默认ISO-8859-1，如果发中文此项必须设置，否则乱码
    $mail->IsSMTP();                    // 设定使用SMTP服务
    $mail->SMTPDebug = 1;               // SMTP调试功能 0=关闭 1 = 错误和消息 2 = 消息
    $mail->SMTPAuth = true;             // 启用 SMTP 验证功能
    $mail->SMTPSecure = 'ssl';          // 使用安全协议
//    $mail->Host = "smtp.163.com";       // SMTP 服务器
    $mail->Host="smtp.qq.com";
    $mail->Port = 465;                  // SMTP服务器的端口号
//    $mail->Username = "feifeinetwork@163.com";    // SMTP服务器用户名
//    $mail->Password = "feifei123456789";     // SMTP服务器密码 这个不是邮箱密码
    $mail->Username = "2494662681@qq.com";
    $mail->Password = "rexgqxewpytteaea";
//    $mail->SetFrom('feifeinetwork@163.com', '三月软件');
//    $replyEmail = 'feifeinetwork@163.com';                   //留空则为发件人EMAIL
    $mail->SetFrom('2494662681@qq.com','三月软件');
    $replyEmail='2494662681@qq.com';
    $replyName = '三月软件';                    //回复名称（留空则为发件人名称）
    $mail->AddReplyTo($replyEmail, $replyName);
    $mail->Subject = $subject;
    $mail->MsgHTML($body);
    $mail->AddAddress($tomail, $name);
    if (is_array($attachment)) { // 添加附件
        foreach ($attachment as $file) {
            is_file($file) && $mail->AddAttachment($file);
        }
    }

    return $mail->Send() ? true : $mail->ErrorInfo;

//    return $mail->Send() ? true : false;
}