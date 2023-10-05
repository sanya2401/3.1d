<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

 $conn = new mysqli("localhost", "root", "", "feedback_form");
 // Check connection
 if ($conn->connect_error) {
 die("Connection failed: " . $conn->connect_error);
 }
 // Retrieve user inputs
 $name=$_POST["name"];
 $email = $_POST["email"];
 $rating = $_POST["rating"];
 $feedback = $_POST["feedback"];
 // Perform data validation
 if (empty($name) || empty($email) || empty($rating) ||
empty($feedback)) {
 die("All fields are required.");
 }
 // Insert data into the CUSTOMER table
 $sql = "INSERT INTO FEEDBACK (name, email, rating, feedback)
VALUES ('$name','$email', '$rating', '$feedback')";
 if ($conn->query($sql) === TRUE) {
 echo "Record inserted successfully.";
 } else {
 echo "Error: " . $sql . "<br>" . $conn->error;
 }
 // Close the database connection
 $conn->close();
}
?>
