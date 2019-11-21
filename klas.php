<?php 

$namen = readline('wie zit er in de klas');

$namenarray = explode(" ", $namen);

foreach ($namenarray as $naam) {
	echo $naam;
	echo PHP_EOL;
	
};
 ?>