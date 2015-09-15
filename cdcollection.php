<!DOCTYPE HTML>
<html>
	<head>
		<title>Awesomely cool title, like you have no idea guys</title>
		<style>
			body {
				background-color:rgb(232, 229, 220);
			}
			img {
				max-height: 200px;
			}
			ul {
				margin-bottom: none;
			}
			li {
				font-family:fantasy;
			}
			ul li {
				list-style-type: none;
			}
			
			.tags {
				list-style-type: none;
				padding-left:40px;
			}
		</style>
	</head>
	<body>
<?php


  $cds=
    array(
      array(
          "artist" => "Led Zeppelin",
          "album" => "Led Zeppelin III",
          "album-art" => "https://upload.wikimedia.org/wikipedia/en/thumb/5/5f/Led_Zeppelin_-_Led_Zeppelin_III.png/220px-Led_Zeppelin_-_Led_Zeppelin_III.png",
          "year" => "1970",
          "tags" => array("rock", "classic rock")
      ),
	  array(
	  	"artist" => "Metallica",
		"album" => "Ride the Lightning",
		"album-art" => "https://upload.wikimedia.org/wikipedia/en/8/82/Metallica_-_Ride_the_Lightning_cover.jpg",
		"year" => "1984",
		"tags" => array("rock", "heavy metal")
	  )
    );



			$rock_titles = 0;
			$heavy_metal_titles = 0;
foreach ($cds as $cd){
	echo "<ul>";
	echo "<li>" . "<img src=".$cd['album-art']." />" . '<br />' . $cd['artist'] . '<br /> ' . $cd['album'] . ' ' .
	 '<br />' . $cd['year'] . "</li>";
	echo "</ul>";
			foreach ($cd['tags'] as $key=>$value) {
				echo "<li class='tags'>";
						if ($key == (count($cd['tags']) - 1)) {
							$comma = "";
							echo $value . $comma;
						}
						else {
							$comma = ", ";
						echo $value . $comma;
						}
						echo "</li>";
			} //end foreach on the tags
if (in_array("rock", $cd['tags'])) {
	$rock_titles++;
}
if (in_array("heavy metal", $cd['tags'])){
	$heavy_metal_titles++;
}
}//end foreach on the cds
echo "Number of CDs tagged with \"rock\": " . $rock_titles . "<br />";
echo "Number of CDs tagged with \"heavy metal\": " . $heavy_metal_titles . "<br />";



?>
	</body>
</html>