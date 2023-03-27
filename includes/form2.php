<?php

include_once './dbh.inc.php';

    $id = intval($_GET['id']);
    $user_id = intval($_GET['user_id']);
    $n1 = intval($_POST['Q0']);
    $q1 = intval($_POST['a0']);
    $n2 = $_POST['Q1'];
    $q2 = $_POST['a1'];
    $n3 = $_POST['Q2'];
    $q3 = $_POST['a2'];
    $n4 = $_POST['Q3'];
    $q4 = $_POST['a3'];
     
    $sql = "INSERT INTO results (user_id, q_id, ans_id) VALUES ($user_id, $q1, $n1)";

    //mysqli_query($conn, $sql);
    if (mysqli_query($conn, $sql)) {
       echo "success";
       
      } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
      }

    $sql = "INSERT INTO results (user_id, q_id, ans_id) VALUES ('$user_id', '$q2', '$n2')";

    mysqli_query($conn, $sql);

    $sql = "INSERT INTO results (user_id, q_id, ans_id) VALUES ('$user_id', '$q3', '$n3')";

    mysqli_query($conn, $sql);

    $sql = "INSERT INTO results (user_id, q_id, ans_id) VALUES ('$user_id', '$q4', '$n4')";

    mysqli_query($conn, $sql);

      if($id == 16){
        header("Location: ../index3.html?user_id=$user_id");
      }
      else{
    ++$id;
    header("Location: ../index2.php?user_id=$user_id&id=$id");
      }