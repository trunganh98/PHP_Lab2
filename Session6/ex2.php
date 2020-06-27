<?php
    $student1 = new Student();
    print_r($student1); echo "<br>";

    $student1->ID = 123;
    $student1->name = "Trung Anh";
    $student1->email = "tanh@gmail.com";
    print_r($student1); echo "<br>";
    $student2 = clone $student1;
    $student2->name = "Hai";
    $student2->ID = "456";
    $student2->email = "hai@gmail.com";

    print_r($student2); echo "<br>";

    $student1->student_user();

    class Student
    {
        public $ID, $name, $email;

        function student_user()
        {
            echo "Student User code goes here";
        }
    }
?>
