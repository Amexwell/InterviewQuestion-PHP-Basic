<?php
// Check if username was sent via POST
if (isset($_POST['username'])) {
    $username = $_POST['username'];

    // Check if the username is 'abc'
    if ($username === 'abc') {
        echo "<span style='color: green;'>Verified</span>";
    } else {
        echo "<span style='color: red;'>Error</span>";
    }
} else {
    echo "<span style='color: red;'>Error: No username received</span>";
}
?>
