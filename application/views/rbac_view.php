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
          <div class="col-sm-6">
            <div class="jumbotron">
             <div style="font-size: 30px; text-align: center;">QUẢN LÝ VAI TRÒ</div>
           </div>
           <table class="table" style="margin: 2% auto; width: 80%;">
            <thead >
              <tr>
                <th style="width: 30%;">STT</th>
                <th style="width: 40%;">Role</th>
                <th></th>

              </tr>
            </thead>
            <tbody >
              <div class="role-block">
                <?php $count = 1; ?>
                <?php foreach ($role as $value): ?>

                  <tr >
                    <td style="width: 33.33%;" class="stt">
                     <?= $count++; ?> 
                   </td>
                   <td style="width: 33.33%;" class="role-name"><?= $value['title'] ?></td>
                   <td>
                    <a data-href="<?= $value['level'] ?>" class="btn btn-warning edit-role"><i class="fa fa-pencil"></i></a>
                    <a data-href="<?= $value['level'] ?>" class="btn btn-danger remove-role"><i class="fa fa-remove"></i></a>
                  </td>

                </tr>

              <?php endforeach ?>

            </div>


            <tr class="hide-role" style="display: none;">
              <td colspan="2">
                <input type="text" placeholder="* role name" class="new-role-name form-control">
                <input type="hidden" class="level">
              </td>
              <td >
                <button class="btn btn-success save-role"><i class="fa fa-floppy-o"></i></button>
                <button class="btn btn-danger btn-cancel"><i class="fa fa-remove"></i></button>
              </td>
            </tr>
            
          </tbody>
        </table>
        <div style="width: 80%; margin: auto;">
          <button style="width: 100%; border: none; height: 40px; opacity: 0.6; background-color: rgba(0,0,0,.35); color: black;" class="add-role">
            <i class="fa fa-plus"></i> Add a Role
          </button>
        </div>
      </div> <!-- end left col -->

      <!-- right col -->
      <div class="col-sm-6 permission-management" style="display: none;">
        <div class="jumbotron">
         <div style="font-size: 30px; text-align: center;">QUẢN LÝ QUYỀN TRUY CẬP</div>
       </div>

       <fieldset class="form-group">
        <label>Role</label> <br>
        <input type="text" placeholder="tên thay đổi" class="form-control edit-role-name" style="width: 30%;">

      </fieldset>

      <table class="table" style="margin: 2% auto; width: 100%;">
        <thead >
          <tr>
            <th style="width: 30%;">STT</th>
            <th style="width: 40%;">Title</th>
            <th>Xem</th>

          </tr>
        </thead>
        <tbody>
          <?php $count = 1; ?>

          <?php foreach ($user_permission as $key): ?>


            <tr>
              <td style="width: 33.33%;">
               <?= $count++; ?> 
             </td>
             <td style="width: 33.33%;">
              <?= $key["title"]; ?>
            </td>
            <td class="select">
              <input type="checkbox" name="select-permission[]" value="<?= $key['permission_id'] ?>"  >
            </td>

          </tr>

        <?php endforeach ?>

      </tbody>
    </table>
    <div style="text-align: center;"> 
      <a href="#" class="btn btn-primary update">Cập Nhật</a>
      <button class="btn btn-warning cancel"><i class="fa fa-remove"></i> Cancel</button>
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

    $('body').on('click', '.update', function(event) {

      _level = $('.level').val();
      val = [];

      $(':checkbox:checked').each(function(i) {
        val[i] = $(this).val();
      });

      _role = $('.edit-role-name').val().trim();

      if(_role.length != 0) {
        $.ajax({
          url: link + 'rbac/addPermission',
          type: 'POST',
          dataType: 'json',
          data: {
            level: _level,
            selectedPermission: val,
            role: _role
          },
        }).always(function() {
          $('.permission-management').hide(2000);
          $('.change-role-name').html(_role);
          $('.change-role-name').removeClass('change-role-name');
          $('.edit-role-name').val('');
        });
      } else {
        alert('Bạn chưa nhập tên vai trò !');
        $('.edit-role-name').addClass('warning');
      }

      

      

    });


    $('body').on('click', '.edit-role', function(event) {

      setTimeout(function() {
        $('.edit-role-name').focus();
      }, 500);

      $('.permission-management').show(1000);

      _id = $(this).data('href');
      _roleName = $(this).parent().prev().html();

      $('.role-name').removeClass('change-role-name');
      $(this).parent().prev().addClass('change-role-name');

      $('.edit-role-name').val(_roleName);

      // $('.select-role').val(_id);

      // bỏ checked role đã chỉnh sửa trước đó, để khi chỉnh sửa role khác thì sẽ chỉ checked thuộc tính role này
      //nếu .prop('checked',true)  => giữ thuộc tính checked của role đã chỉnh trước đó và cả thuộc tính checked của role hiện tại
      //nếu .prop('checked',false) -> không giữ thuộc tính đã checked role trước đó..chỉ giữ checked role hiện tại

      $(':checkbox:checked').prop('checked', false);

      $.ajax({
        url: link + 'rbac/getRole',
        type: 'POST',
        dataType: 'json',
        data: {
         level: _id
       },
     })
      .always(function(values) {
        console.log(values);
        $('.level').val(_id);
        if(values.length != 0) {
          $(".select").find('[value=' + values.join('], [value=') + ']').prop("checked", true);
        }

      });



    });

    $('body').on('click', '.cancel', function(event) {
      $('.permission-management').fadeOut(1000);
    });

    $('body').on('click', '.add-role', function(event) {
      $('.show-add-role').hide();
      $('.hide-role').show();

    });

    $('body').on('click', '.btn-cancel', function(event) {
      $('.hide-role').hide();
      $('.show-add-role').show();
    });

    $('body').on('click', '.save-role', function(event) {

      _title = $('.new-role-name').val()
      $('.hide-role').hide();

      $.post(link + 'rbac/addRole', {title: _title}, function(data) {
        location.reload();
      });

    });


    $('.remove-role').click(function(event) {

      e = confirm("Bạn có chắc muốn xóa vai trò?");

      if(e == true) {
       $.post(link + 'rbac/removeRole', {level: $(this).data('href')}, function(data) {
         location.reload();
       });
     }
   });

    $('.edit-role-name').click(function(event) {
      $('.edit-role-name').removeClass('warning');
    });

  })



</script>


</body>
</html>
