<?php

session_start();
if (!isset($_SESSION["username"])) {
    header("location: index.php"); // Redirect the user to the login page if they are not logged in
    exit;
}
else {
include("connection.php");
?>


<html>
<head> 
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<title> Student records </title>
<link rel="stylesheet" href="recordstyle.css">


</head>

<body>
<a href="system.php" style="text-decoration: none;"><h2 style="text-align: center; color: white;">
        Student Management System
      </h1> </a>
<form method="post" action="#">
<input type="text" name="name" placeholder="Search By Name" style="color:black;"/>


          <select name="class" id="class" >
          <option value="" disabled selected hidden>Search by Class</option>
          <option value="Nursery">Nursery</option>
          <option value="KG">KG</option>
          <option value="Class 1">Class 1</option>
          <option value="Class 2">Class 2</option>
          <option value="Class 3">Class 3</option>
          <option value="Class 4">Class 4</option>
          <option value="Class 5">Class 5</option>
          <option value="Class 6">Class 6</option>
          <option value="Class 7">Class 7</option>
          <option value="Class 8">Class 8</option>
          <option value="Class 9">Class 9</option>
          <option value="Class 10" >Class 10</option>
          <option value="Class 11" >Class 11</option>
          <option value="Class 12" >Class 12</option>
        </select>


    <input type="text" name="email" placeholder="Search By Email" style="color:black;"/>


          <input type="text" name="number" placeholder="Search By Number" style="color:black;"/>

<input
  type="submit"
  name="search"
  value="Search"
  style="background-color: #008cba;"
/>
</form>
<?php

error_reporting(0);

 if(isset($_POST['search'])){
    $name =$_POST['name'];
    $class = $_POST['class'];
    $searchemail = $_POST['email'];
   $searchnumber = $_POST['number'];
  
  $query = "SELECT * from data WHERE (class = '$class' OR email= '$searchemail' OR number='$searchnumber' OR name='$name') ";
   // $query = "SELECT * FROM data";

$data = mysqli_query($conn,$query);

$total = mysqli_num_rows($data);  // to store the number of records in table



if($total!=0) // if there are records in table

{
    ?>

    <h3 align="center"> Records of the Students </h1>
<table align="center" width="90%">
    <tr>
<th> ID </th>    
<th> Name </th>    
<th> Gender </th>  
<th> Email </th> 
<th> Phone </th> 
<th> Class </th> 
<th> Address </th>     

</tr>   

    <?php
   while($result = mysqli_fetch_assoc($data))
   {
    echo"<tr>
<td>".$result[id]." </td>    
<td>".$result[name]." </td>    
<td>".$result[gender]." </td>  
<td>".$result[email]." </td>  
<td>".$result[number]." </td>
<td>".$result['class']." </td> 
<td>".$result[address]." </td>    



</tr>
    
    
    ";
   }
}
else {
    echo "no records found";
}
?>
</table>
</body>


</html>

<?php
}
}
?>