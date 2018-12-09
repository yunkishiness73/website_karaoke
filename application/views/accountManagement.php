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
  <link href="<?= base_url() ?>build/css/style.css" rel="stylesheet">
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

      <!-- page content -->
      <div class="card-deck right_col">
        <div class="row">
          <div class="col-sm-5">
            <div class="jumbotron btn-add">
             <div style="font-size: 30px; text-align: center;" >
              THÊM MỚI TÀI KHOẢN
            </div>
          </div>
          
          <form class="form-group register" style="display: none;">

            <fieldset class="item form-group">
              <div class="col-sm-3">
                <label>Username (*)</label>
              </div>
              <div class="col-sm-9">
                <input type="text" class="username form-control" required="required" >  
              </div>

            </fieldset>

            <fieldset class="item form-group">
              <div class="col-sm-3">
               <label>Password (*)</label>
             </div>
             <div class="col-sm-9">
              <input type="password" name="password" data-validate-length="3" class="password form-control" required="required">
            </div>

          </fieldset>

          <fieldset class="item form-group">
            <div class="col-sm-3">
              <label>Confirm Password (*)</label>
            </div>
            <div class="col-sm-9">
             <input type="password" class="conf-password form-control" required="required" data-validate-linked="password">
           </div>  
         </fieldset>


         <fieldset class="item form-group">    
          <div class="col-sm-3">
            <label>Fullname (*)</label>
          </div>
          <div class="col-sm-9">
            <input type="text" class="fullname form-control" required="required">
          </div>         
        </fieldset>

        <fieldset class="item form-group">

          <div class="col-sm-3">
            <label>Role</label>
          </div>

          <div class="col-sm-9">
            <select class="role form-control" style="width: 30%;">
              <?php foreach ($role as $value): ?>
                <option value="<?= $value['level'] ?>" ><?= $value['title'] ?></option>
              <?php endforeach ?>
            </select>
          </div>

        </fieldset>

        <div style="text-align: center;">
          <button class="btn btn-primary addUser">Add New User</button>
          <button class="btn btn-success cancel">Cancel</button>
          <div class="alert alert-danger" style="display: none; margin-top: 15px; height: 38px;">Thông tin bạn nhập chưa đầy đủ hoặc không chính xác! Vui lòng kiểm tra lại!</div>
        </div>

      </form> 
    </div> <!-- end left-content -->
    <div class="col-sm-7">
      <div class="jumbotron permission-management">
       <div style="font-size: 30px; text-align: center;">QUẢN LÝ TÀI KHOẢN</div>
     </div>

     <table class="table" style="margin: 2% auto; width: 100%; display: none;">
      <thead >
        <tr>
          <th>STT</th>
          <th >User Account</th>
          <th style="max-width: 5%;">Password</th>
          <th>Name</th>
          <th>Role</th>
          <th></th>
        </tr>
      </thead>
      <tbody>
        <?php $count = 1; ?>
        <?php foreach ($user_account as $value): ?>

          <tr>
            <td class="stt"><?= $count++; ?></td>
            <td><?= $value['username'] ?></td>
            <td style="max-width: 5%; overflow-x: hidden;">
              <?= $value['password'] ?>
              <a data-href="<?= $value['id'] ?>" class="btn btn-primary reset-password" data-toggle="modal" data-target="#myModal"> Reset <i class="fa fa-pencil"></i></a>
            </td>

            <td>
              <span class="hide-info"><?= $value['name'] ?></span>
              <input type="text" style="display: none;" class="change-info" value="<?= $value['name'] ?>">
            </td>
            <td>
              <span class="hide-info"><?= $value['title'] ?></span>
              <select class="form-control change-info select-role" style="width: 100%; display: none;">
                <?php foreach ($role as $val): ?>
                  <?php if($value['level'] == $val['level']) {?>
                  <option value="<?= $value['level'] ?>" selected><?= $value['title'] ?></option>
                  <?php } else { ?>
                  <option value="<?= $val['level'] ?>"><?= $val['title'] ?></option>
                  <?php } ?>
                <?php endforeach ?>
              </select>
            </td>
            <td>
              <a data-href="<?= $value['id'] ?>" class="btn btn-warning edit-userAccount"><i class="fa fa-pencil"></i></a>
              <a data-href="<?= $value['id'] ?>" class="btn btn-danger remove-userAccount"><i class="fa fa-remove"></i></a>
              <a data-href="<?= $value['id'] ?>" class="btn btn-success save-change" style="display: none;"><i class="fa fa-floppy-o"></i></a>
            </td>
          </tr>
        <?php endforeach ?>

      </tbody>
    </table>

    <div class="modal fade" id="myModal" role="dialog">
      <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">RESET MẬT KHẨU</h4>
          </div>
          <div class="modal-body" style="width: 50%; margin: auto;">
            <label>Mật khẩu mới </label><input type="password" class="form-control new-password" name="new-password">
            <label>Xác nhận lại mật khẩu </label><input type="password" class="form-control confirm-new-password" >
          </div>
          <div class="modal-footer">
            <a class="btn btn-danger modal-confirm">Save Change</a>
          </div>
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

<script src="<?= base_url() ?>vendors/validator/validator.js"></script>


<script>
  link = '<?= base_url() ?>';

  function checkWhiteSpace(str) {
     reWhiteSpace = new RegExp(/^\s+$/);
     // Check for white space
     if (reWhiteSpace.test(str)) {
          alert("Please Check Your Fields For Spaces");
     }
  }

  $(function() {

    

    $('body').on('click', '.edit-userAccount', function(event) {
      $(this).hide();
      $(this).next().hide();
      $(this).next().next().show();

      $(this).parent().prev().find('.hide-info').hide();
      $(this).parent().prev().prev().find('.hide-info').hide();

      $(this).parent().prev().find('.change-info').show();
      $(this).parent().prev().prev().find('.change-info').show();

    });

    $('body').on('click', '.save-change', function(event) {
      $(this).hide();
      $(this).prev().show();
      $(this).prev().prev().show();

      $(this).parent().prev().find('.change-info').hide();
      $(this).parent().prev().prev().find('.change-info').hide();

      $(this).parent().prev().find('.hide-info').show();
      $(this).parent().prev().prev().find('.hide-info').show();

      _id =  $(this).data('href');
      _name = $(this).parent().prev().prev().find('.change-info').val();
      _level =  $(this).parent().prev().find('.change-info').val();

      console.log($(this).parent().prev().find('.select-role option:selected').text());
      $(this).parent().prev().find('.select-role').val(_level);

      title = $(this).parent().prev().find('.select-role option:selected').text();
      changeName =  $(this).parent().prev().prev().find('.hide-info');
      changeTitle = $(this).parent().prev().find('.hide-info');

      $.post(link + 'rbac/editAccInfo', {accountId: _id, level: _level, name: _name}, function(data) {
       changeName.html(_name);
       changeTitle.html(title);
     });

      console.log(_id + " " + _level + " " + _name);

    });

    $('body').on('click', '.addUser', function(event) {

     event.preventDefault();
     _username = $('.username').val();
     _password = $('.password').val();
     _fullname = $('.fullname').val();
     _level = $('.role').val();
     _confPassword = $('.conf-password').val();


     _title = $('.role option:selected').html();

     stt = parseInt($('.stt').last().html()) + 1;

     flag = false;

     /*Kiểm tra khoảng trắng username*/
     if((/\s/g.test(_username)) || _username == '')  {
      alert('Username không được tồn tại khoảng trắng !');
      $('.username').addClass('warning');
      flag = true;
     }

     
     
     if(flag == false && _password != '' && _fullname != '' && _password === _confPassword)
     {

      $.post(link + 'rbac/addNewAccount', {username: _username, password: _password, name: _fullname, level: _level}, function(data) {

        if(data === '1') {
          alert('Tạo tài khoản mới thành công!');
          location.reload();
        }
        else if(data === '0') 
          alert('Tạo tài khoản mới thất bại!');

      });

    }

    });

    $('body').on('click', '.btn-add', function(event) {
      setTimeout(function(){
        $('.username').focus();
      },500);
      $('.register').toggle('slow');
    });

    $('body').on('click', '.permission-management', function(event) {
     $('.table').toggle('slow');
   });

    $('body').on('click', '.remove-userAccount', function(event) {

      e = confirm("Bạn có chắc muốn xóa tài khoản này?");

      if(e == true) {

        root = $(this).parent().parent();
        _id = $(this).data('href');

        $.post(link + 'rbac/removeAccount', {id: _id}, function(data) {
          if((typeof data) === 'string' && data == '1')
            root.remove();
        });
      }
      
    });

    $('.username').click(function(event) {
      $('.username').removeClass('warning');
    });

    $('.confirm-new-password').click(function(event) {
      $('.confirm-new-password').removeClass('warning');
    });

    $('.new-password').click(function() {
      $('.new-password').removeClass('warning');
    });


    $('body').on('click', '.reset-password', function(event) {
      id = $(this).data('href');
      $('.modal-confirm').attr('data-href', id);

      // reset lại ô nhập mật khẩu
      $('.confirm-new-password').val('');
      $('.new-password').val('');

       $('.confirm-new-password').removeClass('warning');
       $('.new-password').removeClass('warning');

       setTimeout(function(){
        $(".new-password").filter(':visible').focus();
      }, 500);
    });

    $('body').on('click', '.modal-confirm', function(event) {
      _id = $(this).attr('data-href');
      confirmPassword = $('.confirm-new-password').val();
      newPassword = $('.new-password').val();
      flag = false;
      if(confirmPassword == '') {
        alert('Bạn chưa xác nhận lại mật khẩu !');
        $('.confirm-new-password').addClass('warning');
        flag = true;
      }
      if(newPassword == '') {
        alert('Bạn chưa nhập mật khẩu mới!');
        $('.new-password').addClass('warning');
        flag = true;
      }

      if(newPassword != confirmPassword) {
        alert('Mật khẩu không khớp !');
        $('.confirm-new-password').addClass('warning');
        flag = true;
      }

      if(newPassword == confirmPassword && flag == false) {
        // ẩn modalbox
        $('.modal-confirm').attr('data-dismiss', 'modal');

        // reset lại ô nhập mật khẩu
        $('.confirm-new-password').val('');
        $('.new-password').val('');

        $('.confirm-new-password').removeClass('warning');
        $('.new-password').removeClass('warning');

        $.post(link + 'rbac/resetPassword', {password: newPassword, id: _id}, function(res) {
          if(res == 1) 
            alert('Reset mật khẩu thành công!');
          else
            alert('Đã có lỗi xảy ra. Không reset được mật khẩu!');
          location.reload();
        });

      }


    });

    $('body').on('click', '.cancel', function(event) {

      event.preventDefault();

      $('.username').val('');
      $('.password').val('');
      $('.conf-password').val('');
      $('.fullname').val('');

      $('.register').fadeOut(1000);

      
    });

    $('.new-password').keyup(function(event) {
     if(event.keyCode === 13) 
      $('.modal-confirm').click();
    });

    $('.confirm-new-password').keyup(function(event) {
     if(event.keyCode === 13) 
      $('.modal-confirm').click();
    });

    $('.change-info').keyup(function(event) {
      if(event.keyCode === 13) 
        $(this).parent().next().next().find('.save-change').click();
    });

    

  });


</script>


</body>
</html>
