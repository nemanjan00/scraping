<?php
$items = [];

function scrape($nextLink = null){
	global $items;

	if($nextLink == null){
		$nextLink = "http://localhost:8080/";
	}

	$data = file_get_contents($nextLink);

	$listItems = explode("<li>", explode("ul", $data)[1]);

	unset($listItems[0]);

	forEach($listItems as $item){
		$name = explode("<", $item)[0];

		$items[] = $name;
	}

	if(strpos($data, "Next")){
		$nextLink = explode("\"", explode("<a href=\"", $data)[1])[0];
		scrape("http://localhost:8080$nextLink");
	}

	return $items;
}

print_r(scrape());
?>
