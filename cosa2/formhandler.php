<?php
if($_SERVER["REQUEST_METHOD"] == "POST") {

    $firstname = htmlspecialchars($_POST['firstname']);
    $firstname = htmlspecialchars($_POST['lastname']);
    $firstname = htmlspecialchars($_POST['gender']);

if (empty($firstname) || empty($lastname) || ($gender) == "none"){
    echo "Please fill out all fields.";
} else {
    echo "<h1>form Submitted Success!<h1>";
    echo "<h1><strong>First Name:!</strong>".$firstname."</p>";
    echo "<h1><strong>Last Name:!<?strong>".$firstanme."</p>";
    echo "<h1><strong>Gender:!<?strong>".$firstname."</p>";

}
} else {
    echo "Form was not submitted properly.";
}
?>