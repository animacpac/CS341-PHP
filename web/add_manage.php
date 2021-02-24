<?php
$book = filter_var($_POST['fname'], FILTER_SANITIZE_STRING);
$chapter = filter_var($_POST['lname'], FILTER_SANITIZE_NUMBER_INT);
$verse = filter_var($_POST['street_name'], FILTER_SANITIZE_NUMBER_INT);
$content = filter_var($_POST['city_name'], FILTER_SANITIZE_STRING);
 
$stmt = $db->prepare("INSERT INTO users  VALUES (nextval('scriptures_sequence'), :fname,  :lname, :street_name, :city_name);");
$stmt->bindValue(':fname', $fname, PDO::PARAM_STR);
$stmt->bindValue(':lname', $lname, PDO::PARAM_INT);
$stmt->bindValue(':street_name', $street_name, PDO::PARAM_INT);
$stmt->bindValue(':city_name', $city_name, PDO::PARAM_STR);
$stmt->execute();

if(isset($_POST['new_topic']) && isset($_POST['new_topic_name'])){
    $topic_name = filter_var($_POST['new_topic_name'], FILTER_SANITIZE_STRING);
    $stmt = $db->prepare("INSERT INTO topic  VALUES (nextval('topic_sequence'), :topic_name ) ;");
    $stmt->bindValue(':topic_name', $topic_name, PDO::PARAM_STR);
    $stmt->execute();
    $stmt = $db->prepare("INSERT INTO scripture_by_topic  VALUES (nextval('scripture_by_topic_sequence'), currval('topic_sequence'),  currval('scriptures_sequence'));");
    $stmt->execute();
}



foreach ($_POST['topic'] as $topic_id )
{
    $stmt = $db->prepare("INSERT INTO scripture_by_topic  VALUES (nextval('scripture_by_topic_sequence'), :topic_id,  currval('scriptures_sequence'));");
    $stmt->bindValue(':topic_id', $topic_id, PDO::PARAM_INT);
    $stmt->execute();
}
?>