<?php

	if (file_exists('conteo.txt')) 
	{
		$fil = fopen('conteo.txt', r);
		$dat = fread($fil, filesize('conteo.txt')); 
		echo $dat+1;
		fclose($fil);
		$fil = fopen('conteo.txt', w);
		fwrite($fil, $dat+1);
	}

	else
	{
		$fil = fopen('conteo.txt', w);
		fwrite($fil, 1);
		echo '1';
		fclose($fil);
	}
?>