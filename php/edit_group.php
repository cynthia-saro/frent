<?php
include("db.php");
session_start();
$myId = $_SESSION['member']['id'];

if (isset($_POST)) {

  //We create variables
  $group = $_POST['group'];
  $group_name = $_POST['group_name'];
  $group_description = $_POST['group_description'];

  //first_name 
  if (empty($group)) {
    $_SESSION['errors']['group '] = "Ce champ est obligatoire";
  }
  //last_name 
  if (empty($group_name)) {
    $_SESSION['errors']['group_name'] = "Ce champ est obligatoire";
  }
  //phone_number verif
  if (empty($group_description)) {
    $_SESSION['errors']['group_description'] = "Ce champ est obligatoire";
  }

  // If there are no errors :
  if (empty($_SESSION['errors'])) {

    $sql = "UPDATE groups_information 
              SET identification_key = :group, name = :group_name, group_description = :group_description
              WHERE adminId = :myId";

    $stmt = $conn->prepare($sql);
    $stmt->bindValue(":group", $group);
    $stmt->bindValue(":group_name", $group_name);
    $stmt->bindValue(":group_description", $group_description);
    $stmt->bindValue(":myId", $myId);
    $stmt->execute();

    header('Location: ../my_group.php');
  } else {
    header('Location: ../edit_group.php');
    unset($_SESSION['errors']);
  }
}
