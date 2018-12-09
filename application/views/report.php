<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title>Report</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <style>
        .name {
            text-align: center;
        }

        .report {
            text-align: center;
        }

        .container { 
         margin-top: 2%;
         border: 1px dashed;
         width: 25%;

     }

     .print-bill { text-align: center; }

     /* h5 { text-align: center; }*/
 </style>
</head>
<body>
    <div class="container">
        <div class="name">
            <h1>Karaoke IDOL</h1>
        </div>
        <hr />
        <div class="report">
            <h2>Hóa đơn tiền phòng <?= $tenphong ?></h2>
        </div>
        <div class="col-sm-12">
            <div class="row">
                <div class="col-sm-6" style="float:left;">
                    <h5>Giờ vào:</h5>
                </div>
                <div class="col-sm-6" style="float:right;">
                    <h5><?= date('H:i', strtotime($giovao)) ?></h5>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6" style="float:left;">
                    <h5>Giờ ra:</h5>
                </div>
                <div class="col-sm-6" style="float:right;" >
                    <h5><?= date('H:i', strtotime($giora)) ?></h5>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <h5>Thời gian:</h5>
                </div>
                <div class="col-sm-6">
                    <h5><?= $thoigian ?></h5>
                </div>
            </div>
        </div>
        
        <div style="width:100%;" class="col-sm-12">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>Tên</th>
                        <th>Số lượng</th>
                        <th>Giá</th>
                        <th>Tổng</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($chitiet as $value): ?>

                        <tr>
                            <td><?= $value['tenmonan'] ?></td>
                            <td><?= $value['soluong'] ?></td>
                            <td><?= number_format($value['giatien']) ?></td>
                            <td><?= number_format($value['dongia']) ?></td>
                        </tr>

                    <?php endforeach ?>
                </tbody>
            </table>
            
            <hr style="height:2px; border:none; background-color:#bdc3c7;" />
            <div class="row">
                <div class="col-sm-8" style="float:left">
                    <h5>Tổng dịch vụ:</h5>
                </div>
                <div class="col-sm-4" style="float:right">
                    <h5><?= number_format($tongdichvu) ?></h5>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-8" style="float:left">
                    <h5>Tổng tiền giờ:</h5>
                </div>
                <div class="col-sm-4" style="float:right">
                    <h5><?= number_format($tongtiengio) ?></h5>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-8" style="float:left">
                    <h3>Tổng hóa đơn</h3>
                </div>
                <div class="col-sm-4" style="float:right">
                    <h3><?= number_format($tongtien) ?> </h3>
                </div>
            </div>
            <div>
                <h5>Tiền giờ: <?= number_format( $giatien) ?> đ/giờ</h5>
            </div>
        </div>

        <div class="name">
            <h3>Xin cảm ơn và hẹn gặp lại!</h3>
        </div>

    </div>

</body>
</html>