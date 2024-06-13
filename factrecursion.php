<html>
<head>
<title>Factorial program</title>
</head>
<body>
<form method="POST">
<label>enter a number</label>
<input type="text" name="number" />
<input type="submit" value="Submit"/>
</form>
<?php
function Factorial_Function($input)
{
if($input<=1) {
return 1;
}
return $input *Factorial_Function($input-1);
}
if(!empty($_POST['number'])){
$input=$_POST['number'];
echo '<br>'. 'The factorial of a number '.$input.' is ' .
Factorial_Function($input);
}
?>
</body>
</html>