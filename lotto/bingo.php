<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<?php

function bingo()
{   $i=0;
    $n[0]=rand(1,42);
    while($i<6){
	$n[$i+1]=rand(1,42);
	for($g=0;$g<$i;$g++){
    if($n[$i] == $n[$i+1]){
    $n[$i+1]=rand(1,42);
    }}
    $i++;
    }
    echo "lotto bingo number is:";
	for($i=0;$i<6;$i++){
	    echo $n[$i] .",";
	}
}
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Hello</title>
</head>
<body>

Your number is <?php echo $_POST["txtUserName1"].",".
                          $_POST["txtUserName2"].",".
                          $_POST["txtUserName3"].",".
                          $_POST["txtUserName4"].",".
                          $_POST["txtUserName5"].",".
                          $_POST["txtUserName6"].",".
                          $_POST["txtUserName7"].","?><br>
    
<?php bingo(); ?>
</body>
</html>
