<?php
use \google\appengine\api\mail\Message;

$name = htmlspecialchars($_POST["name"]);
$email = htmlspecialchars($_POST["email"]);
$message = htmlspecialchars($_POST["message"]);

$subject = "Feedback received from: " . $name;
$emailBody = "From: " . $name . "\nEmail: " . $email . "\n\nMessage:\n" . $message;

try
{
  $message = new Message();
  $message->setSender("feedback@ayurvedarogyaniketan.appspotmail.com");
  $message->addTo("suphya4u@gmail.com");
  $message->setSubject($subject);
  $message->setTextBody($emailBody);
  $message->send();
} catch (InvalidArgumentException $e) {
  echo $e;
}

echo "complete";
?>