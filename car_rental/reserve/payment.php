
<?php include('../assets/login_require.php');?>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>payment</title>
<link rel="stylesheet" href="assets/css/payment.css">
<?php $id = $_GET['Book_ID'];?>
<div class="container" >
    <div class="rectangle">
        <h2>PAYMENT</h2>
        <img src="assets/img/qrcode.jpg" alt="qrcode" class="image">
    </div>
    <div class="input-field">
        <form action="assets/payment_update.php?Book_ID=<?php echo $id?>" method="POST">
            <input type="submit" class="submit" value="DONE">
        </form>
    </div>
</div>