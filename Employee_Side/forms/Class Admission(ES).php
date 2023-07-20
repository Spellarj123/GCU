<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Class Admission Slip(es)</title>
	<style>
		.hidden{
			display: none;
		}
		#Title{
		text-align: center;
    font-family: Arial, sans-serif;
    color:white;
	}
	.hidden1, .hidden2{
		display: none;
	}
  body{
    background-color:green;
  }
  .form {
      width: 90%;
      padding: 60px;
      padding-right:60px;
      background-color: darkgreen;
      border-radius: 8px;
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
      
    }
  .form label{
    color: white;
    font-size:20px;
    font-family: Arial, sans-serif;
  }
	

	</style>
</head>
	
<body>
<h1 id="Title">Class Admission Slip</h1>
<div class=form>
<form id="form1" name="form1" method="post">
  <p>
    <label for="select">Actions Taken:</label>
  </p>
  <p>  
    <label>
      <input type="checkbox" name="CheckboxGroup1" value="checkbox" id="CheckboxGroup1_0">
      verified supporting document/s</label>
    <br>
    <label>
      <input type="checkbox" name="CheckboxGroup1" value="checkbox" id="CheckboxGroup1_1">
      interviewed with guidance</label>
    <br>
    <label>
      <input type="checkbox" name="CheckboxGroup1" value="checkbox" id="CheckboxGroup1_2">
      life coaching</label>
    <br>
    <label>
      <input type="checkbox" name="CheckboxGroup1" value="checkbox" id="CheckboxGroup1_3">
      parent conference</label>
    <br>
    <label>
      <input type="checkbox" name="CheckboxGroup1" value="checkbox" id="CheckboxGroup1_4">
      counseling</label>
    <br>
    <label>
      <input type="checkbox" name="CheckboxGroup1" value="checkbox" id="others" onclick="myFunction()">
      others</label>
    <input type="text" name="textfield3" id="oth" style="display: none">
    <br>
  </p>
  <p>
    <label>
      <input type="radio" name="EU" value="radio" id="EU_0">
    Excused</label>
    <label for="textfield">:</label>
    <input type="text" name="textfield" id="textfield">
    <br>
    <label>
      <input type="radio" name="EU" value="radio" id="EU_1">
      Unexcused</label>
    <label for="textfield2">:</label>
    <input type="text" name="textfield2" id="textfield2">
  </p>
  <p>
    <input type="submit" name="submit" id="submit" value="Submit">
    <br>
  </p>
</form>
</div>
	<script>
function myFunction() {
  var checkBox = document.getElementById("others");
  var text = document.getElementById("oth");
  if (checkBox.checked == true){
    text.style.display = "block";
  } else {
     text.style.display = "none";
  }
}
</script>
</body>
</html>
