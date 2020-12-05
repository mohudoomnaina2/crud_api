<?php
$apiUrl = 'http://localhost/crud_api/api/test_api.php?action=fetch_all';

$client = curl_init($apiUrl);

curl_setopt($client, CURLOPT_RETURNTRANSFER, true);

$response = curl_exec($client);

$result = json_decode($response);

$output = '';

if(count($result) > 0)
{
    $i = 1;
	foreach($result as $row)
	{
		$output .= '
        <tr>
			<td>'.$i++.'</td>
			<td>'.$row->first_name.'</td>
			<td>'.$row->last_name.'</td>
			<td><button type="button" id="edit" value="'.$row->id.'">Edit</button></td>
			<td><button type="button" id="delete" value="'.$row->id.'">Delete</button></td>
		</tr>
		';
	}
}
else
{
	$output .= '
	<tr>
		<td colspan="4" align="center">No Data Found</td>
	</tr>
	';
}

echo $output;

?>