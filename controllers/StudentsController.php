<?php

class StudentsController
{
    public function getList(){
        $studentModel = new Student();
        $list =  $studentModel->getList();
        include 'views/students/list.php';
    }

    public function create($data){
        if(!empty($_POST['name'])){
            $studentModel = new Student();
            if($studentModel->create($data)){
                include 'views/students/create_success.php';
            } else {
                include 'views/students/create_error.php';
            }
        } else {
            include 'views/students/create.php';
        }
    }
}
