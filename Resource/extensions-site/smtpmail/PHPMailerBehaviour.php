<?php

class PHPMailerBehaviour extends CBehavior{
 
    public function events(){
        return array(
            'onAfterSave'=>'sendmail', 
        );
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
    

    public function sendmail($event){
        if (Yii::app()->user->id != $event->sender->author_id){
            $user = User::model()->findByPk($event->sender->author_id);
            if ($user != null)
                $this->mailsend('sandinosaso@gmail.com',$user->email,"A change was made to your post {$event->sender->title}",
                    "Title: {$event->sender->title}<br>Content: {$event->sender->content}<br>Tags: {$event->sender->tags}");
        }
    }
 
}