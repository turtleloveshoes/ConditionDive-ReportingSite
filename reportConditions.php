<?php
//include '../examples/index.php';
//$con=auth_db();


//if(isset($_SESSION['signed_in'])){

    if($_SERVER['REQUEST_METHOD'] != 'POST'){
        include 'trialreport.php';
    }
else{
   
    $errorMessage=array(); 
   
    if(!isset($_POST['diveSite']))
    {
      $errorMessage .= "<li>You forgot to select your divesite</li>";
    }
    if(!isset($_POST['condVis']))
    {
      $errorMessage .= "<li>You forgot to select the Visibility</li>";
    }
    if(!isset($_POST['condSurf']))
    {
      $errorMessage .= "<li>You forgot to select the Surf/li>";
    }
    if(!isset($_POST['condSurge']))
    {
      $errorMessage .= "<li>You forgot to select the Surge</li>";
    }
    if(!isset($_POST['condCurrent']))
    {
      $errorMessage .= "<li>You forgot to select the Current</li>";
    }
    if(!isset($_POST['condTemp']))
    {
      $errorMessage .= "<li>You forgot to select the Temperature</li>";
    }
    if(!isset($_POST['condOverall']))
    {
      $errorMessage .= "<li>You forgot to select your Overall rating</li>";
    }
   
        if(isset($_POST['reportconditions']) )
        {
          $varDive = $_POST['diveSite'];
          $varVis = $_POST['condVis'];
          $varSurf = $_POST['condSurf'];
          $varSrge=$_POST['condSurge'];
          $varCurr=$_POST['condCurrent'];
          $varTmp=$_POST['condTemp'];
          $varOvl=$_POST['condOverall'];
          $errorMessage = "";
        }
        
    }
include 'includes/SessionAgent.php';
$con=auth_db();

$query="INSERT INTO conditions (post_user_id, post_divesite_id, post_vis, post_surf, post_surge, post_curr, post_temp, post_overall, post_time, post_date) VALUES ('test', '$varDive', '$varVis', '$varSurf', '$varSrge', '$varCurr', '$varTmp', '$varOvl',NOW(), DATE())";
$result=mysql_query($query);
   //mysql_close($con);
echo mysql_error();
   
  

echo'<center><h1>Thank you for reporting!</h1></center>';


}
    

//else{

  // echo '<h1>You must be signed in to report:<br/> Sign in on the upper right</h1>';
    
//}
 //echo "<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>";
include 'footer.php';
?>
