<?php
require("includes/common.php");
$output = '';
if(isset($_POST["query"]))
{
	$search = mysqli_real_escape_string($con, $_POST["query"]);
	$query = "
	SELECT * FROM document 
	WHERE DocID LIKE '%".$search."%'
	OR Title LIKE '%".$search."%' 
	OR PublisherID LIKE '%".$search."%'
	";
}
else
{
	$query = "
	SELECT * FROM document ORDER BY DocID";
}
$result = mysqli_query($con, $query);
if(mysqli_num_rows($result) > 0)
{
	$output .= '<div class="table-responsive">
					<table class="table table bordered">
						<tr>
							<th>Dod ID</th>
							<th>Title</th>
							<th>Publisher ID</th>
						</tr>';
	while($row = mysqli_fetch_array($result))
	{
		$output .= '
			<tr>
				<td>'.$row["DocID"].'</td>
				<td>'.$row["Title"].'</td>
				<td>'.$row["PublisherID"].'</td>
			</tr>
		';
	}
	echo $output;
}
else
{
	echo 'Data Not Found';
}
?>