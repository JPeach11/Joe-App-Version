<?php
  $user = 'root';
  $pass = "M@ster23";
  $db = new PDO('mysql:host=localhost;dbname=users',$user,$pass);
  $sql = "SELECT * FROM users";
  $query = $db->prepare( $sql);
  $query->execute();
  $results = $query->fetchALL(PDO::FETCH_ASSOC);
 ?>
 <table class="table">
   <tr>
     <th>ID</th>
     <th>Username</th>
     <th>Password</th>
     <th>First Name</th>
     <th>Surname</th>
     <th>Address</th>
     <th>Email</th>
   </tr>
   <?php foreach( $results as $row ){
   echo "<tr><td>";
     echo $row['id'];
     echo "</td><td>";
     echo $row['username'];
     echo "</td><td>";
     echo $row['password'];
     echo "</td><td>";
     echo $row['first_name'];
     echo "</td><td>";
     echo $row['surname'];
     echo "</td><td>";
     echo $row['address'];
     echo "</td><td>";
     echo $row['email'];
     echo "</td>";
   echo "</tr>";
   }
 ?>
 </table>
