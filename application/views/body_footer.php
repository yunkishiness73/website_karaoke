    <script src="<?= base_url() ?>vendors/jquery/dist/jquery.min.js"></script>
    <footer>
    	<div class="pull-right">
    		Quản lý hệ thống KARAOKE
    		<div id="digital-block" style="color: #d9534f; font-weight: bold;"></div>
    	</div>
    	<div class="clearfix"></div>
    </footer>

    <script>
    	link = '<?= base_url(); ?>';
    	function checkInterval(bookingTime, tenphong) {
    		date = new Date();
    		d = date.getDate();
    		m = date.getMonth() + 1;
    		y = date.getFullYear();
    		h = date.getHours();
    		min = date.getMinutes();

    		currDate = y + '-' + m + '-' + d + ' ' + h + ":" + min;


    		interval = bookingTime - Date.parse(currDate);
    		console.log(bookingTime);
    		console.log(interval);

    		setTimeout(function() {
            // alert('Phòng ' + tenphong + ' đã đến thời gian vào phòng!');
            
            $('#alert-modal').modal('show');
            $('.alert').html('Phòng ' + tenphong + ' đã đến thời gian vào phòng!');
              // location.reload();
          }, interval);

    	}

    	function getAllRoom() {
    		$.ajax({
    			url: link + 'quanly_karaoke/getAllRoomByAjax',
    			type: 'POST',
    			dataType: 'json',
    		})
    		.always(function(res) {
    			for(i in res) {
    				if(res[i].trangthai == 2 && res[i].dat_truoc != 0) {
    					checkInterval(res[i].dat_truoc, res[i].tenphong);
    				}
    			}

    		});
    	}

    	$(function() {
    		getAllRoom();
    		$('body').on('click', '.close-modal', function(event) {
    			location.reload();
    		});
    	});
    </script>
