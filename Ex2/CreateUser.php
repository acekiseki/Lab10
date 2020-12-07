<?php

$uName = $_POST['user'];

$sqlserver = "mysql.eecs.ku.edu";

$sqlKey = new sqlKey($sqlserver, "jianpeli", "vash4iew", "jianpeli");

if ($sqlKey -> connect_errno)
{
    exit();
}

$temp = "INSERT INTO User (userId) VALUES ('$uName')";

if ($record = $mysqli-> query($temp))
{
    echo "a new user as been successfully added into server!!";
}
else
{
    echo "failed to add!!";
}

$sqlKey -> close();

?>