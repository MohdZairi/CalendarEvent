<?php
require_once 'config.php';

$event_name = $_POST['event_name'];
$event_start_date = date("y-m-d", strtotime($_POST['event_start_date']));
$event_end_date = date("y-m-d", strtotime($_POST['event_end_date']));

$insertQuery = = "INSERT INTO `calendar_event_master`(`event_name`,`event_start_date`,`event_end_date`) values ('".$event_name."','".$event_start_date."','".$event_end_date."')";

if(mysqli_query($con , $insertQuery))
{
    $data = array(
                    'status' => true,
                    'msg' => 'Event Added Successfully!'

                 );
}
else
{
    $data = array(
        'status' => false,
        'msg' => 'Sorry, Event not added.'

     );
}

echo json_encode($data);
?>