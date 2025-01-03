<?php  
    include "conn.php";
    
    $recipient_name = $_POST['recipient_name'];
    $message = $_POST['message'];

    $sql = "INSERT INTO messages (recipient_name, message) VALUES (?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('ss', $recipient_name, $message);

    if ($stmt->execute()) {
        $status = "success";
    } else {
        $status = "error";
    }

    $stmt->close();
    $conn->close();

    header('Location: home.php?status=' . $status);
    exit;
?>