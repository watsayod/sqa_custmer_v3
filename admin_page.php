<?php
session_start();
if ($_SESSION['user_id'] == "") {
  echo "<script type=\"text/javascript\">";
  echo "alert(\"Please Login!\");";
  echo "window.history.back();";
  echo "</script>";

  exit();
}
if ($_SESSION['status'] != "admin") {
  echo "This page for Admin only!";
  exit();
}
?>
<!DOCTYPE html>
<html>
<?php
include('head.php');
include('header.php');
include('configdb.php');
?>
<style>
  .h-form .form-body .h-form-label {
    height: auto !important;
  }
</style>

<body>
  <?php

  $query = "SELECT * FROM answers order by id desc";
  $result = mysqli_query($conn, $query);
  ?>

  <div style="padding:10px;" align="right">
    <button id="exportExcel_Button" type="button" class="btn btn-success" onclick="exportExcel()">Export Excel</button>
    <a href="admin_login.php" id="logout_Button" value="submit" class="btn btn-outline-success">Logout</a>
  </div>

  <div style="overflow-x:auto;padding:10Px;">
    <table class="table table-hover table-striped table-bordered table-sm table-responsive" id="dtHorizontalVerticalExample">
      <!-- หัวข้อตาราง -->
      <tr align='center' bgcolor='#CCCCCC'>
        <td>id</td>
        <td>เวลาที่กรอกข้อมูล</td>
        <td>ชื่อบริษัท</td>
        <td>ชื่อผู้ใช้ข้อมูล</td>
        <td>ตำแหน่ง</td>
        <td>โทรศัพท์</td>
        <td>อีเมล</td>
        <td>Service</td>
        <td>Service อื่นๆ</td>
        <td>Project ที่มอบหมาย</td>
        <td>ข้อ 1.1</td>
        <td>ข้อ 1.2</td>
        <td>ข้อ 1.3</td>
        <td>ข้อ 1.4</td>
        <td>ข้อ 1.5</td>
        <td>ข้อ 2.1</td>
        <td>ข้อ 2.2</td>
        <td>ข้อ 2.3</td>
        <td>ข้อ 2.4</td>
        <td>ข้อ 2.5</td>
        <td>ข้อ 3.1</td>
        <td>ข้อ 3.2</td>
        <td>ข้อ 3.3</td>
        <td>ข้อ 3.4</td>
        <td>ข้อเสนอแนะ</td>
        <td>ลบข้อมูล</td>
      </tr>

      <?php
      while ($row = mysqli_fetch_array($result)) {
        echo "<tr>";
        echo "<td>" . $row["id"] .  "</td> ";
        echo "<td>" . $row["date_time"] .  "</td> ";
        echo "<td>" . $row["company_name"] .  "</td> ";
        echo "<td>" . $row["customer_name"] .  "</td> ";
        echo "<td>" . $row["customer_position"] .  "</td> ";
        echo "<td>" . $row["customer_telephone"] .  "</td> ";
        echo "<td>" . $row["customer_email"] .  "</td> ";
        echo "<td>" . $row["customer_service"] . "</td> ";
        echo "<td>" . $row["customer_service_a"] . "</td> ";
        echo "<td>" . $row["customer_project"] . "</td> ";
        echo "<td>" . $row["q1_1"] .  "</td> ";
        echo "<td>" . $row["q1_2"] .  "</td> ";
        echo "<td>" . $row["q1_3"] .  "</td> ";
        echo "<td>" . $row["q1_4"] .  "</td> ";
        echo "<td>" . $row["q1_5"] .  "</td> ";
        echo "<td>" . $row["q2_1"] .  "</td> ";
        echo "<td>" . $row["q2_2"] .  "</td> ";
        echo "<td>" . $row["q2_3"] .  "</td> ";
        echo "<td>" . $row["q2_4"] .  "</td> ";
        echo "<td>" . $row["q2_5"] .  "</td> ";
        echo "<td>" . $row["q3_1"] .  "</td> ";
        echo "<td>" . $row["q3_2"] .  "</td> ";
        echo "<td>" . $row["q3_3"] .  "</td> ";
        echo "<td>" . $row["q3_4"] .  "</td> ";
        echo "<td>" . $row["suggestions_detail"] .  "</td> ";
        //ลบข้อมูล
        echo "<td style='text-align: center;'><a href='admin_del.php?id=$row[0]'onclick=\"return confirm('คุณต้องการลบข้อมูลแถวนี้ใช่หรือไม่? !!!')\"><img src='assets/images/bin.png' style='width:25px;heigth:25px;' /></a></td> ";
        echo "</tr>";
      }
      echo "</table>";
      mysqli_close($conn);

      ?>
  </div>


  <script>
    function exportExcel() {
      window.location = './exportExcel.php';
    } //  return confirm('คุณต้องการลบข้อมูลแถวนี้ใช่หรือไม่? !!!');
  </script>


</body>

</html>