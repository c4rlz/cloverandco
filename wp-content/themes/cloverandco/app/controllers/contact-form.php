<?php

namespace App;

use Sober\Controller\Controller;


class ContactForm extends Controller
{
  public function mail_success($success){
    $message = $success ? "We will be in touch!" : "Sorry, we were unable to complete your request. Please try again or contact us @ info@cloverscandycatering.com";
    echo '<p>' . $message  .'</p>';

  }
  public function prepare_email($contact) {

    $to = $contact->email;
    $subject = "Thanks for your interest in Clover&Co Candy Catering! ";
    $message = "Hello " . $contact->name . ", your inquiry was received. We will be in touch! <br> <br>";
    $message .= " We received the following details related to your event of interest: <br> ";
    $message .= " Event Type: " . $contact->eventType ."\r\n <br>";
    $message .= " Event Date: ".  $contact->eventDate ."\r\n <br>";
    $message .= " Event Location: " . $contact->eventLocation ."\r\n <br>";
    $message .= " Number of Guests: " . $contact->guestEstimate ."\r\n <br>";
    $message .= "Service of Interest: " . $contact->service ."\r\n <br>";
    $headers = "From: clovercocandycompany@gmail.com" . "\r\n";
    $headers .= "Cc: clovercocandycompany@gmail.com, ashleyodonnell@live.ca" . "\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html\r\n";
    $confirmation = wp_mail($to, $subject, $message, $headers);
    

    $confirmation ? self::mail_success(true) : self::mail_success(false);

  }
  public function validate_form() {
    if(isset($_POST["contact-form"])) {
      $contact = new \stdClass();
      $contact->name = isset($_POST["contact-name"]) ? $_POST["contact-name"] : "Interested party planner";
      $contact->email = isset($_POST["contact-email"]) ? $_POST["contact-email"] : "No email was entered";
      $contact->tel = isset($_POST["contact-tel"]) ? $_POST["contact-tel"] : "No phone number was entered";
      $contact->guestEstimate = isset($_POST["guest-estimate"]) ? $_POST['guest-estimate'] : "No guest estimate";
      $contact->eventLocation = isset($_POST["event-location"]) ? $_POST["event-location"] : "No event added";
      $contact->eventDate = isset($_POST["event-date"]) ? $_POST["event-date"] : "Date of event is yet to be chosen" ;
      $contact->eventType = isset($_POST["event-type"]) && $_POST["event-type"] !== "Type Of Event" ? $_POST["event-type"] : "No event type selected" ;
      $contact->service = isset($_POST["service"]) && $_POST["service"] !== "Service Of Interest" ? $_POST["service"] : "No service selected";
      self::prepare_email($contact);
     
    }
  }



}
