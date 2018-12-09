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

    h1 { color: #ff7979; margin-top: 5%; text-align: center;}
    hr { width: 50%; border: none; height: 1px; background-color: #95afc0; }

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
      <div class="right_col">
        <h1>THỐNG KÊ DOANH THU THEO THÁNG TRONG NĂM</h1>
        <hr>
        <div style="width: 70%; margin: 5% auto 0;">
         <canvas id="myChart" width="500" style="display: block; width: 500px;" ></canvas>
       </div>

     </div>


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

<!--  <script src="<?= base_url() ?>/chartjs/chart.min.js"></script> -->
<script src="<?= base_url() ?>/Chart.js/dist/Chart.min.js"></script>


<script>

  $(function() {
    link = '<?= base_url() ?>';

    $.ajax({
      url: link + 'statistics/getDataByMonth',
      type: 'POST',
      dataType: 'json',
    })

    .always(function(data) {
      var total = [];
      var month = [];
      for(var i in data) {
        total.push(data[i].total);
        month.push("Tháng: " +data[i].month);
      }
      console.log(total);
      console.log(month);

      var data = {

        labels : month,
        datasets: [
        {

          label: 'Tổng doanh thu',
          backgroundColor: '#4b7bec',
          hoverBackgroundColor: 'rgba(255,99,132,0.6)',
          hoverBorerColor: 'rgba(255,99,132,0.6)',
          borderWidth: '4',
          data: total
        }

        ]
      };

      var ctx = $('#myChart');
      var barGraph = new Chart(ctx, {
        type: 'bar',
        data: data
      });

    });
  });

</script>




</body>
</html>
