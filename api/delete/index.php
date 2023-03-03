<?php
    include('../dbsConn.php');
  
        $data = $_POST;

        $id = $data['id'];
        $Questions = $data['Questions'];

    // to delete record

        $sql = "DELETE FROM quizes WHERE id='$id'";

        if ($conn->query($sql) === TRUE) {
        echo "record successfully delete <br>";

        echo json_encode($data);
        } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
        }

        $conn->close();
?>