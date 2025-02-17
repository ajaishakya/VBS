<?php
session_start();
include('dashboard/modules/connection.php');

if(isset($_POST['login_btn'])) {
	$email = $_POST['email'];
	$password = $_POST['password'];
	//$password = md5($password);
    $password = $password;

	$query = "SELECT * FROM users WHERE email='$email' AND password='$password' LIMIT 1";
	$query_run = mysqli_query($conn, $query);

	if(mysqli_num_rows($query_run) > 0) {
		foreach($query_run as $row) {
			$user_id = $row['id'];
			$user_firstname = $row['firstname'];
			$user_lastname = $row['lastname'];
			$user_email = $row['email'];
			$user_phone = $row['phone'];
			$user_address = $row['address'];
			$role_as = $row['role_id'];
		}

		$_SESSION['auth'] = "$role_as";
		$_SESSION['auth_user'] = [
			'user_id'=>$user_id,
			'user_firstname'=>$user_firstname,
			'user_lastname'=>$user_lastname,
			'user_email'=>$user_email
		];

		if($_SESSION['auth'] == "1") {
			$sql="SELECT * FROM events"; 
            $result=mysqli_query($conn,$sql);
            $count=mysqli_num_rows($result);
            $flag='0';

             if(mysqli_num_rows($result)>0)
            {
                while($row = mysqli_fetch_assoc($result))
                {
                    if((strtotime($row["event_date"]))<strtotime(date("Y-m-d")))
                    {
                        $date = $row["event_date"];
                        $sql="DELETE FROM events WHERE  event_date = '$date'";
                        mysqli_query($conn,$sql);
                    }

                    $flag ++;
                }

                if($flag==$count)
                {
                    $_SESSION['status'] = "Logged In Successfully";
                    echo "<script> window.location = 'dashboard/index.php';</script>";
                }
            }
            else
            {
                $_SESSION['status'] = "Logged In Successfully";
				header('Location: dashboard/index.php');
            }
		}

		else {
			$sql="SELECT * FROM events WHERE user_id ='$user_id'"; 
            $result=mysqli_query($conn,$sql);
             if(mysqli_num_rows($result)>0)
            {
                $row = mysqli_fetch_assoc($result);
                
                if((strtotime($row["event_date"]))<strtotime(date("Y-m-d")))
                {
                    $sql="DELETE FROM events WHERE user_id ='$user_id'";
                    if(mysqli_query($conn,$sql))
                    {
                        header('Location: profile/profile.php');
                    }
                }
                else
                {
                    header('Location: profile/profile.php');
                }
            }
            else
            {
                header('Location: profile/profile.php');
            }
		}
	}
	else {
		$_SESSION['status'] = "Invalid Email or Password";
		header('Location: login.php');
	}
}
else {
	$_SESSION['status'] = "Access Denied";
	header('Location: login.php');
}

?>