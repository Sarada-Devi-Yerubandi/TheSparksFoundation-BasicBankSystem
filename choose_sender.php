<?php
    $con = mysqli_connect("localhost", "root", "", "bankdatabase");
?>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<title>Choose Sender </title>
<body">
    <h1 class="text-center bg-light"> Select sender </h1>
    <div class="container my-4">
            <div class="container mt-5 p-5" style="height:350px">
                <form class="d-flex align-items-center justify-content-center" action = "choose_receiver.php" method="POST">
                    <div class="form-group form-control-lg" style = "width:500px">
                        <?php 
                            $sqll="SELECT * FROM customers";
                            echo "<select class='form-control' name = 'sender_details' required>";
                            echo "<option value=''>Select sender here...</option>";  
                            foreach ($con->query($sqll) as $row){
                                echo "<option value = $row[customer_email]>$row[customer_name]</option>";  
                            }
                            echo "</select>";
                        ?>
                    </div>
                    <button type="submit" class="btn mb-2 text-dark" style = "background-color: rgba(175, 150, 150, 1);font-weight:bold;">
                        Submit
                    </button>
                </form>
            </div>
    </div>
    <div class = "text-center">
        <a class="btn btn-dark" href="index.php" role="button" style = "background-color: rgba(175, 150, 150, 1)">
            <i class="fa fa-home text-dark" style="font-size:20px;"></i>
        </a>
    </div>
</body>