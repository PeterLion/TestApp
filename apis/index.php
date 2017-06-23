<?php
  header("Access-Control-Allow-Origin: *");
  require "connector.php";

if($connection){
	$sql = "SELECT id, product_name, product_description FROM producs order by id asc limit 6";
  $result = $connection->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo 
    "
    <div class='col-xs-12 col-md-6 col-lg-4'>
	    <div class='thumbnail'>
			<img class='image-responsive' src='../www/images/phumbs/nod-article-square.png' alt='...'> 
			      <div class='caption'>
			        <h3>".$row["product_name"]."</h3>
			        <p>". $row["product_description"]."<p><a href='#' class='btn btn-primary' role='button'>Button</a> <a href='#' class='btn btn-default' role='button'>Button</a></p>
			        </div>
	    </div>
    </div>
    ";

    }
} else {
    echo "0 results";
}
$connection->close();
}else{
	echo "something went wrong,please wait..";
}
  