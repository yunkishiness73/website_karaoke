<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <!-- Meta, title, CSS, favicons, etc. -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" href="<?= base_url() ?>images/microphone.png"/>

  <title>Karaoke Idol</title>
  
  <link href="<?= base_url() ?>/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet"> 
  <link href="<?= base_url() ?>vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="<?= base_url() ?>vendors/nprogress/nprogress.css" rel="stylesheet">
  <link href="<?= base_url() ?>vendors/iCheck/skins/flat/green.css" rel="stylesheet">
  <link href="<?= base_url() ?>vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
  <link href="<?= base_url() ?>build/css/custom.min.css" rel="stylesheet">
  
  <link href="<?= base_url() ?>build/css/style.css" rel="stylesheet">


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
      <!-- top navigation -->

      <!-- /top navigation -->

      <!-- page content -->

      <div class="container-fluid mt-2 pt-2 right_col">
        <div class="col-sm-5">
          <div class="" style="text-align: center;">
            <h1 class="display-4">Quản Lý Đặt Phòng</h1>
            <hr class="m-y-md">
          </div>

          <form action="<?= base_url(); ?>quanly_karaoke/printBill" class="printBill" method="post" enctype="multipart/form-data">

            <fieldset class="form-group">
              <label>Phòng</label>
              <input type="number" class="maphong form-control" name="" id="" value="<?= $maphong ?>" disabled>              
            </fieldset>

            <fieldset class="form-group">
              <label>Tên phòng</label>
              <input type="text" class="form-control" name="" id="" value="<?= $roomDetails[0]['tenphong'] ?>" disabled>
            </fieldset>


            <fieldset class="form-group">
              <label>Loại phòng</label>
              <input type="text" class="form-control" name="" id="" value="<?= $roomDetails[0]['tenloai'] ?>" disabled>
            </fieldset>

            <fieldset class="form-group">
              <label>Giờ đặt</label>
              <?php date_default_timezone_set('Asia/Ho_Chi_Minh'); ?>
              <input type="text" class="form-control" name="" id="" value="<?= date('G:i', strtotime($billDetails[0]['checkin'])) ?>" disabled>
            </fieldset>

            <fieldset class="form-group">
              <label>Tiền dịch vụ</label>
              <input type="text" class="form-control" id="service-Price" disabled value="0">
            </fieldset>

            <fieldset class="form-group">
              <label>Tiền giờ</label>
              <input type="text" class="form-control" id="room-Price" disabled value="0">
            </fieldset>

            <fieldset class="form-group">
              <label>Phụ thu</label>
              <input type="text" class="form-control" id="surcharge" value="0">
            </fieldset>

            <fieldset class="form-group">
              <label>Tổng tiền</label>
              <input type="text" class="form-control" id="total-Price" disabled value="0">
            </fieldset>

            <fieldset class="item form-group">
              <label>Tiền khách đưa</label>
              <input type="text" class="form-control tien-khach-dua" name="tien_khach_dua" value="0" required data-validate-minmax="10,100">
            </fieldset>

            <fieldset>
              <div class="row" style="text-align: center;">
                <div class="col-sm-6">
                  <input type="submit" value="In hóa đơn" class="check btn btn-success" style="width: 100%; display: none;">
                </div>
                <div class="col-sm-6">
                  <a data-href="<?= $maphong ?>" class="btn btn-danger btn-pay" style="display: inline-block; width: 100%;">Thanh toán</a>
                </div>

          </div>
        </fieldset>

      </form> 

    </div> <!-- hết cột trái -->

    <div class="col-sm-7" >
      <div style="text-align: center;">
        <h1 class="display-4">Phục vụ</h1>
        <hr class="m-y-md">
      </div>


      <div class="table-responsive col-sm-12" >
        <div class="row col-sm-12" style="overflow-y: scroll; max-height: 450px;">
          <table class="table">
            <thead>
              <tr>
                <th colspan="2">Sản phẩm</th>
                <th>Đơn vị tính</th>
                <th>Giá</th>
                <th>Số lượng</th>
              </tr>
            </thead>
            <tbody >
              <?php foreach ($menu as $value): ?>

               <tr>
                <td colspan="2" class="tenmonan"><?= $value['tenmonan'] ?></td>
                <td class="donvitinh"><?= $value['donvitinh'] ?></td>
                <td class="giatien"><?= $value['giatien'] ?></td>
                <td style="width: 20%;"><input type="text" class="count form-control" value="1" ></td>
                <td>
                 <a data-href="<?= $value['mathucdon'] ?>" class="btn btn-success btn-addDish" style="display: inline-block; height: 28px; "><i class="fa fa-plus"></i></a>
               </td>
             </tr>      

           <?php endforeach ?>

         </tbody>
       </table>
     </div>


     <h3>Dịch vụ đang dùng</h3>
     <hr>
     <div class="row col-sm-12" style="overflow-y: scroll; max-height: 300px;">

      <table class="table">
        <thead>
          <tr>
            <th colspan="2">Sản phẩm</th>
            <th>Đơn vị tính</th>
            <th>Số lượng</th>
            <th>Giá</th>  
            <th></th>
          </tr>
        </thead>
        <tbody class="add-menu-view">

          <?php foreach ($details as $value): ?>
            <tr>
              <td colspan="2" ><?= $value['tenmonan'] ?></td>
              <td ><?= $value['donvitinh'] ?></td>
              <td>
                <input type="text" placeholder="Số lượng" value="<?= $value['soluong'] ?>" style="width: 20%; display: none;" class="show-tg form-control soluong">
                <span class="hidden-tg "><?= $value['soluong'] ?></span>
              </td>
              <td ><?= $value['dongia'] ?></td>

              <td>
                <a data-href="<?= $value['mathucdon'] ?>" class="btn btn-warning btn-edit"><i class="fa fa-pencil"></i></a>
                <a data-href="<?= $value['mathucdon'] ?>" class="btn btn-danger btn-remove"><i class="fa fa-remove"></i></a>
                <a data-href="<?= $value['mathucdon'] ?>" class="btn btn-success btn-save"  style="display: none"><i class="fa fa-floppy-o"></i></a>
              </td>
            </tr>      
          <?php endforeach ?>
        </tbody>

      </table>

    </div>
  </div>
</div> <!-- hết cột phải -->
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

<script>

  link = '<?= base_url() ?>';

  function loadAjax() {
    $.post(link + 'quanly_karaoke/servicePrice',{maphong: $('.maphong').val()}, function(data) {
      $('#service-Price').val(data);
    });
  }

    $(document).ready(function(){

      loadAjax();

      $('body').on('click', '.btn-addDish', function(event) {

        var _id = $(this).data('href');
        var tenmonan = $(this).parent().prev().prev().prev().prev().html();
        var donvitinh = $(this).parent().prev().prev().prev().html();
        var soluong = $(this).parent().prev().find('.count').val();
        var giatien = $(this).parent().prev().prev().html();


        console.log("mã thực đơn" +_id);
        console.log("mã phòng" +$('.maphong').val());
        console.log('tên món ăn' +tenmonan);
        console.log('đơn vị tính: ' +donvitinh);
        console.log('số lượng'+soluong);
        console.log('giá tiền' +giatien);

        $.ajax({
          url: link + 'quanly_karaoke/addDishByAjax',
          type: 'POST',
          dataType: 'json',
          data: {
            count: soluong,
            maphong: $('.maphong').val(),
            mathucdon: _id
          },
        })
        .done(function() {
          console.log("success");
        })
        .fail(function() {
          console.log("error");
        })
        .always(function(res) {
          
          if(res == 1) {
            content  = '<tr>';
            content += '<td colspan="2">'+ tenmonan + '</td>';
            content += ' <td >'+ donvitinh +'</td>';
            content += ' <td><input type="text" placeholder="Số lượng" value="'+ soluong +'" style="width: 20%; display: none;" class="show-tg form-control"><span class="hidden-tg"> ' + soluong + '</span></td>';
            content += '<td>'+ giatien*soluong +'</td>';
            content += '<td>';
            content += '<a data-href="'+ _id +'" class="btn btn-warning btn-edit""><i class="fa fa-pencil"></i></a>';
            content += '<a data-href="'+ _id +'" class="btn btn-danger btn-remove"><i class="fa fa-remove"></i></a>';
            content += '<a data-href="'+ _id +'" class="btn btn-success btn-save" style="display: none"><i class="fa fa-floppy-o"></i></a>';
            content += '</td>';
            content += '</tr>';

            $('.add-menu-view').append(content);

            $('.show-tg').on('keyup', function(event){
              if(event.keyCode === 13 || event.which === 13) {
                $(this).parent().next().next().find('.btn-save').click();
              }
            });

            loadAjax();
          } 

        });


      });

      $('body').on('click', '.btn-edit', function(event) {
        $(this).parent().prev().prev().find('.hidden-tg').hide();
        $(this).parent().prev().prev().find('.show-tg').show();
        $(this).hide();
        $(this).next().next().show();
        $(this).next().hide();

      });

      $('body').on('click', '.btn-save', function(event) {



       var _count = $(this).parent().prev().prev().find('.show-tg').val();
       var _mathucdon = $(this).data('href');

       console.log(_count);
       console.log(_mathucdon);
       console.log($('.maphong').val());
       console.log(link);

       flag = false;

       if(isNaN(_count) || parseInt(_count) <= 0) {
        alert('Số lượng bạn nhập không hợp lệ !');
        $('.soluong').addClass('warning');
        flag = true;
      }

      if(flag == false) {

        $(this).hide();
        $(this).prev().prev().show();
        $(this).prev().show();
        $(this).parent().prev().prev().find('.hidden-tg').show();
        $(this).parent().prev().prev().find('.show-tg').hide();

        price = $(this).parent().prev();
        soluong =  $(this).parent().prev().prev().find('.hidden-tg');


        $.ajax({
         url: link + 'quanly_karaoke/editCountDish',
         type: 'POST',
         dataType: 'json',
         data: {
          soluong: _count,
          maphong: $('.maphong').val(),
          mathucdon: _mathucdon

        },
      })
        .always(function(res) {
          price.html(res);
          soluong.html(_count);
          loadAjax();
        });
      }  

    });

      $('body').on('click', '.btn-remove', function(event) {
        var _maphong = $('.maphong').val();
        var _mathucdon = $(this).data('href');

        console.log(_maphong);
        console.log(_mathucdon);
        remove = $(this).parent().parent();

        e = confirm("Bạn có chắc muốn xóa sản phẩm này?");

        if(e == true) {

          $.ajax({
            url: link + 'quanly_karaoke/removeDish',
            type: 'POST',
            dataType: 'json',
            data: {
              maphong: _maphong,
              mathucdon: _mathucdon
            },
          })
          .always(function() {
            remove.remove();
            loadAjax();

          });
        }

        

      });

      $('.count').keyup(function(event) {
        if(event.keyCode === 13) 
          $(this).parent().next().find('.btn-addDish').click();
      });

      $('.show-tg').keyup(function(event) {
        if(event.keyCode === 13 || event.which == 13) {
          $(this).parent().next().next().find('.btn-save').click();
        }

      });

      $('.btn-pay').click(function(event) {

        _id = $(this).data('href');
        _surcharge = $('#surcharge').val();

        if(isNaN(_surcharge) || parseInt(_surcharge) < 0) {
          alert('Giá trị phụ thu bạn nhập không hợp lệ!');
          $('#surcharge').addClass('warning');
        } else {

          $('.check').show();

          $.ajax({

            url: link + 'quanly_karaoke/checkOut/' + _id,
            type: 'POST',
            dataType: 'json',
            data: {
              surcharge: _surcharge
            }
          })
          .always(function(res) {

            $('#room-Price').val(res['tongtiengio']);
            $('#total-Price').val(res['tongtien']);
            console.log(res['tongtiengio']);
            console.log(res['tongtien']);

          });
        }

        
        
      });

      $('.check').click(function(event) {
        event.preventDefault();
        tienKhachDua = $('.tien-khach-dua').val();
        surcharge = $('#surcharge').val();

        flag = false; 

        if(isNaN(surcharge) || parseInt(surcharge) < 0) {
          alert('Phí dịch vụ bạn nhập không hợp lệ!');
          $('#surcharge').addClass('warning');
          flag = true;
        }

        if(isNaN(tienKhachDua) || parseInt($('.tien-khach-dua').val()) < parseInt($('#total-Price').val())) {
          alert('Số tiền khách đưa bạn nhập không hợp lệ!');
          $('.tien-khach-dua').addClass('warning');
          flag = true;
        }

        if(flag == false) {
          $('.printBill').submit();
        }

      });

      $('#surcharge').click(function(event) {
        $('#surcharge').removeClass('warning');
      });

      $('.tien-khach-dua').click(function(event) {
        $('.tien-khach-dua').removeClass('warning');
      });

      $('.soluong').click(function(event) {
        $('.soluong').removeClass('warning');
      });



    });

  </script>


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

  <script src="<?= base_url() ?>vendors/validator/validator.js"></script>


</body>
</html>
