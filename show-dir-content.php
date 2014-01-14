<?php
echo "The current directory is ". getcwd() . ".";
$scan = scandir(getcwd());
echo "Its contents are:\n";
foreach($scan as $v)
{
	if(($v == ".") || ($v == ".."))
	{
		echo("");
	}
	else
	{
		echo($v . "\n");
	}
}
?>
