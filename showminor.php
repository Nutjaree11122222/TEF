<?php include 'header.php' ?>
<?php include 'banner.php' ?>
<?php include 'navigator.php' ?>
<?php include 'connect.php' ?>

<div class = "container mt-5">
<h1>ข้อมูล Minor</h1>
    <table class = "table table-bordered">
        <tr>
            <th>รหัสสาขางาน</th>
            <th>ชื่อสาขางาน</th>
            <th>คีย์สาขาวิชา</th>
        </tr>
    
<?php
    $sql = "SELECT * FROM student3";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
       ?>
       <tr>
        <td><?php echo $row['minor_code']?></td>
        <td><?php echo $row['minor_name']?></td>
        <td><?php echo $row['major_id']?></td>
       </tr>
       <?php

        /*echo $row['student_id']. " - " . $row['name'];
        echo  "<br>";*/
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