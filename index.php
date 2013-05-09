<html>
<head>
</head>
<body>
<?php 
$link='http://rss.cnn.com/rss/edition.rss';
$link_content=simplexml_load_file($link);

echo "<link rel='stylesheet' type='text/css' href='style.css'/>";

echo '<div id="tavi"><h1 >'.$link_content->channel->title.'</h1></div>';
foreach($link_content->channel->item as $a ){

	$time=strtotime($a->pubDate);
	$date=date('j M g:i A', $time);
echo '<div id="title"><h2 >'.$a->title.'</h2></div>';
echo '<div id="description"><h3>Decription</h3><p>'.$a->description.'</p></div>';
echo '<div id="date"><p >'.$date.'</p></div>'; 
echo '<div id="readmore"><a href='."$a->link".'>Read More...</a></div>';


}

?>

</body>
	</html>