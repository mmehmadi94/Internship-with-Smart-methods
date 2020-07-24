<?php
include 'includes/db.php';

if (isset($_POST['action']))
{

    switch ($_POST['action'])
    {
        case 'right':
            $sql = "INSERT INTO remote_control (direction) VALUES ('R'); ";
            mysqli_query($conn, $sql);
        break;
        case 'left':
            $sql = "INSERT INTO remote_control (direction) VALUES ('L'); ";
            mysqli_query($conn, $sql);
        break;

        case 'forward':
            $sql = "INSERT INTO remote_control (direction) VALUES ('F'); ";
            mysqli_query($conn, $sql);
        break;

        case 'backward':
            $sql = "INSERT INTO remote_control (direction) VALUES ('B'); ";
            mysqli_query($conn, $sql);
        break;

        case 'pause':
            $sql = "INSERT INTO remote_control (direction) VALUES ('P'); ";
            mysqli_query($conn, $sql);
        break;
    }
}

?>
