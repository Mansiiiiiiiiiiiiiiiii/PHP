<?php 
$insert = false;
if (isset($_POST['fname'])) {
    $submit = true;
    $server = "localhost";
    $username = "root";
    $password = "password";
    $con = mysqli_connect($server, $username, $password);

    if (!$con) {
        die("Connection to this database failed due to: " . mysqli_connect_error());
    }

    $fname = $_POST['fname'] ?? '';
    $lname = $_POST['lname'] ?? '';
    $Email = $_POST['Email'] ?? '';
    $Phone = $_POST['Phone'] ?? '';
    $Date_of_Birth = $_POST['Date_of_Birth'] ?? '';
    $Will_you_be_requiring_any_of_the_following = $_POST['Will_you_be_requiring_any_of_the_following'] ?? '';
    $Comments = $_POST['Comments'] ?? '';

    // Validate Date_of_Birth
    if (empty($Date_of_Birth)) {
        die("Error: Date of Birth cannot be empty.");
    }
    var_dump($Date_of_Birth);
    
    

    // Prepare and execute the SQL statement
    $stmt = $con->prepare("INSERT INTO trip.bihar (fname, lname, Email, Phone, Date_of_Birth, Will_you_be_requiring_any_of_the_following, Comments, date) 
    VALUES (?, ?, ?, ?, ?, ?, ?, CURRENT_TIMESTAMP)");
    $stmt->bind_param("sssssss", $fname, $lname, $Email, $Phone, $Date_of_Birth, $Will_you_be_requiring_any_of_the_following, $Comments);
    // Check and execute

    if ($stmt->execute()) {
        // echo "Successfully Inserted";
        $insert = true;
    } else {
        echo "ERROR: " . $stmt->error;
    }
    
    

    $stmt->close();
    $con->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Travel Form</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400..700&family=Kablammo&family=Playwrite+PE:wght@100..400&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400..700&family=DynaPuff:wght@400..700&family=Kablammo&family=Playwrite+PE:wght@100..400&display=swap" rel="stylesheet">  
<link rel="stylesheet" href="style.css">
</head>
<body>
    <img src="madhubani.png" alt="bihar" class="Bihar">
    <div class="container">
        <h1><b>Welcome to JECRC Bihar Trip form</b></h1>
        <?php if ($insert): ?>
            <p class="msg">Thanks for submitting your form. We are happy to see you joining us for Bihar trip.</p>
        <?php endif; ?>
        <p><b>Enter your details and submit this form to confirm your participation in this trip</b></p>
        <br>
        <form action="db.php" method="post">
            <label for="name"><b>Name</b></label>
            <input type="text" name="fname" id="fname" placeholder="First"  >
            <input type="text" name="lname" id="lname" placeholder="Last" >
            <br>
            <label for="Email"><b>Email</b></label>
            <input type="email" name="Email" id="Email" required>
            <br>
            <label for="number"><b>Phone</b></label>
            <br>
            <input type="number" placeholder="### ### ####"  id="number" required name="Phone">
            <br>
            <label for="Dob" ><b>Date of Birth</b></label>
            <br>
            <input type="date" name="Date_of_Birth" id="Dob" required>

    <br>
    <p><b>Will you be requiring any of the following</b></p>
    <input type="radio" name="Will_you_be_requiring_any_of_the_following" value="1" required>
    <label for="required"><b>Chaperon</b></label>
    <br>
    <input type="radio" name="Will_you_be_requiring_any_of_the_following" value="2">
    <label for="required"><b>Special Seating</b></label>
    <br>
    <input type="radio" name="Will_you_be_requiring_any_of_the_following" value="3">
    <label for="required"><b>Special diet</b></label>
    <br>
    <input type="radio" name="Will_you_be_requiring_any_of_the_following" value="4">
    <label for="required"><b>Handicapped accommodation</b></label>
    <br>
    <input type="radio" name="Will_you_be_requiring_any_of_the_following" value="5">
    <label for="required"><b>Others</b></label>
            <br>
            <label for="comments"><b>Comments</b></label>
            <br>
            <textarea name="Comments" id="comments" rows="10" cols="50"></textarea>
            <br>
            <button type="submit" class="button"><b>SEND</b></button>
        </form>
    </div>
    <script src="index.js"></script>
</body>
</html>
