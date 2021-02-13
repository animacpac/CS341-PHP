<?php
  
  error_reporting(E_ALL);
  ini_set('display_errors', 1);
  $dbUrl = getenv('DATABASE_URL');
  if (empty($dbUrl)) {
    $dbUrl = "postgres://jvvxiypbouhhfm:5016e23abda50747e45cee98742c28cff2268904d4d1755daf9bc7a192fe18d2@ec2-52-54-174-5.compute-1.amazonaws.com:5432/dbqctfepebepj3";
  }
  $dbopts = parse_url($dbUrl);

  $dbHost = $dbopts["host"];
  $dbPort = $dbopts["port"];
  $dbUser = $dbopts["user"];
  $dbPassword = $dbopts["pass"];
  $dbName = ltrim($dbopts["path"],'/');

   try {
     $db = new PDO("pgsql:host=$dbHost;port=$dbPort;dbname=$dbName", $dbUser, $dbPassword);
     $db->setAttribute(PDO::ATTR_STATEMENT_CLASS, array("EPDOStatement\EPDOStatement", array($db)));
   }
   catch (Exception $ex) {
     echo $ex->getMessage();
//     print "<p>error: $ex->getMessage() </p>\n\n";
     die();
   }
?>