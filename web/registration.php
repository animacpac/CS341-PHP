
<?php 
    
$showAlert = false;  
$showError = false;  
$exists=false; 
    
if($_SERVER["REQUEST_METHOD"] == "POST") { 
      
    // Include file which makes the 
    // Database Connection. 
    include 'sr1.php';    
    
    $username = $_POST["username"];  
    $password = $_POST["password"];  
    $cpassword = $_POST["cpassword"]; 
            

    require ("sr1.php")
    $db = get_db();
    try{
    $query = 'INSERT INTO users(username, password, cpassword) VALUES(:username, :password, :cpassword)';
    
    $statement = $db->prepare($query);
    
    $statement->bindValue(':username', $username);
	$statement->bindValue(':password', $password);
    $statement->bindValue(':cpassword', $cpassword);
    $statement->execute();

//     if($num == 0) { 
//         if(($password == $cpassword) && $exists==false) { 
    
//             $hash = password_hash($password,  
//                                 PASSWORD_DEFAULT); 
                
//             // Password Hashing is used here.  
//             $sql = "INSERT INTO `users` ( `username`,  
//                 `password`) VALUES ('$username',  
//                 '$hash', current_timestamp())"; 
    
//             $result = mysqli_query($conn, $sql); 
    
//             if ($result) { 
//                 $showAlert = true;  
//             } 
//         }  
//         else {  
//             $showError = "Passwords do not match";  
//         }       
//     }// end if  
    
//    if($num>0)  
//    { 
//       $exists="Username not available";  
//    }  
    
}//end if    
} 
?>