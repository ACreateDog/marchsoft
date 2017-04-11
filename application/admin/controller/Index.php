<?php
namespace app\admin\controller;

class Index
{
    public function index()
    {
//        $this->email();
        return view('index');

    }

    /**
     * 邮件
     * @param
     * @return mixed
     */

    public function email() {
        $toemail='feifeinetwork@163.com';
//        $arr=[,'1666808129@qq.com','2456776158@qq.com','1368510132@qq.com','feifeinetwork@163.com'];
        $arr = [
            ['email' => '3303453318@qq.com','name'=>'群发测试'],
            ['email' => '1666808129@qq.com','name'=>'群发测试'],
            ['email' => '2456776158@qq.com','name'=>'群发测试'],
            ['email' => '1368510132@qq.com','name'=>'群发测试'],
            ['email' => '1193731492@qq.com','name'=>'群发测试'],
        ];
        $name='收件人姓名';
        $subject='发送主题';
        $content='三月课堂更新啦！欢迎围观！你中奖500万！';
        $time1 = microtime();
        SendMail::sendMailArr($arr,$subject,$content);
        $time2 = microtime();
        SendMail::sendMailByQueue($arr,$subject,$content);
        $time3 = microtime();

        echo  'sendMailArr:  '.($time2-$time1).'<br/>';
        echo  'sendMailBuQueue:'.($time3-$time2).'<br/>';
//        foreach ($arr as $key => $email){
//           SendMail::send_mail($toemail,$name,$subject,$content);
//            SendMail::sendMail($toemail,$name,$subject,$content);
//        }

    }
}
