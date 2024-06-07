<?php

namespace LAB11;

class User
{

   public $message = "this is a message from:";

   public function introduce($name) {
    return$this->message . " " . $name;
   }
}

$user = new User();

echo $user->introduce("Zuzik"); //nie wiem czy o to chodzi