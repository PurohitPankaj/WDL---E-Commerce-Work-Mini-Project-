<?php
 function Check_if_added_to_cart($item_id)
 {
	 include "connect.php";
	 $select_uid="select id from users where email='".$_SESSION['email']."'";
	 $select_uids= mysqli_query($con,$select_uid) or die(mysqli_error($con));
	 $check_uid= mysqli_fetch_array($select_uids);
	 echo $check_uid[0];
	 echo $_SESSION['id']=$check_uid[0];
	 $select_pid="select pid from items where pid=$item_id";
	 $select_pids= mysqli_query($con,$select_pid) or die(mysqli_error($con));
	 $check_pid= mysqli_fetch_array($select_pids);
	 echo $check_pid[0];
	 $select_query="SELECT did FROM users_items WHERE item_id=$check_pid[0] AND user_id=$check_uid[0] and status='Added to cart'";
	 $select_query_result= mysqli_query($con,$select_query) or die(mysqli_error($con));
	 $check_item= mysqli_num_rows($select_query_result);
	 echo $check_item;
	 if(mysqli_num_rows($select_query_result)>=1 )
	 {
		 return 1;
	 }
	 else{return 0;	}

 }
?>