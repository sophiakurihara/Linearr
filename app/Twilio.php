<?php

namespace App;

use Twilio\Rest\Client;

class Twilio
{

  public function __construct() {
  	$id = env('TWILIO_ACCOUNT_SID');
  	$secret = env('TWILIO_AUTH_TOKEN');
  	$this->sendingNumber = env('TWILIO_NUMBER');
  	$this->twilioClient = new Client($id, $secret);
  }
    public function sendText($number, $content) {
        $this->twilioClient->messages->create(
            $number,
            array(
                "from" => $this->sendingNumber,
                "body" => $content
            )
        );
    }

}
