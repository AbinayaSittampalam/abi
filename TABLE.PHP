<HTML>
<BODY>
<table BORDER="1">


<?PHP
FUNCTION TABLE(){
	GLOBAL $NUMBER;
		
	FOR($Y=1;$Y<=10;$Y++){
			ECHO "<TR>";
	FOR($X=1;$X<=10;$X++)
	{
		ECHO "<TD>";
		$NUMBER=$Y*$X;
	ECHO $NUMBER;
		
}
}
}
TABLE();


?>
</TABLE>
<?PHP
$myString="hello, world!";
echo strstr($myString,"wor")."<br/>";
echo(strstr($myString,"xyz")?"yes":"no")."<br/>";
echo strstr($myString,"wor",true);
echo strpos($myString,"wor")."<br/>";
echo strpos($myString,"xyz")."<br/>";

echo strpos($myString,"o")."<br/>";
echo strpos($myString,"o",5)."<br/>";

$myString1="i say,nay ,nay,and thrice nay!";
echo substr_count($myString1,"nay")."<br/>";
echo substr_count($myString1,"nay",9)."<br/>";
echo substr_count($myString1,"nay",9,6)."<br/>";
echo str_replace("nay","twice",$myString1,$num)."<br/>";
echo"the text was replaced $num times.<br/>";
echo substr_replace($myString1,"twice",19,5)."<br/>";
echo substr_replace($myString1,"twice",19,-20)."<br/>";

$my="0123456789";
echo substr_replace($my,"*",2,-3)."<br/>";
?>

</BODY>

</HTML>