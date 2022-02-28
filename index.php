<?php
    include 'db_connection.php';

    $conn = OpenCon();
    

    $sql = "SELECT * FROM users";
    /*where name = '".$_POST["nickname"]."' and password = '".$_POST["password"]."'";*/
    

    if($result = $conn->query($sql))
    {
        //printf("La selección devolvió %d filas. \n", $resultado->num_rows);
        /* Liberar el conjunto de resultados */
        for ($set = array(); $row = $result ->fetch_assoc(); $set[] = $row);
        CloseCon($conn);
        //echo json_encode(array ('result' => $result->num_rows));
        echo json_encode($set);
    }
Hola Maira ME CAES                 BIEN :D
?>