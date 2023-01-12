<?php
include ("header.php");
include ("banner.php");
include ("navbar.php");
include ("connect.php");
?>

<div class = "container mt-5">
        <h2><center>ข้อมูล Customer </center></h2>
        <table class = "table table-bordered">
            <tr>
                <th>รหัสนักเรียน</th>
                <th>ชื่อนักเรียน</th>
                <th>กลุ่มการเรียน</th>
                <th>ระดับชั้น</th>
            </tr>
    <?php
    $sql = "SELECT * FROM customer";
    $result = mysqli_query($conn, $sql);
    
    if (mysqli_num_rows($result) > 0) {
      // output data of each row
      while($row = mysqli_fetch_assoc($result)) {
        
        ?>
            <tr>
                <td><?php echo $row['cus_id'] ?></td>
                <td><?php echo $row['cus_name'] ?></td>
                <td><?php echo $row['cus_address'] ?></td>
                <td><?php echo $row['cus_position'] ?></td>
                <td><?php echo $row['cus_salary'] ?></td>
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
</div>
<?php
include ("footer.php");
?>