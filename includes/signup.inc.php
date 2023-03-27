<?php 
    include_once './dbh.inc.php';

    $email = $_POST['email'];
    $first = $_POST['first'];
    $last = $_POST['last'];
    $bdate = $_POST['bdate'];
    $phone = $_POST['phone'];
    $studylvl = $_POST['studylvl'];
    $gridRadios = $_POST['gridRadios'];
    $tdate = $_POST['tdate'];
    $user_id = [];
    $id = 0; 

    $sql = "INSERT INTO authentication (email, first_name, last_name, birth_date, phone, study_level, employment, test_date) 
        VALUES ('$email' , '$first', '$last', '$bdate', '$phone',
        '$studylvl', '$gridRadios', '$tdate');";
    if (mysqli_query($conn, $sql)) {
        $sql = "SELECT * FROM authentication WHERE email = '$email'";
        $user_id = mysqli_query($conn, $sql);
        while($row=mysqli_fetch_array($user_id)){
          $id = $row["user_id"];
       }
      } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
      }
   header("Location: ../index2.php?id=1&user_id=$id");
?>