<?php
# Establish connection
include 'onestop.php';

# Define the query string for update
$sql = "UPDATE sign_up_details SET nname='new_user' WHERE nname='user'";

# Execute the update query
if ($conn->query($sql) === TRUE) {
    echo "Records updated successfully";
} else {
    echo "Error updating records: " . $conn->error;
}

# Disconnect
mysqli_close($conn);
?>