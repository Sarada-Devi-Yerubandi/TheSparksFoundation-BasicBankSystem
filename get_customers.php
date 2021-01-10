<?php
    $con = mysqli_connect("localhost", "root", "", "bankdatabase");
?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<h1 class="text-center bg-light">Customers List</h1>
<title> Customers List </title>
<div class="row">
	<div class="col-md-2" ></div>
	<div class="col-md-8 p-2 mt-3">
        <table class="table " style = "background-color: rgba(175, 150, 150, 1)">
            <thead class="thead-dark">
                <tr>
                    <th>SNO</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Balance</th>
                </tr>
            </thead>
            <?php
                $q = mysqli_query($con, "SELECT * from customers");
                while ($row = mysqli_fetch_array($q)) {
                    $serial = $row['sno'];
                    $name = $row['customer_name'];
                    $email = $row['customer_email'];
                    $balance = $row['customer_balance'];
                    echo "<tr>
                            <td>$serial </td>
                            <td>$name</td>
                            <td>$email</td>
                            <td>$balance</td>
                        </tr>";
                }
            ?>
		</table>
	</div>
	<div class="col-md-2"></div>
</div>
<div class = "text-center">
    <a class="btn btn-dark" href="index.php" role="button" style = "background-color: rgba(175, 150, 150, 1)"><i class="fa fa-home text-dark" style="font-size:20px;"></i></a>
</div>