<?php
/**
 * Created by PhpStorm.
 * User: feifei
 * Date: 2017/4/11
 * Time: 上午8:46
 */

namespace app\admin\controller;


use think\Config;

class SendMail
{

    /**
     * 单发邮件
     *
     * @param $toemail 目的邮箱
     * @param $toname  接收人的名字
     * @param string $title 发送的主题，即邮件标题
     * @param string $content  邮件内容
     * @return bool  发送成功,返回true;发送失败,返回false
     */
    static public function sendMail($toemail,$toname,$title='',$content=''){
        if (self::isEmail($toemail)){
            if (self::send_mail($toemail,$toname,$title,$content))
                return true;
        }
        return false;
    }

    /**
     * 通过数组，群发邮件 效率偏低(不建议使用)
     *
     * @param array $mailAndNameArr 目的邮箱和接收人姓名组成的二维数组 例如  array[
     *  ['email' => 'example1@example.com','name'=>'exampleName'],
     *  ['email' => 'example2@example.com','name'=>'exampleName']
     * ]
     * @param string $title  邮件的主题，也就是标题
     * @param string $content  邮件的内容
     * @return array|bool    发送成功 ,返回true ;发送失败,发送失败的 [邮箱和名字]组成的二维数组
     */
    static public function sendMailByQueue(array $mailAndNameArr,$title='',$content=''){
        if (!is_array($mailAndNameArr))
            return false;

        foreach ($mailAndNameArr as $key => $mailName){
            $tomail = $mailName['email'];
            $toname = $mailName['name'];
            $sendFailArr = [];
            if (!self::send_mail($tomail,$toname,$title,$content)){
                $sendFailArr[] = $mailAndNameArr[$key];
            }
        }
        if (empty($sendFailArr) || is_null($sendFailArr) || count($sendFailArr) == 0)
            return true;

        return $sendFailArr;

    }
    static private function isEmail($email){
        if (empty($email))
            return false;
        if (!filter_var($email,FILTER_VALIDATE_EMAIL))
            return false;
        return true;
    }
    /**
     * 系统邮件发送函数
     * @param string $tomail 接收邮件者邮箱
     * @param string $name 接收邮件者名称
     * @param string $subject 邮件主题
     * @param string $body 邮件内容
     * @param string $attachment 附件列表
     * @return boolean
     */

    static private function send_mail($tomail, $name, $subject = '', $body = '', $attachment = null) {

        $from_email = Config::get('from_email');
        $host_password = Config::get('email_password');
        $from_name = Config::get('from_name');
        $host  = Config::get('email_host');

        $mail = new \PHPMailer();           //实例化PHPMailer对象
        $mail->CharSet = 'UTF-8';           //设定邮件编码，默认ISO-8859-1，如果发中文此项必须设置，否则乱码
        $mail->IsSMTP();                    // 设定使用SMTP服务
        $mail->SMTPDebug = 0;               // SMTP调试功能 0=关闭 1 = 错误和消息 2 = 消息
        $mail->SMTPAuth = true;             // 启用 SMTP 验证功能
        $mail->SMTPSecure = 'ssl';          // 使用安全协议
        $mail->Host= $host;
        $mail->Port = 465;                  // SMTP服务器的端口号
        $mail->Username = $from_email;    // SMTP服务器用户名
        $mail->Password = $host_password;     // SMTP服务器密码 这个不是邮箱密码

        $mail->SetFrom($from_email,$from_name);
        $replyEmail=$from_email;
        $replyName = $from_name;                    //回复名称（留空则为发件人名称）
        $mail->AddReplyTo($replyEmail, $replyName);
        $mail->Subject = $subject;
        $mail->MsgHTML($body);
        $mail->AddAddress($tomail, $name);

        if (is_array($attachment)) { // 添加附件
            foreach ($attachment as $file) {
                is_file($file) && $mail->AddAttachment($file);
            }
        }

//        return $mail->Send() ? true : $mail->ErrorInfo;

        return $mail->Send() ? true : false;
    }
    /**
     * 通过数组，群发邮件
     *
     * @param array $mailAndNameArr 目的邮箱和接收人姓名组成的二维数组 例如  array[
     *  ['email' => 'example1@example.com','name'=>'exampleName'],
     *  ['email' => 'example2@example.com','name'=>'exampleName']
     * ]
     * @param string $title  邮件的主题，也就是标题
     * @param string $content  邮件的内容
     * @return array|bool    发送成功 ,返回true ;发送失败,返回false;
     */

    static public function sendMailArr(array $emailArr, $subject = '', $body = '', $attachment = null){

        $from_email = Config::get('from_email');
        $host_password = Config::get('email_password');
        $from_name = Config::get('from_name');
        $host  = Config::get('email_host');

        $mail = new \PHPMailer();           //实例化PHPMailer对象
        $mail->CharSet = 'UTF-8';           //设定邮件编码，默认ISO-8859-1，如果发中文此项必须设置，否则乱码
        $mail->IsSMTP();                    // 设定使用SMTP服务
        $mail->SMTPDebug = 0;               // SMTP调试功能 0=关闭 1 = 错误和消息 2 = 消息
        $mail->SMTPAuth = true;             // 启用 SMTP 验证功能
        $mail->SMTPSecure = 'ssl';          // 使用安全协议
        $mail->Host= $host;
        $mail->Port = 465;                  // SMTP服务器的端口号
        $mail->Username = $from_email;    // SMTP服务器用户名
        $mail->Password = $host_password;     // SMTP服务器密码 这个不是邮箱密码

        $mail->SetFrom($from_email,$from_name);
        $replyEmail=$from_email;
        $replyName = $from_name;                    //回复名称（留空则为发件人名称）
        $mail->AddReplyTo($replyEmail, $replyName);
        $mail->Subject = $subject;
        $mail->MsgHTML($body);

        if (is_array($emailArr)){
            foreach ($emailArr as $key => $emailAndName){
                $tomail = $emailAndName['email'];
                $name   = $emailAndName['name'];
                $mail->AddAddress($tomail, $name);
            }

        }else{
            return false;
        }

        if (is_array($attachment)) { // 添加附件
            foreach ($attachment as $file) {

                is_file($file) && $mail->AddAttachment($file);
            }
        }

//        return $mail->Send() ? true : $mail->ErrorInfo;

        return $mail->Send() ? true : false;
    }
}