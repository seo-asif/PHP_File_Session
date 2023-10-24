<?php

$filename = "serialized_text.txt";

$students = array(
    array(
        'username' => 'admin',
        'email'    => 'admin@gmail.com',
        'password' => 'dfdslgjkj',
        'role'     => 'admin',
    ),
    array(
        'username' => 'user',
        'email'    => 'asif@gmail.com',
        'password' => 'dfdslgjkj',
        'role'     => 'user',
    ),
);

//write data

$data = serialize($students);
file_put_contents($filename, $data, FILE_APPEND);

//read data
$data_from_file = file_get_contents($filename);
$allStudents = unserialize($data_from_file);
print_r($allStudents);

//single append data
$newdata = array(
    'username' => 'rayhan',
    'email'    => 'rayhan@gmail.com',
    'password' => 'dsdsdfdslgjkj',
    'role'     => 'user',
);

//read file
$readdata = file_get_contents($filename);
$allStudentd = unserialize($readdata);
print_r($allStudentd);

//add data to file and read the file
$readdata = file_get_contents($filename);
$allStudentd = unserialize($readdata);
array_push($allStudentd, $newdata);
file_put_contents($filename, $allStudentd);
$read_file = file_get_contents($filename);
$alldata = unserialize($read_file);
print_r($alldata);

//delete data

$read_data = file_get_contents($filename);
$allStudents = unserialize($read_data);
unset($allStudents[2]);
$data = serialize($allStudents);
file_put_contents($filename, $data);
