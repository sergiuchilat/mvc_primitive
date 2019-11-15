<?php


class Student
{
    public function getList(){
       return [
            [
                'name' => 'Ion Creanga',
                'age' => 123
            ],
            [
                'name' => 'Mihai Eminescu',
                'age' => 124
            ]
        ];
    }

    public function create($data){
        // inert data into DB
        //return true;
        //print_r($data);
        return false;
    }
}
