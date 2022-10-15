    <?php 
$name = $_POST['name'];
$date = $_POST['date'];
$gender = $_POST['male'];
$user = fopen("user.csv", "w") or die("Unable to open file!");

if (empty($_POST["submit"])) {
    echo "Could not insert data!";
} else {
    $file = fopen("user.csv", "a");
    $srt="name:".$name."~date:".$date;// create your string 
    echo fwrite($file, $srt);
    fclose($file);
}
if(isset($_POST["submit"])) {
 
print_r($name);
fwrite($user, $name);
fwrite($user, $date);
fwrite($user, $male);
fclose($user);
}else {
    die("Unable to display");
}
?>

