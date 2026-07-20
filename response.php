<?php

$name = $_POST['name'];
$email = $_POST['email'];
$age = $_POST['age'];

if (!empty($name) && filter_var($email, FILTER_VALIDATE_EMAIL) && $age >= 18)
{
    echo "<h2>Positive Response</h2>";
    echo "Form submitted successfully.<br><br>";
    echo "Name: " . htmlspecialchars($name) . "<br>";
    echo "Email: " . htmlspecialchars($email) . "<br>";
    echo "Age: " . htmlspecialchars($age);
}
else
{
    echo "<h2>Negative Response</h2>";

    if (empty($name))
    {
        echo "Name is required.<br>";
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL))
    {
        echo "Enter a valid email address.<br>";
    }

    if ($age < 18)
    {
        echo "Age must be 18 or above.<br>";
    }
}

?>