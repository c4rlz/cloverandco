<?php

namespace App;

use Sober\Controller\Controller;


class ContactForm extends Controller
{
  public function mail_success($success){
    echo $success ? "success" : "failed to connect";

  }
  public function prepare_email($contact) {
    $to = $contact->email;
    $subject = "Thanks for your interest in Clover&Co Candy Catering! ";
    $message = "Hello" . $contact->name . ", your inquiry was received. We will be in touch!";
    $message .= "We received the following details related to your event of interest: ";
    $message .= "Event Type: " . $contact->eventType;
    $message .= "Event Date: ".  $contact->eventDate;
    $message .= "Service of Interest: " . $contact->service;
    $header = "From:clovercandycatering@gmail.com \r\n";
    $header .= "Cc:carly.ewasiuk94@gmail.com \r\n";
    $header .= "MIME-Version: 1.0\r\n";
    $header .= "Content-Type: text/html\r\n";

    $confirmation = mail($to, $subject, $message, $header);

    $confirmation ? self::mail_success(true) : self::mail_success(false);
    // self::mail_success(false);
  }
  public function validate_form() {
    if(isset($_POST["contact-form"])) {
      $contact = new \stdClass();
      $contact->name = isset($_POST["contact-name"]) ? $_POST["contact-name"] : "Interested party planner";
      $contact->email = isset($_POST["contact-email"]) ? $_POST["contact-email"] : "No email was entered";
      $contact->tel = isset($_POST["contact-tel"]) ? $_POST["contact-tel"] : "No phone number was entered";
      $contact->eventDate = isset($_POST["event-date"]) ? $_POST["event-date"] : "Date of event is yet to be chosen" ;
      $contact->eventType = isset($_POST["event-type"]) && $_POST["event-type"] !== "Type Of Event" ? $_POST["event-type"] : "No event type selected" ;
      $contact->service = isset($_POST["service"]) && $_POST["service"] !== "Service Of Interest" ? $_POST["service"] : "No service selected";
      self::prepare_email($contact);
     
    }
  }



}
