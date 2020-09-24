<!DOCTYPE html>
<html>
<head>
	<title>Question4</title>
</head>
<body>
<form method="post" action="form_submit.php" name="Form" onsubmit="return validateForm()">
   <input type="text" id="name" name="firstname" placeholder="firstname"/>
   <br><br>
   <input type="checkbox" id="chknm" name="checkme"/><br><br>
  <input type="submit" name="submit" value="Submit" />
</form>
</body>
</html>
<script type="text/javascript">
  function validateForm() {
    var a = document.getElementById('name').value;
    //var b = document.forms["Form"]["checkme"].value;
    var b = document.getElementById('chknm').checked;

     if (a == "") {
       alert("Please Fill The name field");
       return false;
     }
     else if(b == false)
     {
       alert("checkbox is unchecked...checked it");
       return false;
     }
  }
</script>

