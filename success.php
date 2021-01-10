<?php
    session_start();
    $con = mysqli_connect("localhost", "root", "", "bankdatabase");
    $sender_details = $_SESSION['sender_details'];
    $receiver_details = $_SESSION['receiver_details'];
    $transfer_amount = $_POST['amount'];
    //echo $receiver_details;
    //echo $sender_details;
    $q1 = "SELECT * from customers where customer_email = '$sender_details'";
    $result = mysqli_query($con,$q1);
    while ($row = mysqli_fetch_array($result)) {
        $name = $row['customer_name'];
        $email = $row['customer_email'];
        $sender_balance = $row['customer_balance'];
        //echo $sender_balance;
    }
    $q2 = "SELECT * from customers where customer_email = '$receiver_details'";
    $result2 = mysqli_query($con,$q2);
    while ($row = mysqli_fetch_array($result2)) {
        $name = $row['customer_name'];
        $email = $row['customer_email'];
        $receiver_balance = $row['customer_balance'];
        //echo $receiver_balance;
    }
    //echo $transfer_amount;
    if($sender_balance < $transfer_amount){
        echo '<script>
                alert("Insufficient balance");
                window.location.href="http://localhost/TheSparksFoundation/";
              </script>'; 
    }
    else{
        $sender_balance1 = $sender_balance - $transfer_amount;
        $receiver_balance1 = $receiver_balance + $transfer_amount;
        $sender_sql = "UPDATE customers SET customer_balance = '$sender_balance1' WHERE customer_email = '$sender_details'";
        $receiver_sql = "UPDATE customers SET customer_balance = '$receiver_balance1' WHERE customer_email = '$receiver_details'";
        //echo $sender_balance;
        //echo $receiver_balance;
        if ($con->query($sender_sql) === TRUE && $con->query($receiver_sql) === TRUE) {
            echo "<h1>Transaction successfull !</h1><br>";
            echo "<p>You will be redirected to homepage in 5 seconds....</p>";
        } else {
            echo "Error updating record: " . $con->error;
        }
        header( "refresh:5;http://localhost/TheSparksFoundation/index.php" );
    }
?>