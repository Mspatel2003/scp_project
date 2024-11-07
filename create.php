<?php
include('includes/db.php');

// Check if form is submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $scp_number = $_POST['scp_number'];
    $object_class = $_POST['object_class'];
    $containment_procedures = $_POST['containment_procedures'];
    $description = $_POST['description'];

    // Insert new SCP record into the database
    $sql = "INSERT INTO scp_entries (scp_number, object_class, containment_procedures, description) 
            VALUES ('$scp_number', '$object_class', '$containment_procedures', '$description')";

    if ($conn->query($sql) === TRUE) {
        echo "<div class='alert alert-success'>New SCP Record Added Successfully!</div>";
    } else {
        echo "<div class='alert alert-danger'>Error: " . $conn->error . "</div>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create SCP Record</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1 class="my-4">Create New SCP Record</h1>
        <form method="POST" action="create.php">
            <div class="form-group">
                <label for="scp_number">SCP Number</label>
                <input type="text" class="form-control" id="scp_number" name="scp_number" required>
            </div>
            <div class="form-group">
                <label for="object_class">Object Class</label>
                <input type="text" class="form-control" id="object_class" name="object_class" required>
            </div>
            <div class="form-group">
                <label for="containment_procedures">Containment Procedures</label>
                <textarea class="form-control" id="containment_procedures" name="containment_procedures" rows="4" required></textarea>
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <textarea class="form-control" id="description" name="description" rows="4" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Create SCP</button>
        </form>
    </div>
</body>
</html>

<?php $conn->close(); ?>
