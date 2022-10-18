    <?php 
$name = $_POST['name'];
$email = $_POST['email'];
$date = $_POST['date'];
$gender = $_POST['gender'];
$country = $_POST['country'];


if (empty($_POST["submit"])) {
    echo "Could not insert data!";
} else {
    $file = fopen("user_data.csv", "a");
    $srt="Name:".$name."~Email:".$email . "~Date of Birth:".$date ."~Gender:".$gender ."~Country:".$country;// creating string
    echo fwrite($file, $srt);
    fclose($file);
}
if(isset($_POST["submit"])) {
 
print_r(" Name: " . $name);
print_r("<br> Email: " . $email);
print_r("<br> Date of Birth: " . $date);
print_r("<br> Country: " . $country);
print_r("<br> Gender: " . $gender);

}else {
    die("Unable to display");
}
?>

