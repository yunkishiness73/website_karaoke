<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <!-- Meta, title, CSS, favicons, etc. -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" href="<?= base_url() ?>images/microphone.png" />

  <title>Karaoke Idol</title>

  <link href="<?= base_url() ?>/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet"> 
  <link href="<?= base_url() ?>vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="<?= base_url() ?>vendors/nprogress/nprogress.css" rel="stylesheet">
  <link href="<?= base_url() ?>vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
  <link href="<?= base_url() ?>build/css/custom.min.css" rel="stylesheet">

  <style>
    th, td {
      text-align: center;
    }
    h3 {
      margin-top: 2%;
      display: inline-block;
    }
    h1 { color: #ff7979; }
    span.date { margin-left: 40%; font-size: 17px}

    h3>span { border: 1px solid black; }

    hr { width: 50%; border: none; height: 1px; background-color: #95afc0;}
  </style>
</head>

<?php 
if(isset($_SESSION['admin']) == true) 
  $name = $_SESSION['admin'][0]['name'];
else 
  redirect('quanly_karaoke/logIn','refresh'); 
?>

<body class="nav-md">
  <div class="container body">
    <div class="main_container" >

      <?php include 'body_header.php' ?>
      
      <!-- page content -->
      <div class="card-deck right_col">
        <div class="table-responsive col-sm-12" style="text-align: center;">
         <h1 class="display-1">THỐNG KÊ DOANH THU NGÀY HIỆN TẠI</h1>
         <hr>
         <?php date_default_timezone_set('Asia/Ho_Chi_Minh'); ?>
         <span class="date"><?= date('l d/m/Y') ?></span>
         <br>
         <span class="date" style="font-weight: bold; font-size: 17px ">Tổng đơn hàng: <?= count($data) ?></span>
         <table class="table" style="margin: 2% auto; width: 40%;">
          <thead >
            <tr>
              <th>Mã hóa đơn</th>
              <th>Phòng</th>
              <th>Giờ vào</th>
              <th>Giờ ra</th>
              <th>Số giờ</th>
              <th>Tổng tiền</th>
            </tr>
          </thead>
          <tbody >
            <?php $total = 0; ?>
            <?php foreach ($data as $value): ?>
              <?php  $total += $value['tongtien']; ?>

              <tr>
                <td><?= $value['mahoadon'] ?></td>
                <td><?= $value['tenphong'] ?></td>
                <td><?= date('H:i', strtotime($value['checkin'])) ?></td>
                <td><?= date('H:i', strtotime($value['checkout'])) ?></td>
                <td><?= gmdate("H:i", round(abs(strtotime($value['checkout']) - strtotime($value['checkin'])))) ?></td>
                <td><?= number_format($value['tongtien']) ?> VNĐ</td>
              </tr>
            <?php endforeach ?>

          </tbody>
        </table>
        <div>
          <h3>Tổng doanh thu: <span><?= number_format($total) ?> VNĐ</span></h3>
        </div>

      </div>
    </div>

    <!-- footer content -->
    <?php include 'body_footer.php' ?>
    <script>

      function digitalBlock() {
        var d = new Date();
        h = d.getHours();
        m = d.getMinutes();
        s = d.getSeconds();
        suff = (24-h) < 12 ? ' PM' : ' AM';
        month = ['January','February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];
        curMonth = month[d.getMonth()];

        if( d.getDate() < 10)
          date = '0' + d.getDate() + " " + curMonth +  " " +d.getFullYear();
        else
          date = d.getDate() + " " + curMonth +  " " +d.getFullYear();

        if(s < 10) { s = '0' + s;}
        if(m < 10) { m = '0' + m;}
        if(h < 10) {h = '0' + h;}

        times = date + ' ' + h + ":" + m + ":" +s + suff;
        var object = document.getElementById('digital-block');
        object.innerHTML = times;
        setTimeout(digitalBlock, 1000);

      }

      digitalBlock();

    </script>
    <!-- /footer content -->
  </div>
</div>


<script src="<?= base_url() ?>vendors/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="<?= base_url() ?>vendors/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- FastClick -->
<script src="<?= base_url() ?>vendors/fastclick/lib/fastclick.js"></script>
<!-- NProgress -->
<script src="<?= base_url() ?>/vendors/nprogress/nprogress.js"></script>
<!-- bootstrap-progressbar -->
<script src="<?= base_url() ?>vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>

<!-- Custom Theme Scripts -->
<script src="<?= base_url() ?>build/js/custom.min.js"></script>


</body>
</html>
