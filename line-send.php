<?php

$curl = curl_init();

$header = "line notify";
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $hostcar = $_POST['hostcar'];
    $car = $_POST['car'];
    $date = $_POST['date'];
    $detail = $_POST['detail'];

    $message = "message=".$header.
                "\n"."ชื่อ : ". $firstname .
                "\n"."นามสกุล : ". $lastname .
                "\n"."ยี่ห้อรถ : ". $hostcar .
                "\n"."รุ่นรถ : ". $car .
                "\n"."ปีที่จดทะเบียน : ". $date .
                "\n"."รายละเอียดการติดต่อกลับ : ". $detail;

curl_setopt_array($curl, array(
  CURLOPT_URL => 'https://notify-api.line.me/api/notify',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'POST',
  CURLOPT_POSTFIELDS => $message,
  CURLOPT_HTTPHEADER => array(
    'Authorization: Bearer N5zM4m2wVvr2sTpsaYl0LFJh6ryINdYOpKzAbpb5IK9',
    'Content-Type: application/x-www-form-urlencoded'
  ),
));

$response = curl_exec($curl);

curl_close($curl);
echo "<script>alert('ส่งข้อมูลสำเร็จ');</script>";
header("location: index.php");