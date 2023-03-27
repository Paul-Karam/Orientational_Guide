<?php 

include_once './dbh.inc.php';

$id = $_GET['user_id'];
  $VERBS = ["Visionary", "Innovator","Communicator", "Federator", "Organiser", "Producer", "Administrator", "Analyst"];
  $answers = [];
$sql = "select sum(ans_id) results ,q.verbs verb from questions q,results r where q.q_id = r.q_id and r.user_id = $id group by q.verbs order by q.verbs;";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
  while($row = mysqli_fetch_array($result)){
   array_push($answers ,[
     "Verb" => $row['verb'],
     "Answer" => $row["results"]
   ]);
 };
}
print_r(json_encode($answers));