<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transaction History</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/table.css">
    <link rel="stylesheet" type="text/css" href="css/navbar.css">
</head>

<body style="background-color : #ff3333">
    <span><h1 style="background-color: black "><img src="mainlogo.jpg" style="width:40px;height:39px;" align="left" class="profileimage"><span style="color:#ff3333 " text-align: right;>&nbsp;PEACE BANK</span>&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp  &nbsp &nbsp&nbsp &nbsp&nbsp &nbsp

 <a href="index.php" style="font-size: 25px;"><span style="color:#ff3333 " text-align: right;>&nbsp;HOME</span></a>&nbsp &nbsp
 <a href="transfermoney.php" style="font-size: 25px;"><span style="color:#ff3333 ">CUSTOMERS</span></a>&nbsp &nbsp
 <a href="transactionhistory.php" style="font-size: 25px;"><span style="color:#ff3333 ">HISTORY</span></a>&nbsp &nbsp
 <a href="https://www.thesparksfoundationsingapore.org/" style="font-size: 25px;"><span style="color:#ff3333 ">ABOUT</span></a>&nbsp &nbsp</h1></span>
    

    <div class="container">
        <h2 class="text-center pt-4" style="color : black;">Transaction History</h2>
        
       <br>
       <div class="table-responsive-sm">
    <table class="table table-hover table-striped table-condensed table-bordered">
        <thead style="color : black;">
            <tr>
                <th class="text-center">S.No.</th>
                <th class="text-center">Sender</th>
                <th class="text-center">Receiver</th>
                <th class="text-center">Amount</th>
                <th class="text-center">Date & Time</th>
            </tr>
        </thead>
        <tbody>
        <?php

            include 'config.php';

            $sql ="select * from transaction";

            $query =mysqli_query($conn, $sql);

            while($rows = mysqli_fetch_assoc($query))
            {
        ?>

            <tr style="color : black;">
            <td class="py-2"><?php echo $rows['sno']; ?></td>
            <td class="py-2"><?php echo $rows['sender']; ?></td>
            <td class="py-2"><?php echo $rows['receiver']; ?></td>
            <td class="py-2"><?php echo $rows['balance']; ?> </td>
            <td class="py-2"><?php echo $rows['datetime']; ?> </td>
                
        <?php
            }

        ?>
        </tbody>
    </table>

    </div>
</div>
<footer class="text-center mt-5 py-2">
            <h1 style="background-color: black"><span style="color: "><span style="color: #ff3333"><img src="mainlogo.jpg" style="width:40px;height:39px;" align="left" class="profileimage"><center>©2021 Made by AyyappaReddy. The Sparks Foundation</center><SPAN style="font-size: 8px;"></SPAN></span></h1>
</body>
</footer>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>