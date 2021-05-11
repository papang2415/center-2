<?php

require_once 'connect.php';

require_once 'header.php';

echo "<div class='container'>";

if (isset($_POST['delete'])) {
    $sql = "DELETE FROM users WHERE user_id=" . $_POST['userid'];
    if ($con->query($sql) === true) {
        echo "<div class='alert alert-success'>Successfully delete user</div>";
    }
}
?>

<?php
$sql = "SELECT * FROM users";
$result = $con->query($sql);

if ($result->num_rows > 0) {
    ?>
<br>
<!-- <input id="myInput" name='search' class="form-control me-2" type="search" placeholder="Search" aria-label="Search"> -->
<input class="form-control" id="myInput" type="text" placeholder="Search..">
<?php
"SELECT `user_id`, `firstname`, `lastname`, `address`, `contact`, `status` FROM `users` WHERE = 'dexter'";
    ?>
<br>
<h2>List of all Users</h2>
<table  class="table table-bordered table-striped">
<tr>
<td>Firstname</td>
<td>Lastname</td>
<td>Address</td>
<td>Contact</td>
<td>Status</td>
<td width="70px">Delete</td>
<td width="70px">EDIT</td>
</tr>
    <tbody id="myTable">
        <?php
while ($row = $result->fetch_assoc()) {
        echo "<form action='' method='POST'>"; //added
        echo "<input type='hidden' value='" . $row['user_id'] . "' name='userid' />"; //added
        echo "<tr>";
        echo "<td>" . $row['firstname'] . "</td>";
        echo "<td>" . $row['lastname'] . "</td>";
        echo "<td>" . $row['address'] . "</td>";
        echo "<td>" . $row['contact'] . "</td>";
        if ($row['status'] == 1) {
            $status = "In-Active";
        } else {
            $status = "Active";
        }
        echo "<td><a href='update_status.php?status=" . $row['status'] . "&id=" . $row['user_id'] . "'>" . $status . "</a></td>";
        echo "<td><input type='submit' name='delete' value='Delete' class='btn btn-danger' /></td>";
        echo "<td><a href='edit.php?id=" . $row['user_id'] . "' class='btn btn-info'>Edit</a></td>";
        echo "</tr>";
        echo "</form>"; //added
    }
    ?>
    </tbody>
</table>
<?php
} else {
    echo "<br><br>No Record Found";
}
?>
<script>
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable td").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>
</div>
