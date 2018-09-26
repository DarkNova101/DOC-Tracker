<?php
  require 'vendor/autoload.php';
  $m= new MongoDB\Client("mongodb://127.0.0.1/");

  echo "Connection to database successfully";
$dbname = $m->personal;
$collection = $dbname->collection;

$id = '5ba9a54140562343d8007bf2';
$results = $collection->find(array('firstname' => new MongoDB\BSON\ObjectId($id)));
print_r($results);

   $document = array(
    "userid" => "ENTER USR ID VARIABLE",
      "general" => "GENERAL",
      "firstName" => "Nolan",
      "lastName" => "Hall",
      "nickname" => "",
      "dob" => "1/1/1111",
      "gender" => "Male",
      "grade" => "Junior",
      "school" => "SPX",

    "contactinfo" => "CONTACTINFO",
      "homephone" => "(111)111-1111",
      "cellphone" => "(111)111-1111",
      "emailaddress" => "nehall.neh@gmail.com",
      "streetaddress" =>  "3665 Roads End Acres Rd",
      "aptnumber" => "",
      "city" => "Imperial",
      "state" => "MO",
      "zipcode" => "63052",

    "contacts" => "CONTACTS",
      "mother" => "MOTHER",
      "name" => "Karin Hall",
        "mcellnum" => "(111)111-1111",
        "memailaddreess" => "(111)111-1111",

      "father" => "FATHER",
        "name" => "Eric Hall",
        "fcellnum" => "(111)111-1111",
        "femailaddreess" => "(111)111-1111",

      "emergency1" => "EMERGENCY-1",
        "name" => "Judy Ackermann",
        "e1cellnum" => "(111)111-1111",

      "emergency2" => "EMERGENCY-2",
        "name" => "Gail Bowler",
        "e2cellnum" => "(111)111-1111",

    "medicalinfo" => "MEDICALINFO",
      "medicalconditions" => "N/A",
      "alergies" => "N/A",
      "medications" => "N/A",
      "insurancecompany" => "Anthem",
      "policynumber" => "q232re343",
      "doctor" => "temp",
      "docphonenumber" => "(111)111-1111"
    );
