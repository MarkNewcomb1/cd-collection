<!DOCTYPE HTML>
<html>
	<head>
		<title>Awesomely cool title, like you have no idea guys</title>
	</head>
	<body>
<?php


  $cds=
    array(
      array(
          "artist" => "Led Zeppelin",
          "album" => "Led Zeppelin III",
          "year" => "1970"
      ),
	  array(
	  	"artist" => "Metallica",
		"album" => "Ride the Lightning",
		"year" => "1984"
	  )
    );

foreach ($cds as $cd){
	echo "<ul>";
	echo "<li>" . $cd['artist'] . ' ' . $cd['album'] . ' ' . $cd['year'] . "</li>" . "\n";
	echo "</ul>";
}

?>
	</body>
</html>