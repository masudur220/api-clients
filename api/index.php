<?php
    include('./dbsConn.php');
    $sql = "SELECT * FROM quizes";
    $res = mysqli_query($conn, $sql);
    $count = mysqli_num_rows($res);
    header('Content-Type:application/json');

    // echo $count;
    if($count>0) {
        while($row=mysqli_fetch_assoc($res)) {
            $arr[]=$row;
        }
        echo json_encode(['status'=>true, 'data'=>$arr, 'result'=>'found']);
        // echo json_encode($arr);
    }else{
        echo json_encode(['status'=>true, 'data'=>'no data found', 'result'=>'not found']);
    }
    
    ?>
