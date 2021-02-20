<?php include("header.php"); 
session_start();
$username = $_SESSION['username'];

?>

<?php 
    session_start();
    $current_user = $_SESSION['username'];
    $username = mysqli_real_escape_string($database,$_REQUEST['username']);
    $profile_username=$rws['username'];
?>
<!DOCTYPE html>
<html lang="en">
<html lang="en-us" xmlns="http://www.w3.org/1999/xhtml">
<body>
<div class="profile">
	<div class="row clearfix">
		<!-- <div class="col-md-12 column"> -->
            <div>
                
                </center>
                <h1 class="text-center profile-text profile-name"><?php echo $rws['fname'];?> <?php echo $rws['lname'];?></h1>
                <h2 class="text-center profile-text profile-profession"><?php echo $rws['street_name'];?></h2>
                <br>
                <div class="panel-group white" id="panel-profile">
                    <div class="panel panel-default">
                        <div id="panel-element-info" class="panel-collapse collapse in">
                            <div class="panel-body">
                                <div class="col-md-8 column">
                                    <p class="text-center profile-title"><i class="fa fa-info"></i> Basic</p>
                                    <hr>
                                    <?php
    if ($rws['street_name']){
?>   
                                    <div class="col-md-4">
                                        <p class="profile-details"><i class="fa fa-info"></i> Bio</p>
                                    </div>
                                    <div class="col-md-8">
                                        <p><?php echo $rws['street_name'];?></p>
                                    </div>
<?php } ?>
<?php
    if ($rws['city_name']){
?>   
                                    <div class="col-md-4">
                                        <p class="profile-details"><i class="fa fa-info"></i> Location</p>
                                    </div>
                                    <div class="col-md-8">
                                        <p><?php echo $rws['city_name'];?></p>
                                    </div>
<?php } ?>
<?php
    if ($rws['zipcode']){
?>   
                                    <div class="col-md-4">
                                        <p class="profile-details"><i class="fa fa-envelope"></i> Email</p>
                                    </div>
                                    <div class="col-md-8">                                    
                                        <p><?php echo $rws['zipcode'];?></p>
                                    </div>
<?php } ?>
<?php
    if ($rws['fname']){
?>   
                                    <div class="col-md-4">
                                        <p class="profile-details"><i class="fa fa-info"></i> Country</p>
                                    </div>
                                    <div class="col-md-8">
                                        <p><?php echo $rws['fname'];?></p>
                                    </div>
<?php } ?>
                                </div>
                                <div class="col-md-4 column">
                                    <p class="text-center profile-title"><i class="fa fa-info"></i> Personal</p>
                                    <hr>
<?php
    if ($rws['lname']){
?>   
                                    <div class="col-md-4">
                                        <p class="profile-details"><i class="fa fa-user"></i> Gender</p>
                                    </div>
                                    <div class="col-md-8">
                                        <p><?php echo $rws['lname'];?></p>
                                    </div>
<?php } ?>
<?php
   
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
		<!-- </div> -->
	</div>
</div>
</body>
</html>