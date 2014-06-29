<?php

class NotificationManager extends CActiveRecordBehavior // CModelBehavior
{
    public function events()
    {
        return array_merge(parent::events(), array(
           'onAfterApprove' => 'afterApprove'
        ));
 
    }

    public function mailsend($to,$from,$subject,$message){
        $mail=Yii::app()->Smtpmail;
        $mail->SetFrom($from, 'From NAme');
        $mail->Subject    = $subject;
        $mail->MsgHTML($message);
        $mail->AddAddress($to, "");
        if(!$mail->Send()) {
            echo "Mailer Error: " . $mail->ErrorInfo;
        }else {
            echo "Message sent!";
        }
    }

    public function afterApprove(CEvent $e)
    {
        //echo CVarDumper::dumpAsString();
        $this->mailsend($e->params['author_email'],'sandinosaso@gmail.com',
        	'An admin approved your comment',"Comment:{$e->sender->content}");
    }

}