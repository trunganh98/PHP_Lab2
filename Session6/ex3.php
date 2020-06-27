<?php
    $sinhvien = new User1("Trung Anh", "Hai");


    class User1
    {
        function __construct($sv1, $sv2)
        {

            echo $sv1 . ", " . $sv2;
        }
    }
?>
