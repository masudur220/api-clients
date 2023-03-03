<?php
    include('../dbsConn.php');
/*
// quizes

id
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

        $id = $data['id'];
        $Questions = $data['Questions'];
        $IsMandatory = $data['IsMandatory'];
        $AnsA = $data['AnsA'];
        $isTrueA = $data['isTrueA'];
        $AnsB = $data['AnsB'];
        $isTrueB = $data['isTrueB'];
        $AnsC = $data['AnsC'];
        $isTrueC = $data['isTrueC'];
    
        // echo $Questions;

        $sql = "UPDATE quizes
        SET Questions = '$Questions', IsMandatory = '$IsMandatory', AnsA ='$AnsA', isTrueA = '$isTrueA', AnsA ='$AnsA', isTrueA = '$isTrueA', AnsA ='$AnsA', isTrueA = '$isTrueA'
        WHERE id = '$id'";


        if ($conn->query($sql) === TRUE) {
        echo "Record update successfully <br>";

        echo json_encode($data);
        } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
        }

        $conn->close();

?>