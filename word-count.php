<?php

echo "<form method=POST>
<textarea name='words' placeholder='Paste text'></textarea>";
echo '<input type="submit" value="Get word occurances">';
echo "</form>";

if(isset($_POST["words"])){
	$words = str_replace(array("\n","\r")," ",$_POST["words"]);
	$eachword = explode(" ",$words);
	foreach($eachword as $w){
		if(strlen($w)>0){
			$wc[$w]++;
		}
	}
	arsort($wc);
	echo "<table>";
	echo '<tr><td>Word</td><td>Count</td></tr>';
	foreach($wc as $w => $c){
		echo "<tr><td>$w</td><td>$c</td></tr>";
	}
	echo "</table>";
}
