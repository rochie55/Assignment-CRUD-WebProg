<?php
include_once("config.php");
 
if(isset($_POST['update']))
{	
    $ID = $_POST['ID'];
    $Nama = $_POST['Nama'];
    $Email = $_POST['Email'];
    $Nomor_hp = $_POST['Nomor_hp'];
    $Umur = $_POST['Umur'];
    $Gender = $_POST['Gender'];

    $result = mysqli_query($mysqli, "UPDATE db_webprog SET Nama='$Nama',Email='$Email',Nomor_hp='$Nomor_hp',Umur='$Umur',Gender='$Gender' WHERE ID=$ID");
    
    header("Location: index.php");
}
?>

<?php
$ID = $_GET['ID'];
 
$result = mysqli_query($mysqli, "SELECT * FROM db_webprog WHERE ID=$ID");
 
while($user_data = mysqli_fetch_array($result))
{
    $Nama = $user_data['Nama'];
    $Email = $user_data['Email'];
    $Nomor_hp = $user_data['Nomor_hp'];
    $Umur = $user_data['Umur'];
    $Gender = $user_data['Gender'];
}
?>
<html>
<head>	
    <title>Edit User Data</title>
</head>
 
<body>
    <a href="index.php">Home</a>
    <br/><br/>
    
    <form name="update_user" method="post" action="edit.php">
        <table border="0">
            <tr> 
                <td>Nama</td>
                <td><input type="text" name="Nama" value=<?php echo $Nama;?>></td>
            </tr>
            <tr> 
                <td>Email</td>
                <td><input type="text" name="Email" value=<?php echo $Email;?>></td>
            </tr>
            <tr> 
                <td>Nomor_hp</td>
                <td><input type="text" name="Nomor_hp" value=<?php echo $Nomor_hp;?>></td>
            </tr>
            <tr> 
                <td>Umur</td>
                <td><input type="text" name="Umur" value=<?php echo $Umur;?>></td>
            </tr>
            <tr> 
                <td>Gender</td>
                <td><input type="text" name="Gender" value=<?php echo $Gender;?>></td>
            </tr>
            <tr>
                <td><input type="hidden" name="ID" value=<?php echo $_GET['ID'];?>></td>
                <td><input type="submit" name="update" value="Update"></td>
            </tr>
        </table>
    </form>
</body>
</html>
