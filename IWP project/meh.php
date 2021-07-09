<?php
$nameErr = $emailErr = $genderErr = $dobErr =$idenErr = $addressErr = $salaryErr = $loanErr = $websiteErr = "";
$name = $email = $gender = $dob =$iden = $address = $salary = $loan = $website = "";


if ($_SERVER["REQUEST_METHOD"] == "POST") {
if (empty($_POST["name"])) {
$nameErr = "Name is required";
} else {
$name = test_input($_POST["name"]);
if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
$nameErr = "Only letters and white space allowed";
}
}
if (empty($_POST["email"])) {
$emailErr = "Email is required";
} else {
$email = test_input($_POST["email"]);
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
$emailErr = "Invalid email format";
}
}
if (empty ($_POST["gender"])) {
$genderErr = "Gender is required";
} else {
$gender = test_input($_POST["gender"]);
}
if (empty ($_POST["dob"])){
$dobErr = "Date of Birth is required";
} else {
$dob = test_input($_POST["dob"]);
}
if (empty ($_POST["address"])){
$addressErr = "Address is required";
} else {
$address = test_input($_POST["address"]);
}
if (empty ($_POST["iden"])){
$idenErr = "Adhaar no. is required";
} else {
$iden = test_input($_POST["iden"]);
if (!preg_match('/^[0-9]{0,12}$/', $iden)) {
$idenErr = " Enter Only 12 numbers on you Adhaar ID";
}
}
if (empty ($_POST["salary"])){
$salaryErr = "Salary is required";

} else {
$salary = test_input($_POST["salary"]); if (!preg_match('/^[0-9]*$/', $salary)) {
$salaryErr = "Only numbers are allowed";
}
}
if (empty ($_POST["loan"])){
$loanErr = "Loan amount is required";
} else {
$loan = test_input($_POST["loan"]); if (!preg_match('/^[0-9]*$/', $loan)) {
$loanErr = "Only numbers are allowed";
}
}

}
function test_input($data) {
$data = trim($data);
$data = stripslashes($data);
$data = htmlspecialchars($data); return $data;
}
?>
The code below body tag
</body>
<?php
echo "<h4>$name</h4>"; echo "<br>";

echo "The amount of salary entered <h4>₹$salary</h4>";
echo "<br>";


echo "Loan amount requested <h4>₹$loan</h4>";
echo "<br>";


if ($loan<=$salary*10){
echo '<span class="correct">You are eligible for the loan.</span>';
} else {
echo '<span class = "error">You are not eligible for the loan.</span>';
}
?>
<ul>
<li>Sent file: <?php echo $_FILES['file']['name']; ?>
<li>File size: <?php echo $_FILES['file']['size']; ?>
<li>File type: <?php echo $_FILES['file']['type']; ?>
</ul>
<?php
$image=$_FILES["file"]["name"];
$img="upload/".$image; echo'<img src="'.$img.'">';
?>
<h4>Maximum Loan Amount applicable: ₹ <?php echo ($salary*10)?></h4>
