<?php

//fetch.php

$connect = new PDO("mysql:host=localhost;dbname=findit2", "root", "");

if (isset($_POST['query'])){ 

if($_POST["query"] != '')
{
 $search_array = explode(",", $_POST["query"]);
 $search_text = "'" . implode("', '", $search_array) . "'";
 $query = "
 SELECT * FROM employees 
 WHERE lname IN (".$search_text.") 
 ORDER BY employees.id DESC ";
}}
else
{
 $query = "SELECT * FROM employees ORDER BY employees.id DESC";
}


$statement = $connect->prepare($query);

$statement->execute();

$result = $statement->fetchAll();

$total_row = $statement->rowCount();

$output = '';

if($total_row > 0)
{
 foreach($result as $row)
 {
  $output .= '
  <tr>
   <td>'.$row["fname"].'</td>
   <td>'.$row["lname"].'</td>
   <td>'.$row["email"].'</td>
   
  </tr>
  ';
 }
}
else
{
 $output .= '
 <tr>
  <td colspan="5" align="center">No Data Found</td>
 </tr>
 ';
}

echo $output;


?>
