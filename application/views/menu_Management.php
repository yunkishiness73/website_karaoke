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
        <div class="col-sm-12">
          <div class="" style="text-align: center;">
            <h1 class="display-4">Quản Lý Thực Đơn</h1>
            <hr class="m-y-md">
          </div>

          <div class="table-responsive col-sm-12">
            <div class="row">
              <div class="col-sm-7">
               <div class="jumbotron">
                 <div style="font-size: 30px; text-align: center;">Sửa - Xóa sản phẩm</div>
               </div>
               <table class="table">
                <thead>
                  <tr>
                    <th colspan="2">Sản phẩm</th>
                    <th>Đơn vị tính</th>
                    <th>Giá</th>

                  </tr>
                </thead>
                <tbody class="add-menu-view">

                  <?php foreach ($menu as $value): ?>

                   <tr>
                    <td colspan="2" style="width: 30%;">
                      <input type="text" class="ten_sp form-control show-tg" value="<?= $value['tenmonan'] ?>" style="display: none;">
                      <span class="hidden-tg" ><?= $value['tenmonan'] ?></span>
                    </td>
                    <td style="width: 20%;">
                      <input type="text" class="donvitinh_sp form-control show-tg" value="<?= $value['donvitinh'] ?>" style="display: none;">
                      <span class="hidden-tg "><?= $value['donvitinh'] ?></span>
                    </td>
                    <td style="width: 20%;">
                      <input type="text" class="gia_sp form-control show-tg" value="<?= $value['giatien'] ?>" style="display: none;">
                      <span class="hidden-tg "><?= $value['giatien'] ?></span>
                    </td>

                    <td style="width: 20%;">
                     <a data-href="<?= $value['mathucdon'] ?>" class="btn btn-warning btn-edit" style="display: inline-block; height: 34px; "><i class="fa fa-pencil"></i></a>
                     <a data-href="<?= $value['mathucdon'] ?>" class="btn btn-danger btn-remove" style="display: inline-block; height: 34px; "><i class="fa fa-remove"></i></a>
                     <a data-href="<?= $value['mathucdon'] ?>" class="btn btn-success btn-save"  style="display: none"><i class="fa fa-floppy-o"></i></a>
                   </td>
                 </tr>   

               <?php endforeach ?>


             </tbody>
           </table>
         </div> <!-- hết cột trái -->


         <div class="col-sm-5">
          <div class="jumbotron">
            <div style="font-size: 30px; text-align: center;">Thêm sản phẩm</div>
          </div>
          <table class="table">
            <thead>
              <tr>
                <th colspan="2">Sản phẩm</th>
                <th>Đơn vị tính</th>
                <th>Giá</th>
              </tr>
            </thead>
            <tbody >

             <tr>
              <td colspan="2" class=""><input type="text" class="tenmonan form-control" value="" placeholder="Tên sản phẩm *"></td>
              <td><input type="text" class="donvitinh form-control" value="" placeholder="Đơn vị tính *"></td>
              <td><input type="text" class="giatien form-control" value="" placeholder="Giá tiền sản phẩm *"></td>
              <td ">
               <a data-href="" class="btn btn-success btn-addDish" style="display: inline-block; height: 34px; "><i class="fa fa-plus"></i></a>
             </td>
           </tr>      

         </tbody>
       </table>

     </div>

   </div>

 </div>
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

<script>

  link = '<?= base_url() ?>';

  $(document).ready(function(){

    $('.tenmonan:visible:first').focus();

    $('body').on('click', '.btn-addDish', function(event) {

      var tenmonan = $(this).parent().prev().prev().prev().find('.tenmonan').val();
      var donvitinh = $(this).parent().prev().prev().find('.donvitinh').val();
      var giatien = $(this).parent().prev().find('.giatien').val();

      flag = false;

      if(tenmonan == '' || donvitinh == '' || giatien == '') {
        alert('Bạn chưa nhập đầy đủ thông tin sản phẩm !');
        flag = true;
      }

      if(isNaN(giatien) || parseInt(giatien) < 0) {
        alert('Giá tiền bạn nhập không hợp lệ!');
        $('.giatien').addClass('warning');
        flag = true;
      }

      if(flag == false) {

        console.log('tên món ăn' +tenmonan);
        console.log('đơn vị tính: ' +donvitinh);
        console.log('giá tiền' +giatien);

        $.post(link + 'quanly_karaoke/addProductByAjax', {tenmonan: tenmonan, donvitinh: donvitinh, giatien: giatien}, function(data) { 

         content = '<tr>';
         content += '<td colspan="2" style="width: 30%;">';
         content += '<input type="text" class="ten_sp form-control show-tg" value="'+ tenmonan +'" style="display: none;">';
         content += '<span class="hidden-tg" >'+ tenmonan +'</span>';
         content += '</td>';
         content += '<td style="width: 20%;">';
         content += '<input type="text" class="donvitinh_sp form-control show-tg" value="'+ donvitinh +'" style="display: none;">';
         content += '<span class="hidden-tg ">'+ donvitinh +'</span>';
         content += '</td>';
         content += '<td style="width: 20%;">';
         content += '<input type="text" class="gia_sp form-control show-tg" value="'+giatien+'" style="display: none;">';
         content += '<span class="hidden-tg ">'+giatien+'</span>';
         content += '</td>';
         content += '<td style="width: 20%;">';
         content += '<a data-href="'+ data  +'" class="btn btn-warning btn-edit" style="display: inline-block; height: 34px; "><i class="fa fa-pencil"></i></a>';
         content += '<a data-href="'+ data  +'" class="btn btn-danger btn-remove" style="display: inline-block; height: 34px; "><i class="fa fa-remove"></i></a>';
         content += '<a data-href="'+ data  +'" class="btn btn-success btn-save"  style="display: none"><i class="fa fa-floppy-o"></i></a>';
         content += '</td>';
         content += '</tr>';

         $('.add-menu-view').append(content);

         $('.tenmonan').val('');
         $('.donvitinh').val('');
         $('.giatien').val('');

         $('.gia_sp').keyup(function(event) {
          if(event.keyCode === 13 || event.which == 13) 
            $(this).parent().next().find('.btn-save').click();
        });

         $('.donvitinh_sp').keyup(function(event) {
          if(event.keyCode === 13 || event.which == 13) {
            $(this).parent().next().next().find('.btn-save').click();
          }

        });

         $('.ten_sp').keyup(function(event) {
          if(event.keyCode === 13 || event.which == 13) {
            $(this).parent().next().next().next().find('.btn-save').click();
          }

        });

       });

      }

    });

    $('body').on('click', '.btn-edit', function(event) {

        // ẩn thẻ span 
        $(this).parent().prev().find('.hidden-tg').hide();
        $(this).parent().prev().prev().find('.hidden-tg').hide();
        $(this).parent().prev().prev().prev().find('.hidden-tg').hide();


        //hiện thẻ input 
        $(this).parent().prev().find('.show-tg').show();
        $(this).parent().prev().prev().find('.show-tg').show();
        $(this).parent().prev().prev().prev().find('.show-tg').show();

        //ẩn nút edit hiện tại
        $(this).hide();

        //ẩn nút xóa
        $(this).next().hide();

        //hiện nút save 
        $(this).next().next().show();



      });

    $('body').on('click', '.btn-save', function(event) {

     mathucdon = $(this).data('href');
     tenmonan = $(this).parent().prev().prev().prev().find('.ten_sp').val();
     donvitinh = $(this).parent().prev().prev().find('.donvitinh_sp').val();
     giatien = $(this).parent().prev().find('.gia_sp').val();

     flag = false;

     if(isNaN(giatien) || parseInt(giatien) < 0) {
      alert('Giá tiền bạn nhập không hợp lệ !');
      $(this).parent().prev().find('.gia_sp').addClass('warning');
      flag = true;
    }

    if(flag == false) {

      //ẩn nút sava hiện tại
      $(this).hide();

       //hiện nút xóa và sửa
       $(this).prev().prev().show();
       $(this).prev().show();

       //hiện thẻ span
       $(this).parent().prev().find('.hidden-tg').show();
       $(this).parent().prev().prev().find('.hidden-tg').show();
       $(this).parent().prev().prev().prev().find('.hidden-tg').show();


       //ẩn thẻ input
       $(this).parent().prev().find('.show-tg').hide();
       $(this).parent().prev().prev().find('.show-tg').hide();
       $(this).parent().prev().prev().prev().find('.show-tg').hide();

       console.log(mathucdon);
       console.log(tenmonan);
       console.log(donvitinh);
       console.log(giatien);

       _tenmonan = $(this).parent().prev().prev().prev().find('.hidden-tg');
       _donvitinh = $(this).parent().prev().prev().find('.hidden-tg');
       _giatien = $(this).parent().prev().find('.hidden-tg');

       $.post(link + 'quanly_karaoke/editProductByAjax', {mathucdon: mathucdon, tenmonan: tenmonan, donvitinh: donvitinh, giatien: giatien}, function(data) {
        _tenmonan.html(tenmonan);
        _donvitinh.html(donvitinh);
        _giatien.html(giatien);
        console.log("gía trị trả về: " +data);
      });
     }

   });

    $('body').on('click', '.btn-remove', function(event) {

      e = confirm("Bạn có chắc chắn muốn xóa sản phẩm này?");

      if(e == true) {

        parent = $(this).parent().parent();

        $.post(link + 'quanly_karaoke/removeProductByAjax', {mathucdon: $(this).data('href')}, function(data) {
          parent.remove();
          console.log(data);
        });
      }

    });


    $('.gia_sp').keyup(function(event) {
      if(event.keyCode === 13 || event.which == 13) 
        $(this).parent().next().find('.btn-save').click();
    });

    $('.donvitinh_sp').keyup(function(event) {
      if(event.keyCode === 13 || event.which == 13) {
        $(this).parent().next().next().find('.btn-save').click();
      }

    });

    $('.ten_sp').keyup(function(event) {
      if(event.keyCode === 13 || event.which == 13) {
        $(this).parent().next().next().next().find('.btn-save').click();
      }

    });

    $('.giatien').keyup(function(event) {
      if(event.keyCode === 13) {
        $(this).parent().next().find('.btn-addDish').click();
      }
    });

    $('.giatien').click(function(event) {
      $('.giatien').removeClass('warning');
    });

    $('.gia_sp').click(function(event) {
     $('.gia_sp').removeClass('warning');
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

</body>
</html>
