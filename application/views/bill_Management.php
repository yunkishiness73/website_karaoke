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
  <link href="<?= base_url() ?>build/css/jquery-ui.min.css" rel="stylesheet">
  <link href="<?= base_url() ?>build/css/custom.min.css" rel="stylesheet">


  <style>
    th, td {
      text-align: center;
    }

    h1 { color: #ff7979; }

    span.date { margin-left: 40%; font-size: 17px}

    .form-control { width: 8%; display: inline-block; }


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

      <div class="table-responsive col-sm-12" style="text-align: center;">
       <h1 class="display-1">QUẢN LÝ HÓA ĐƠN</h1>
       <hr>
       <?php date_default_timezone_set('Asia/Ho_Chi_Minh'); ?>
       <span class="date" style="font-weight: bold; font-size: 17px ">Xem: </span>
      <input type="input" class="form-control view-mode">
       <table class="table" style="margin: 2% auto; width: 50%;">
        <thead >
          <tr>
            <th>STT</th>
            <th>Ngày</th>
            <th>Thu ngân</th>
            <th>Mã hóa đơn</th>
            <th>Phòng</th>
            <th>Tổng tiền</th>
            <th></th>
          </tr>
        </thead>
        <tbody >

          <?php $count = 1; ?>
          <?php foreach ($bill as $val): ?>

            <tr>
              <td><?= $count++; ?></td>
              <td><?= date('d/m/Y H:i',strtotime($val['checkout'])) ?></td>
              <td><?= $val['name'] ?></td>
              <td><?= $val['mahoadon'] ?></td>
              <td><?= $val['tenphong'] ?></td>
              <td><?= number_format($val['tongtien']) ?> VNĐ</td>
              <td>

                <a href="<?= base_url($val['chitiet']) ?>" class="btn btn-info view-details">Xem chi tiết <i class="fa fa-eye"></i></a>
              </td>
            </tr>

          <?php endforeach ?>
        </tbody>
      </table>


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
  <script src="<?= base_url() ?>build/js/jquery-ui.min.js"></script>

  <script>

    link = '<?= base_url() ?>';

    $(function() {

      $('.view-mode').datepicker({
        dateFormat: "yy-mm-dd",

      })



      $('body').on('click', '.view-details', function(event) {
       event.preventDefault();
       window.open($(this).attr('href'), '_blank');

     });

      $('.view-mode').change(function(event) {

        _item = $(this).val();
        redir = 'http://localhost:8080/php/website_karaoke/quanly_karaoke/viewMode/'+ _item;

        window.open(redir,'_self');

      });


    });



  </script>


</body>
</html>
