<?php

$dh = @opendir( "./files" );

while( false !== ( $file = readdir( $dh ) ) ){ 
	if($file != ".") {
		echo "<a href='/files/" . $file . "'>" . $file ."</a><br />";
	}
}

?>