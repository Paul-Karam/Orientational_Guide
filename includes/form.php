<?PHP 
    include_once './dbh.inc.php';

    $id = $_GET["id"];

    $sql = "SELECT * FROM questions WHERE page_num = '$id'";
    $result = mysqli_query($conn, $sql);
    $arr = [];
    while($row=mysqli_fetch_array($result)){
       array_push($arr, [
        "id" => $row["q_id"],
        "question" => $row["question"]
       ]);
    }
    print_r(json_encode($arr));