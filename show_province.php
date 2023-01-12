<?php include 'header.php' ?>
<?php include 'banner.php' ?>
<?php include 'navbar.php' ?>
<?php include 'connect.php' ?>

<div class="container mt-5">
<h1>ข้อมูล Province</h1>
    <table class = "table table-bordered" >
        <tr>
            <th>ลำดับ</th>
            <th>รหัสจังหวัด</th>
            <th>ชื่อจังหวัด</th>
        </tr>
    
<?php
    $sql = "SELECT * FROM province";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
       ?>
       <tr>
        <td><?php echo $row['province_id']?></td>
        <td><?php echo $row['province_code']?></td>
        <td><?php echo $row['province_name']?></td>
       </tr>
       <?php
    }
    } else {
    echo "0 results";
    }

    mysqli_close($conn);
?>
 </table>
</div>

<?php include 'footer.php' ?>
</div>
</body>

</html>

