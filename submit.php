<?PHP
session_start();
if (isset($_POST['Submit1'])) {
$username = $_POST['username'];

if ($username == "bi") {

header('location:save.php?case=bi');
}
else {

header('location:save.php?case=error');
}
}
?>
