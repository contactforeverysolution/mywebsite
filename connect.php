<?php  
     
     $FullName = $_POST['FullName'];
     $WhatsappNo = $_POST['WhatsappNo'];
     $Email = $_POST['Email'];
     $country = $_POST['country'];
     $subject = $_POST['subject'];

     //dataase connection

     $connect = new mysqli('localhost','root','','contact_us_form');
     if($connect->connect_error)
     {
          die('connection faild: '.$connect->connect_error);
     }else{
          $stmt =$connect->prepare("insert into query(FullName,WhatsappNo,Email,country,subject) value(?,?,?,?,?)");
          $stmt->bind_param("sisss",$FullName,$WhatsappNo,$Email,$country,$subject);
          $stmt->execute();
          echo" Your Query is Submited Successfully";
          $stmt->close();
          $connect->close();
     }









?>