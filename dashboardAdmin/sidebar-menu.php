<?php if($_SESSION['role'] == "admin"){?>
<li class="active"><a href="bookings.php">Bookings</a></li>
<li><a href="#exampledropdownDropdown" aria-expanded="false" data-toggle="collapse">Accounts</a>
    <ul id="exampledropdownDropdown" class="collapse list-unstyled ">
        <li><a href="#">User</a></li>
        <li><a href="#">Vendor</a></li>
        <li><a href="index.php">Admin</a></li>
    </ul>
</li>
<li><a href="data_verification.php">Data Verification</a></li>
<?php } ?>

<?php if($_SESSION['role'] == "user"){?>
<li class="active"><a href="bookings.php">Bookings</a></li>
<li><a href="#exampledropdownDropdown" aria-expanded="false" data-toggle="collapse">Accounts</a>
    <ul id="exampledropdownDropdown" class="collapse list-unstyled ">
        <li><a href="#">User</a></li>
        <li><a href="#">Vendor</a></li>
        <li><a href="index.php">Admin</a></li>
    </ul>
</li>
<li><a href="data_verification.php">Data Verification</a></li>
<?php } ?>