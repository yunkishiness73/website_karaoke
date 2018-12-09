<form action="<?= base_url(); ?>quanly_karaoke/payment" class="" method="post" enctype="multipart/form-data">

            <fieldset class="form-group">
              <label>Phòng</label>
             <!--  <input type="number" name="" value="<?= $maphong ?>" class="maphong" class="form-control"> -->
              <input type="text" class="form-control" name="" id="" value="<?= $maphong ?>" disabled>
            </fieldset>


            <fieldset class="form-group">
              <label>Loại phòng</label>
              <input type="text" class="form-control" name="" id="">
            </fieldset>

            <fieldset class="form-group">
              <label>Giờ đặt</label>
              <input type="text" class="form-control" name="" id="">
            </fieldset>

            <fieldset class="form-group">
              <label>Giờ trả</label>
              <input type="text" class="form-control" name="" id="" >
            </fieldset>

            <fieldset class="form-group">
              <label>Số giờ</label>
              <input type="text" class="form-control" name="" id="">
            </fieldset>

            <fieldset class="form-group">
              <label>Tiền phòng</label>
              <input type="text" class="form-control" name="" id="">
            </fieldset>

            <fieldset class="form-group">
              <label>Phí dịch vụ</label>
              <input type="text" class="form-control" name="" id="" >
            </fieldset>

            <fieldset class="form-group">
              <label>Tổng tiền</label>
              <input type="text" class="form-control" name="" id="">
            </fieldset>

            <fieldset >
              <input type="submit" value="Thanh toán" class="btn btn-info">

            </fieldset>

          </form> 