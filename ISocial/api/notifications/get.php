<?php
include('../include/connection.php');
$data = json_decode(file_get_contents("php://input"), true);

$id = $data['id'];
$sql = "Select * from notification where id='$id' ";

$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {

    while ($row = mysqli_fetch_assoc($result)) {

        $noti_type = $row['noti_type'];


        if ($noti_type == 'friends to friends') {
            $sql1 = "
            SELECT *
            FROM notification
            INNER JOIN friends_notifications
            ON notification.id = friends_notifications.noti_type_id where noti_type_id='$id'";

            $result1 = mysqli_query($conn, $sql1);
            while ($row1 = mysqli_fetch_assoc($result1)) {
                $responsequery[] = array(
                    'to_id' => $row1['to_id'],
                    'from_id' => $row1['from_id'],
                    'staus' => $row1['status'],
                    'date' => $row1['date'],
                );
            }
        } elseif ($noti_type == 'user to group') {

            $sql2 = "
            SELECT *
FROM notification
INNER JOIN group_notification
ON notification.id = group_notification.noti_type_id where noti_type_id='$id'";

            $result2 = mysqli_query($conn, $sql2);
            while ($row2 = mysqli_fetch_assoc($result2)) {
                $responsequery[] = array(
                    'group_id' => $row2['group_id'],
                    'status' => $row2['status'],
                    'to_id' => $row2['to_id'],
                    'from_id' => $row2['from_id'],
                    'created_date' => $row2['created_date'],
                    'noti_type_id' => $row2['noti_type_id'],
                );
            }
        } elseif ($noti_type == 'user to indiviual challenge') {
            $noti_type;
            $sql3 = "Select * from individual_challenge_notification where noti_type_id='$id'";

            $result3 = mysqli_query($conn, $sql3);
            while ($row3 = mysqli_fetch_assoc($result3)) {
                $responsequery[] = array(

                    'status' => $row3['status'],
                    'challenge_id' => $row3['challenge_id'],
                    'noti_type_id' => $row3['noti_type_id'],
                );
            }
        } elseif ($noti_type == 'Admin to User For group') {
            $noti_type;

            echo         $sql4 = "SELECT *
FROM notification
INNER JOIN group_notification
ON notification.id = group_notification.noti_type_id where noti_type_id='$id'";
            die();


            $result4 = mysqli_query($conn, $sql4);
            while ($row4 = mysqli_fetch_assoc($result4)) {
                $responsequery[] = array(
                    'group_id' => $row4['group_id'],
                    'status' => $row4['status'],
                    'to_id' => $row2['to_id'],
                    'from_id' => $row2['from_id'],
                    'created_date' => $row4['created_date'],
                    'noti_type_id' => $row4['noti_type_id'],
                );
            }
        } else {

            $sql5 = "Select * from group_challenge_notification where noti_type_id='$id'";

            $result5 = mysqli_query($conn, $sql5);
            while ($row5 = mysqli_fetch_assoc($result5)) {
                $responsequery[] = array(

                    'status' => $row5['status'],
                    'challenge_id' => $row5['challenge_id'],
                    'noti_type_id' => $row5['noti_type_id'],
                );
            }
        }
    }
    echo json_encode($responsequery);
} else {
    echo json_encode(array('error' => true, 'Message' => 'No notification found'));
}
