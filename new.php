<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>JavaScript form validation - checking all letters</title>
<link rel='stylesheet' href='form-style.css' type='text/css' />
</head>
<body onload='document.form1.text1.focus()'>
<div class="mail">
<h2>Enter your Name and Submit</h2>
<form name="form1" action="#">
<ul>
<li>Code:</li>
<li><input type='text' name='text1'/></li>
<li class="rq">*Enter alphabets only.</li>
<li>&nbsp;</li>
<li><input type="submit" name="submit" value="Submit" onclick="allLetter(document.form1.text1)" /></li>
<li>&nbsp;</li>
</ul>
</form>
</div>
<script src="all-letter.js"> 
function allLetter(inputtxt)
      { 
      var letters = /^[A-Za-z]+$/;
      if(inputtxt.value.match(letters))
      {
      alert('Your name have accepted : you can try another');
      return true;
      }
      else
      {
      alert('Please input alphabet characters only');
      return false;
      }
      }
</script>
</body>
