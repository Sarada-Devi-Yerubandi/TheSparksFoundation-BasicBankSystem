<?php
    session_start();
    $con = mysqli_connect("localhost", "root", "", "bankdatabase");
    $sender_details = $_SESSION['sender_details'];
    //echo $sender_details;
    $receiver_details = $_POST['receiver_details'];
    //echo $receiver_details;
    $_SESSION['receiver_details'] = $receiver_details;
?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
<div class="row">
    <div class="col-md-2"></div>
    <div class="col-md-8 p-2 mt-3">
        <h2 class="text-center bg-light">Enter amount</h2>
        <form class="d-flex align-items-center justify-content-center mt-5" action = "success.php" method="POST">
            <div class="form-group form-control-lg" style = "width:500px">
                <div class="form-group">
                    <input type="number" class="form-control" placeholder="Enter amount" name="amount">
                </div>
            </div>
            <button type="submit" class="btn mb-2" style = "background-color: rgba(175, 150, 150, 1);font-weight:bold;">Transfer</button>
        </form>
        <div class = "text-center">
            <a class="btn text-dark" href="choose_sender.php" role="button" style = "background-color: rgba(175, 150, 150, 1);font-weight:bold;">Back</a>
        </div>
    </div>
    <div class="col-md-2"></div>
</div>