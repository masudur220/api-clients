<?php
    include('../dbsConn.php');
/*
// quizes

Questions
IsMandatory
AnsA
isTrueA
AnsB
isTrueB
AnsC
isTrueC

*/   

        $data = $_POST;

        $Questions = $data['Questions'];
        $IsMandatory = $data['IsMandatory'];
        $AnsA = $data['AnsA'];
        $isTrueA = $data['isTrueA'];
        $AnsB = $data['AnsB'];
        $isTrueB = $data['isTrueB'];
        $AnsC = $data['AnsC'];
        $isTrueC = $data['isTrueC'];
    
        // echo $Questions;
        $sql = "INSERT INTO quizes (Questions, IsMandatory, AnsA, isTrueA, AnsB, isTrueB, AnsC, isTrueC)
        VALUES ('$Questions', '$IsMandatory', '$AnsA', '$isTrueA', '$AnsB', '$isTrueB', '$AnsC', '$isTrueC')";

        if ($conn->query($sql) === TRUE) {
        echo "New record created successfully <br>";

        echo json_encode($data);
        } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
        }

        $conn->close();
?>