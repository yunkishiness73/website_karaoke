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
  <link href="<?= base_url() ?>vendors/iCheck/skins/flat/green.css" rel="stylesheet">
  <link href="<?= base_url() ?>vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
  <link href="<?= base_url() ?>build/css/custom.min.css" rel="stylesheet">

  <style>
    h4 {font-size: 30px;}
    h1 { text-align: center; font-family: Arial, Helvetica, sans-serif;  }
    .progress-bar {
      background-color: #26b99a;
    }
    .hide-tg { display: none; }
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
    <div class="main_container">

      <?php include 'body_header.php' ?>

      <!-- page content -->
      <div class="card-deck right_col">
        <h1 class="display-1" style="">DANH SÁCH PHÒNG</h1>
        <hr>
        <div class="row">
         <label >Phòng còn trống </label><span class="bg-info" style="width: 5%; height: 10px; display: inline-block; margin-left: .5%"></span>
         <label style="margin-left: 1%">Phòng đang sử dụng </label><span class="bg-danger" style="width: 5%; height: 10px; display: inline-block;  margin-left: .5%"></span> 
         <label style="margin-left: 1%">Phòng được đặt trước </label><span class="bg-success" style="width: 5%; height: 10px; display: inline-block; margin-left: .5%"></span> 

         <hr>
         <div class="row">
          <?php foreach ($room as $value): ?>

            <?php if($value['trangthai'] == 1 ) {?>

            <div class="card bg-danger text-white mb-3 col-sm-4" style="width: 24%; margin-bottom: 1%; margin-right: 1%; height: 18rem; text-align: center; box-shadow: 1px 2px 4px rgba(0, 0, 0, .5);">
              <?php } elseif($value['trangthai'] == 2) {?>
              <div class="card bg-success text-white mb-3 col-sm-4" style="width: 24%; margin-bottom: 1%; margin-right: 1%; height: 18rem; text-align: center; box-shadow: 1px 2px 4px rgba(0, 0, 0, .5);">
                <?php } else { ?>

                <div class="card bg-info text-white mb-3 col-sm-4" style="width: 24%; margin-bottom: 1%; margin-right: 1%; height: 18rem; text-align: center; box-shadow: 1px 2px 4px rgba(0, 0, 0, .5);">
                  <?php } ?>
                  <div class="progress" style="height: 5px;">
                    <div class="progress-bar" role="progressbar" style="width: 100%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                  <!--  <div style=""><button class="btn btn-warning" style="height: 10px;">Hủy</button></div> -->
                  <div class="card-body mb-3" >
                    <h3>Phòng <?= $value['tenphong'] ?></h3>
                    <p><?= $value['tenloai'] ?></p>
                  </div>
                  <div class="card-footer">
                   <?php if($value['trangthai'] == 0) {?>
                   <a href="<?= base_url() ?>quanly_karaoke/checkIn/<?= $value['maphong'] ?>" class="btn btn-primary checkIn">Đặt Phòng</a>
                   <a data-href="<?= $value['maphong'] ?>" class="btn btn-success pre-Booking">Đặt Trước</a>
                   <br>
                   <label style="display: none;">Chọn giờ đặt</label>
                   <input type="time" style="width: 40%; display: none;" class="time" >
                   <a data-href="<?= $value['maphong'] ?>" class="btn btn-success booking" style="display: none;">Xác nhận</a>

                   <?php } elseif($value['trangthai'] == 1) {?>
                   <a href="<?= base_url() ?>quanly_karaoke/viewDetail/<?= $value['maphong'] ?>" class="btn btn-success">Chi tiết</a>
                   <?php } elseif($value['trangthai'] == 2) {?>
                   <a href="<?= base_url() ?>quanly_karaoke/checkIn/<?= $value['maphong'] ?>" class="btn btn-primary checkIn">Đặt Phòng</a>
                   <a href="<?= base_url() ?>quanly_karaoke/cancelReservation/<?= $value['maphong'] ?>" class="btn btn-warning">Hủy Đặt Trước</a>
                   <?php } ?> 
                   <div style="margin-top: 15px; position: relative; width: 100%;">
                     <a data-href="<?= $value['maphong'] ?>" class="btn btn-success remove-room" style="position: absolute; right: -3%;"><i class="fa fa-remove"></i></a>
                   </div>
                 </div>

               </div>

             <?php endforeach ?>

             <div class="card bg-white text-white mb-3 col-sm-4" style="width: 24%; margin-bottom: 1%; margin-right: 1%; height: 18rem; text-align: center; box-shadow: 1px 2px 4px rgba(0, 0, 0, .5);">
              <div class="progress" style="height: 5px;">
                <div class="progress-bar" role="progressbar" style="width: 100%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
              <div class="card-body mb-3" >
                <label class="hide-tg" style="margin-top: 2%;">Chọn loại phòng</label>
                <select style="width: 30%;" class="hide-tg loaiphong">
                  <?php foreach ($typeRoom as $val): ?>
                    <option value="<?= $val['maloai'] ?>" style="width: 30%;" class="hide-tg"><?= $val['tenloai'] ?></option>
                  <?php endforeach ?>   
                </select> <br> <br>
                <button class="btn btn-danger hide-tg create-room">Tạo Phòng</button>
                <button class="btn btn-warning hide-tg cancel">Hủy</button>
              </div>
              <div class="card-footer">
               <button class="btn btn-danger add-room" style="width: 50%;">Tạo Phòng Mới <i class="fa fa-plus"></i></button>
             </div>

           </div>

         </div>
       </div>
     </div>
   </div> <!-- end content -->

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

<script>

  link = '<?= base_url() ?>';

  $(function() {

   $('body').on('click', '.pre-Booking', function(event) {
     $(this).hide();
     $(this).prev().hide();
     $(this).next().next().show();
     $(this).next().next().next().show();
     $(this).next().next().next().next().show();
     $(this).next().next().next().next().next().hide();

   });


   $('body').on('click', '.booking', function(event) {

    $(this).hide();
    $(this).prev().hide();

    _maphong = $(this).data('href');

    date = new Date();

    d = date.getDate();
    m = date.getMonth() + 1;
    y = date.getFullYear();
    h = date.getHours();
    min = date.getMinutes();

    currDate = y + '-' + m + '-' + d + ' ' + h + ":" + min;
    datetime = y + '-' + m + '-' + d + ' ' + $(this).prev().val();
    bookingTime = Date.parse(datetime);

    $.ajax({
      url: link + 'quanly_karaoke/preBooking',
      type: 'POST',
      dataType: 'json',
      data: {
        maphong: _maphong,
        checkin: datetime,
        dat_truoc: bookingTime
      },
    })
    .always(function(res) {
      if(typeof(res) === 'string') {
       alert(res);

     }

     location.reload();

   });


  });

   $('.time').keyup(function(event) {
    if(event.keyCode === 13) 
      $(this).next().click();
  });

   $('body').on('click', '.add-room', function(event) {
    $(this).hide();
    $('.hide-tg').show();

  });

   $('body').on('click', '.create-room', function(event) {
    $(this).hide();
    $('.hide-tg').hide();
    _loaiphong = $('.loaiphong').val();
    console.log(_loaiphong);
    $.post(link + 'quanly_karaoke/createNewRoom', {maloai: _loaiphong}, function(data) {
      if(data.length != 0) {
        alert(data);
      }
      location.reload();
    });

  });

   $('body').on('click', '.cancel', function(event) {
    $('.add-room').show();
    $('.hide-tg').hide();
  });


   $('body').on('click', '.remove-room', function(event) {

    e = confirm("Bạn có chắc muốn xóa phòng này?");
    if(e == true) {

      _remove = $(this).parent().parent().parent();

      $.post(link + 'quanly_karaoke/removeRoom', {maphong: $(this).data('href')}, function(data) {
        console.log(typeof data);        
        if((typeof data) === 'string' && data.length != 0)
          alert(data);
        else if(data.length == 0)
          _remove.remove();
      });
    }

  });




 });

</script>



</body>
</html>
