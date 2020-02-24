<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

</head>
<body>
<form  method="POST">
  <div class="form-group col-md-4">
  <br>
    <label >Member Name</label>
    <input type="text" class="form-control" name="txtname">
  </div>
  <div class="form-group col-md-4">
    <label >Count Of Family</label>
    <input type="number" class="form-control" name="nFamily">
  </div>
  <div class="col-md-4">
  <label >Choose Games Name</label>

   <div class="form-check ">
  <input class="form-check-input" type="checkbox" name="Checkbox1" >
  <label class="form-check-label" >Football(300 LE) </label>
</div>
<div class="form-check ">
  <input class="form-check-input" type="checkbox" name="Checkbox2" >
  <label class="form-check-label" >Swimming(250 LE) </label>
</div>

<div class="form-check ">
  <input class="form-check-input" type="checkbox" name="Checkbox3" >
  <label class="form-check-label" >Volley ball(150 LE) </label>
</div>

<div class="form-check ">
  <input class="form-check-input" type="checkbox" name="Checkbox4" >
  <label class="form-check-label" >Others(100 LE) </label>
</div></div>
<br>

<div class="form-group col-md-4">
    <label >Count Of Childen</label>
    <input type="number" class="form-control" name="nChild">
  </div>
  <br>

<input  type="submit" class="btn btn-primary col-md-4" value="Submit" name="btnsubmit"></input> <br>
<?php 
session_start();
if(isset($_POST['btnsubmit'])){

 $_SESSION['name']=$_POST['txtname'];
$_SESSION['family']=$_POST['nFamily'];
 $_SESSION['children']=$_POST['nChild'];
// $_SESSION['Checkbox1']=$_POST['Checkbox1'];
// $_SESSION['Checkbox2']=$_POST['Checkbox2'];
// $_SESSION['Checkbox3']=$_POST['Checkbox3'];
// $_SESSION['Checkbox4']=$_POST['Checkbox4'];
$sum=0;
if (!empty($_POST['Checkbox1'])){
    $sum+=300;
}
if(!empty($_POST['Checkbox2'])){
    $sum+=250;
}
if(!empty($_POST['Checkbox3'])){
    $sum+=150;
}
if(!empty($_POST['Checkbox4'])){
    $sum+=100;
}
// echo($sum);
$tSub;$tSubG;$final;
$tSub=10000+$_SESSION['family']*2500;
$tSubG=$sum* $_SESSION['children'];
$final=$tSub+$tSubG;

echo($_SESSION['name'] .' your final total subscription is ' . $final);


}

?>

</form>
</body>
</html>