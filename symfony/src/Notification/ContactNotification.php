<?php

namespace App\Notification;

use App\Entity\Contact;
use Symfony\Component\Mailer\Mailer;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;
use Symfony\Component\Mime\Message;
use Twig\Environment;
use Symfony\Component\Mime\Part\AbstractPart;

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

        $notif = (new Email())
            ->from($contact->getMail())
            ->to ('jamalelk60@gmail.com')
            ->replyTo($contact->getMail())
            ->setBody($this->renderer->render('mail/notif.html.twig',[
                'contact' => $contact,

            ]));

        $this->mailer->send($notif);   


    }
}