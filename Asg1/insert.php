<html>
<head>
    <title>Add Users</title>
</head>
 
<body>
    <a href="index.php" style="font-size: 50px; text-decoration: none">Go to Home</a>
    <br/><br/>
 
    <form action="insert.php" method="post" name="form1">
        <table width="45%" border="0">
            <tr> 
                <td>ID</td>
                <td><input type="text" name="ID"></td>
            </tr>
            <tr> 
                <td>Nama</td>
                <td><input type="text" name="Nama"></td>
            </tr>
            <tr> 
                <td>Email</td>
                <td><input type="text" name="Email"></td>
            </tr><tr> 
                <td>Nomor_hp</td>
                <td><input type="text" name="Nomor_hp"></td>
            </tr><tr> 
                <td>Umur</td>
                <td><input type="text" name="Umur"></td>
            </tr><tr> 
                <td>Gender</td>
                <td><input type="text" name="Gender"></td>
            </tr>
            <tr> 
                <td></td>
                <td><input type="submit" name="Submit" value="Add" style="font-size: 50px; text-decoration: none"></td>
            </tr>
        </table>
    </form>
    
    <?php
    
    if(isset($_POST['Submit'])) {
        require('config.php');
        $ID = mysqli_real_escape_string($mysqli, $_POST['ID']);
        $Nama = $_POST['Nama'];
        $Email = $_POST['Email'];
        $Nomor_hp = $_POST['Nomor_hp'];
        $Umur = $_POST['Umur'];
        $Gender = $_POST['Gender'];
        
        $sql = "SELECT ID FROM db_webprog WHERE ID='$ID'";
        $result1 = mysqli_query($mysqli,$sql);

        if(mysqli_num_rows($result1) == 1){
            echo "User Failed To Be Added (Dupe ID).";
        }else if(mysqli_num_rows($result1) == 0){
            $result = mysqli_query($mysqli, "INSERT INTO db_webprog(ID,Nama,Email,Nomor_hp,Umur,Gender) VALUES('$ID', '$Nama','$Email','$Nomor_hp','$Umur','$Gender')");
            echo "User Has Been Added. <a href='index.php'>View Users</a>";
        }

        // $result = mysqli_query($mysqli, "INSERT INTO db_webprog(ID,Nama,Email,Nomor_hp,Umur,Gender) VALUES('$ID', '$Nama','$Email','$Nomor_hp','$Umur','$Gender')");
        // echo "User Has Been Added. <a href='index.php'>View Users</a>";


    }
    ?>
</body>
</html>