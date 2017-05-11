<?php
include_once 'dbconfig.php';



if(!$user->is_loggedin())
{
 $user->redirect('index.php');
}
$user_id = $_SESSION['user_session'];
$user_id = (int)$user_id;
$table = "users";

$sql = "SELECT user_name FROM dblogin.$table WHERE user_id = $user_id";
$stmt = $DB_con->prepare($sql);
$stmt->execute();
$row = $stmt->fetch();
$stmt->closeCursor();
#$stmt = (string)$stmt;

echo ($user_id);
echo "------- ";
echo $row;
echo "------- ";

if(isset($_POST['btn-signup']))

{
   $timestamp = date('H');
   $beginHourArray = array();
   $beginHour = $timestamp;
   array_push($beginHourArray, $beginHour);



   $sports = trim($_POST['txt_sports1']);
   $sports = (int)$sports;
   $rec = trim($_POST['txt_rec1']);
   $rec = (int)$rec;
   $work = trim($_POST['txt_work1']);
   $work = (int)$work;




    $timestamp2 = 2;
    $user1256 = "bigfresh";
  #  if (true){
      $insertdata = $DB_con->exec("INSERT INTO dblogin.$user1256(sports,work,recreation) VALUES ($sports,$work,$rec)");
        echo ("thank you for submitting!");
        $timestamp2 = date('H');
        echo ($timestamp2);
  #  }else{
    #  echo "Nothing done ";
      #print_r($beginHourArray);
      #echo $timestamp;
      #echo " ";
      #echo $timestamp2;
      #echo " ";
      #echo $timestamp2 - $timestamp ;

    }








?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css"  />
<link rel="stylesheet" href="style.css" type="text/css"  />
<title>welcome </title>
</head>

<body>

<div class="header">
 <div class="left">
     <label><a href="http://www.kevinvirkdrones.com/">kevinvirkdrones!</a></label>
    </div>
    <div class="right">
     <label><a href="logout.php?logout=true"><i class="glyphicon glyphicon-log-out"></i> logout</a></label>
    </div>
</div>
<div class="content">
Welcome
</div>
<div class="container">
     <div class="form-container">
        <form method="post">
            <h2>Enter Minutes!</h2><hr />
            <div class="form-group">
            <input type="text" class="form-control" name="txt_sports1" placeholder="Enter Sports Minutes!" value="<?php if(isset($error)){echo $sports1;}?>" />
            </div>
            <div class="form-group">
            <input type="text" class="form-control" name="txt_work1" placeholder="Enter Work Minutes" value="<?php if(isset($error)){echo $work1;}?>" />
            </div>
            <div class="form-group">
             <input type="text" class="form-control" name="txt_rec1" placeholder="Enter Recreation Minutes" value="<?php if(isset($error)){echo $rec1;}?>" />
            </div>
            <div class="clearfix"></div><hr/>
              <div class="form-group">
               <button type="submit" class="btn btn-block btn-primary" name="btn-signup">
                   <i class="glyphicon glyphicon-open-file"></i>&nbsp;ENTER
                  </button>
              </div>
            <br />

        </form1>
       </div>
</div>
</body>
</html>
