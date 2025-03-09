<?php
include("connection.php");
session_start();
$sid=$_REQUEST['id'];
$ret="  delete FROM owner where oname='$sid'";
echo $ret;
					mysqli_query($conn,$ret);
                    header("location:view_customer.php");
				?>