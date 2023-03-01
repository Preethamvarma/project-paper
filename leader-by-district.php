<?php
require_once "db.php";
$leader_id = $_POST["leader_id"];
$result = mysqli_query($conn,"SELECT * FROM district where leader_id = $leader_id");
?>
<option value="">Select from list</option>
<?php
while($row = mysqli_fetch_array($result)) {
?>
<option value="<?php echo $row["id"];?>"><?php echo $row["name"];?></option>
<?php
}
?>