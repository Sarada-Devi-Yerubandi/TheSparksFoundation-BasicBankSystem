<?php
    session_start();
    $con = mysqli_connect("localhost", "root", "", "bankdatabase");
    $sender_details = $_POST['sender_details'];
    $q = "SELECT * FROM customers where customer_email = '$sender_details'";
    $result=mysqli_query($con,$q);
    $_SESSION['sender_details'] = $sender_details;
?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
<title>Choose receiver</title>
<div class="row">
    <div class="col-md-2" ></div>
    <div class="col-md-8 p-2 mt-3">
        <h2 class="text-center bg-light">Sender details</h2>
        <table class="table" style = "background-color: rgba(175, 150, 150, 1)">
            <thead class="thead-dark">
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Balance amount</th>
                    </tr>
            </thead>
            <?php
                while ($row = mysqli_fetch_array($result)) {
                    $name = $row['customer_name'];
                    $email = $row['customer_email'];
                    $balance = $row['customer_balance'];
                    echo "<tr>
                        <td>$name</td>
                        <td>$email</td>
                        <td>$balance</td>
                        </tr>";
                }
            ?>
        </table>
    </div>
    <div class="col-md-2"></div>
    <h2 class="text-center bg-light mt-5">Select receiver</h2>
    <div class="container mt-5 p-5">
        <form class="d-flex align-items-center justify-content-center" action = "transfer_money.php" method="POST">
            <div class="form-group form-control-lg" style = "width:500px">
                <?php 
                    $sqll="SELECT * FROM customers where not customer_email ='$sender_details'";
                    echo "<select class='form-control' name = 'receiver_details' required>";
                    echo "<option value=''>Select receiver here...</option>";  
                    foreach ($con->query($sqll) as $row){
                        echo "<option value = $row[customer_email]>$row[customer_name]</option>";  
                    }
                    echo "</select>";
                ?>
            </div>
            <button type="submit" class="btn mb-2 text-dark" style = "background-color: rgba(175, 150, 150, 1);font-weight:bold;">Submit</button>
        </form>
    </div>
    <div class = "text-center">
            <a class="btn" href="choose_sender.php" role="button" style = "background-color: rgba(175, 150, 150, 1);font-weight:bold;">Back</a>
    </div>
    <div class="col-md-2"></div>
</div>