<?php
$filename = "text.txt";

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

/*
$fp=fopen($filename,'w');
foreach($students as $student){
$data = sprintf("%s,%s,%s,%s\n",$student['username'],$student['email'],$student['password'],$student['role']);
fwrite($fp,$data);
}
 */

/*
$fp = fopen($filename,"r");

while($data = fgets($fp)){
$data = explode(",",$data);
printf("username: %s\nemail: %s\nroll: %s\n", $data[0],$data[1],$data[3]);

}

 */

/*
$fp=fopen($filename,'w');

foreach($students as $student){
fputcsv($fp,$student);
}
fclose($fp);
 */

/*
$fp = fopen($filename,"r");
while($data = fgetcsv($fp)){
printf("username: %s\nemail: %s\nroll: %s\n\n", $data[0],$data[1],$data[3]);

}

 */

/*
$student1 = array(
'username'       => 'rayhan',
'email'          => 'rayhan@gmail.com',
'password'       => 'dfdslgjkj',
'role'           => 'manager'
);

$fp=fopen($filename,"a");
fputcsv($fp,$student1);
 */

$data = file($filename);
unset($data[2]);
$fp = fopen($filename, "w");
foreach ($data as $line) {
    if (trim($line) !== "") {fwrite($fp, $line);}
}
