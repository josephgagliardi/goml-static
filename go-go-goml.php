<?php
require __DIR__ . '/vendor/autoload.php'; 
$searchID = (isset($_GET['pid']) && !empty($_GET['pid'])) ? $_GET["pid"] : null;

// TODO: These should be stored as server vars or such
$client = Algolia\AlgoliaSearch\SearchClient::create(
	'JBY4H547QZ',
	'87081fa12236159a1437cc0fdd06de70'
);
$index = $client->initIndex('saved_Searches');

// IMPORTANT: objectID must be the only searchable ID on this index 
$savedSearch = $index->search('searchID');
var_dump($savedSearch['hits']);

// Check the saved search - should only be a single value

// echo($index);
// var_dump($index->search('nursing'));


// var_dump($searchID);
// header("Location: /program-listing.php"); 


?>
<html>
<head>
	<meta charset="UTF-8">
	<title>Go Go GOML!</title>

</head>
<body>
	
</body>
</html>
<!--GO GO GOML
//always send to the degrees page
<! In a second get the params first - pass those as filters - these will params will come from calling to algolia with the incoming hash param -- so it will come as /go-go-goml.php?xeBqrtz -->


<!-- This hash will pass to algolia as an index name and will return with a list of filters -->
<!-- These filters will be parsed and sanitized before being passed off to the program marketplace -->
<!-- The task of the share button will be to create a new custom indexed object in Algolia index called go-go-goml-url-list -->
<!-- The js function to create this index will callback with the index and add it to the share link shown to the user -->

<!-- Summary: -->
<!-- When the user return to https://goml-refresh.herokuapp.com/go-go-goml.php?xeBqrtz we will chop off the param and find the given search in the Algolia index returning with a list of params to set the filters and other attributes of the site. This will let us track analytics on each indexed item to see which degrees are being shopped, when, and by whom. We can then return new data in the index according to how it is being hit such as "special offer" which could be an index that then displays a pop up on the page for a coupon to a bookstore for the school-->
<!-- Rules put in place such as "For all degree URL's visited more than 3 times in the past week display this special offer or encouragement message" could be used for personalization -->
<!-- For default cases or for when the filters break or the index cannot be found based on the hash we would display a default message or search result etc. -->


<!-- The idea will be to mark each visit of the custom URL pattern somehow to track user visits -->

