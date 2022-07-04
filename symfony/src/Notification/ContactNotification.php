<?php

namespace App\Notification;

use App\Entity\Contact;
use Symfony\Component\Mailer\Mailer;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;
use Symfony\Component\Mime\Message;
use Twig\Environment;
use Symfony\Component\Mime\Part\AbstractPart;
use Symfony\Bridge\Twig\Mime\TemplatedEmail;

class ContactNotification {

/**
 * @var \Mailer
 */
private $mailer;


/**
 * @var Environement
 */
private $renderer;

    public function __construct(MailerInterface $mailer, Environment $renderer)
    {
        $this->mailer = $mailer;
        $this->renderer = $renderer; 
    }

    public function notify(Contact $contact){
        

        $notif = (new TemplatedEmail())
            ->from($contact->getMail())
            ->to ('contact@web-artisanat.com')
            ->replyTo($contact->getMail())
            ->htmlTemplate('mail/notif.html.twig')
            ->context(['contact'=>$contact]) ;
        

        $this->mailer->send($notif);   
        


    }
}