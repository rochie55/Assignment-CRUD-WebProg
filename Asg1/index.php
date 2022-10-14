<?php
include_once("config.php");
 
$result = mysqli_query($mysqli, "SELECT * FROM db_webprog ORDER BY ID ASC");
?>
 
<html>
<head>    
    <title>Menu_Utama</title>
</head>
 
<body>

 
    <table width='70%' border=1>
 
    <tr>
        <th>ID</th> <th>Nama</th> <th>Email</th> <th>Nomor_hp</th> <th>Umur</th> <th>Gender</th> <th>Update</th>
    </tr>
    <?php  
    while($user_data = mysqli_fetch_array($result)) {         
        echo "<tr>";
        echo "<td>".$user_data['ID']."</td>";
        echo "<td>".$user_data['Nama']."</td>";
        echo "<td>".$user_data['Email']."</td>";    
        echo "<td>".$user_data['Nomor_hp']."</td>";    
        echo "<td>".$user_data['Umur']."</td>";    
        echo "<td>".$user_data['Gender']."</td>";    
        echo "<td><a href='edit.php?ID=$user_data[ID]'>Edit</a> | <a href='delete.php?ID=$user_data[ID]'>Delete</a></td></tr>";        
    }
    ?>
    </table>
    <table width='70%' border=1>
        <a href="insert.php" style="font-size: 50px; text-decoration: none">Add Data</a><br/><br/>
    </table>
</body>
</html>