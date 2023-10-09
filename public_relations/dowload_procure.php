<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="โรงพยาบาลภูกามยาว จังหวัดพะเยา 177 หมู่ 2 ตำบลห้วยแก้ว อำเภอภูกามยาว จังหวัดพะเยา 56000 ">
    <meta name="keywords" content="โรงพยาบาลภูกามยาว จังหวัดพะเยา 177 หมู่ 2  ตำบลห้วยแก้ว อำเภอภูกามยาว จังหวัดพะเยา 56000
    © 2022 Phukamyao Hospital. All Rights Reserved. IT Phukamyao Hospital">
    <link rel="shortcut icon" href="../dist/img/icon-maetha.png">
    <title>โรงพยาบาลภูกามยาว | Phukamyao Hospital : เกี่ยวกับเรา</title>
    <link rel="stylesheet" href="../dist/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="../dist/css/scrolltop.css" type="text/css" />
    <link rel="stylesheet" href="../dist/css/submenu.css" type="text/css" />
    <link rel="stylesheet" href="../dist/css/slide.css" type="text/css" />
    <link rel="stylesheet" href="../dist/css/carousel.css" type="text/css" />
    <link rel="stylesheet" href="../dist/css/style.css" type="text/css" />
    <link rel="stylesheet" href="../dist/css/font-awesome.min.css" type="text/css" />

    <script type="text/javascript" src="../dist/js/jquery-1.11.3.min.js"></script>
    <script type="text/javascript" src="../dist/js/jssor.slider.mini.js"></script>
    <script type="text/javascript" src="../dist/js/scrolltop.js"></script>
    <script type="text/javascript" src="../ist/js/slide.js"></script>

    <link rel="stylesheet" type="text/css" href="admin/css/datatables.css">
    <script type="text/javascript" charset="utf8" src="admin/js/datatables.js"></script>
    <script type="text/javascript">
      $(document).ready(function() {
            $('#example').DataTable({
                    "language": {
                    "lengthMenu": "แสดงจำนวน _MENU_ ต่อหน้า",
                    "zeroRecords": "ยังไม่มีข้อมูลในระบบ",
                    "info": "แสดงหน้า _PAGE_ ถึง _PAGES_",
                    "infoEmpty": "ยังไม่มีข้อมูลในระบบ",
                    "infoFiltered": "(filtered from _MAX_ total records)"
                    }
            });
        });
      function countdownload(id){
         $.post("countdownload.php",{id:id},function(data){
          //window.open('file_download/'+data,'_blank');
        });
      }
    </script>
        <script src="https://www.google.com/recaptcha/enterprise.js?render=6LcsjR4mAAAAAOY8HN2jwM3HXRrP8hAxgvZqj-Bp"></script>
        <!-- <script>
        grecaptcha.enterprise.ready(function() {
            grecaptcha.enterprise.execute('6LcsjR4mAAAAAOY8HN2jwM3HXRrP8hAxgvZqj-Bp', {action: 'login'}).then(function(token) {
            ...
            });
        });
        </script> -->
    <style>
    .affix{
      top:0;
      width:100%;
      z-index:9999 !important;
    }
    .affix + .container-fluid{
      padding-top:70px;
    }
    </style>
    <!-- Go to www.addthis.com/dashboard to customize your tools --> 
    <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-58218dab4d0c9c19"></script> 
  </head>
  <body id="top">

    <!-- navbar -->
        <?php
            include("navbar.php");
        ?>
    <!-- end navbar -->

    <div class="container">
      <div class='col-md-12' align='center' style="padding-top:40px;">
      <h1><span class="glyphicon glyphicon-shopping-cart"></span>&nbsp;จัดซื้อจัดจ้าง</h1>
          <p style='font-size:16px; font-weight:bold;'>แจ้งข่าวข่าวประชาสัมพันธ์ของโรงพยาบาล</p>
      </div>
      <div class="row">
        <div class='col-md-12'>
        <div class="table-responsive">
        <table id='example'  class='table table-bordered' style='font-size:13px;' width="100%">
          <thead>
            <tr bgcolor='#f5f5f5'>
            <td width='3%' class="clearfix hidden-xs"><strong>ลำดับ</strong></td>
              <th width="12%"><span class='glyphicon glyphicon-calendar'></span> วันที่</th>
              <th width="61%"><i class="fa fa-paper-plane"></i> ชื่อหัวข้อ</th>
              <th width="12%" align='center'><span class="glyphicon glyphicon-download"></span> ดาวน์โหลด </th> 
              <th width="12%" align='center' class="clearfix hidden-xs"><span class="glyphicon glyphicon-search"></span> ดูรายละเอียด </th>
            </tr>
          </thead> 
          <tbody>
        <tr>
          <td align='center' class='clearfix hidden-xs'>1</td>
          <td><span class='glyphicon glyphicon-calendar'></span> 18 พ.ย. 2565<br/></td>
          <td><a href='public_detail.php?id=229'><i class='fa fa-paper-plane'></i> แต่งตั้งคณะทำงานขับเคลื่อนชมรมจริยธรรม รพ.วังสามหมอ</a>
          <br><span class='glyphicon glyphicon-eye-open'></span> 5056 <span class='glyphicon glyphicon-save'></span> 16</td>   
          <td align='center'><a class='btn btn-link' href='file_download/1668754121.pdf' target='_blank' onclick='countdownload(229)'><span class='glyphicon glyphicon-download'></span> ดาวน์โหลด</a></td>
          <td align='center' class='clearfix hidden-xs'><a class='btn btn-link' href='public_detail.php?id=229'><span class='glyphicon glyphicon-search'></span> ดูรายละเอียด </a></td>
          </tr><tr>
          <td align='center' class='clearfix hidden-xs'>2</td>
          <td><span class='glyphicon glyphicon-calendar'></span> 15 พ.ย. 2562<br/></td>
          <td><a href='public_detail.php?id=174'><i class='fa fa-paper-plane'></i> คู่มือการใช้งานระบบจองห้องประชุม</a>
          <br><span class='glyphicon glyphicon-eye-open'></span> 5045 <span class='glyphicon glyphicon-save'></span> 118</td>   
          <td align='center'><a class='btn btn-link' href='file_download/1573793045.pdf' target='_blank' onclick='countdownload(174)'><span class='glyphicon glyphicon-download'></span> ดาวน์โหลด</a></td>
          <td align='center' class='clearfix hidden-xs'><a class='btn btn-link' href='public_detail.php?id=174'><span class='glyphicon glyphicon-search'></span> ดูรายละเอียด </a></td>
          </tr><tr>
          <td align='center' class='clearfix hidden-xs'>3</td>
          <td><span class='glyphicon glyphicon-calendar'></span> 29 ต.ค. 2562<br/></td>
          <td><a href='public_detail.php?id=172'><i class='fa fa-paper-plane'></i> ค่าใช้จ่ายเพื่อเป็นเงินช่วยเหลือเบื้องต้นแก่ผู้ให้บริการที่ได้รับความเสียหาย</a>
          <br><span class='glyphicon glyphicon-eye-open'></span> 5016 <span class='glyphicon glyphicon-save'></span> 6</td>   
          <td align='center'><a class='btn btn-link' href='file_download/1572332705.pdf' target='_blank' onclick='countdownload(172)'><span class='glyphicon glyphicon-download'></span> ดาวน์โหลด</a></td>
          <td align='center' class='clearfix hidden-xs'><a class='btn btn-link' href='public_detail.php?id=172'><span class='glyphicon glyphicon-search'></span> ดูรายละเอียด </a></td>
          </tr><tr>
          <td align='center' class='clearfix hidden-xs'>4</td>
          <td><span class='glyphicon glyphicon-calendar'></span> 19 เม.ย. 2545<br/></td>
          <td><a href='public_detail.php?id=147'><i class='fa fa-paper-plane'></i> ขอเชิญพี่น้องชาววังสามหมอ ร่วมบริจาคกับ "มูลนิธิก้าวคนละก้าว"</a>
          <br><span class='glyphicon glyphicon-eye-open'></span> 4859 <span class='glyphicon glyphicon-save'></span> 0</td>   
          <td align='center'><button class='btn btn-link'><span class='glyphicon glyphicon-remove-circle'></span> ไม่มีไฟล์แนบ</button></td>
          <td align='center' class='clearfix hidden-xs'><a class='btn btn-link' href='public_detail.php?id=147'><span class='glyphicon glyphicon-search'></span> ดูรายละเอียด </a></td>
          </tr><tr>
          <td align='center' class='clearfix hidden-xs'>5</td>
          <td><span class='glyphicon glyphicon-calendar'></span> 09 พ.ย. 2561<br/></td>
          <td><a href='public_detail.php?id=87'><i class='fa fa-paper-plane'></i> บันทึกข้อตกลงความร่วมมือ MOU สร้างมาตรการองค์กรเพื่อความปลอดภัยทางถนน</a>
          <br><span class='glyphicon glyphicon-eye-open'></span> 4903 <span class='glyphicon glyphicon-save'></span> 32</td>   
          <td align='center'><a class='btn btn-link' href='file_download/1009948058.phtml' target='_blank' onclick='countdownload(87)'><span class='glyphicon glyphicon-download'></span> ดาวน์โหลด</a></td>
          <td align='center' class='clearfix hidden-xs'><a class='btn btn-link' href='public_detail.php?id=87'><span class='glyphicon glyphicon-search'></span> ดูรายละเอียด </a></td>
          </tr><tr>
          <td align='center' class='clearfix hidden-xs'>6</td>
          <td><span class='glyphicon glyphicon-calendar'></span> 05 ก.ค. 2561<br/></td>
          <td><a href='public_detail.php?id=83'><i class='fa fa-paper-plane'></i> การถ่ายภาพหรือบันทึกเสียงในขณะที่แพทย์พยาบาล</a>
          <br><span class='glyphicon glyphicon-eye-open'></span> 5330 <span class='glyphicon glyphicon-save'></span> 99</td>   
          <td align='center'><a class='btn btn-link' href='file_download/1530772810.pdf' target='_blank' onclick='countdownload(83)'><span class='glyphicon glyphicon-download'></span> ดาวน์โหลด</a></td>
          <td align='center' class='clearfix hidden-xs'><a class='btn btn-link' href='public_detail.php?id=83'><span class='glyphicon glyphicon-search'></span> ดูรายละเอียด </a></td>
          </tr><tr>
          <td align='center' class='clearfix hidden-xs'>7</td>
          <td><span class='glyphicon glyphicon-calendar'></span> 18 เม.ย. 2561<br/></td>
          <td><a href='public_detail.php?id=72'><i class='fa fa-paper-plane'></i> กรมบัญชีกลางยกเลิกสแกนนิ้วใช้บัตรประชาชนยื่นรักษาพยาบาลแทน</a>
          <br><span class='glyphicon glyphicon-eye-open'></span> 4949 <span class='glyphicon glyphicon-save'></span> 13</td>   
          <td align='center'><a class='btn btn-link' href='file_download/1524043387.jpg' target='_blank' onclick='countdownload(72)'><span class='glyphicon glyphicon-download'></span> ดาวน์โหลด</a></td>
          <td align='center' class='clearfix hidden-xs'><a class='btn btn-link' href='public_detail.php?id=72'><span class='glyphicon glyphicon-search'></span> ดูรายละเอียด </a></td>
          </tr><tr>
          <td align='center' class='clearfix hidden-xs'>8</td>
          <td><span class='glyphicon glyphicon-calendar'></span> 12 มี.ค. 2561<br/></td>
          <td><a href='public_detail.php?id=64'><i class='fa fa-paper-plane'></i> ลงทะเบียนขอใช้โปรแกรม WSM Lab Online</a>
          <br><span class='glyphicon glyphicon-eye-open'></span> 4861 <span class='glyphicon glyphicon-save'></span> 13</td>   
          <td align='center'><a class='btn btn-link' href='file_download/1520928788.pdf' target='_blank' onclick='countdownload(64)'><span class='glyphicon glyphicon-download'></span> ดาวน์โหลด</a></td>
          <td align='center' class='clearfix hidden-xs'><a class='btn btn-link' href='public_detail.php?id=64'><span class='glyphicon glyphicon-search'></span> ดูรายละเอียด </a></td>
          </tr><tr>
          <td align='center' class='clearfix hidden-xs'>9</td>
          <td><span class='glyphicon glyphicon-calendar'></span> 11 ต.ค. 2560<br/></td>
          <td><a href='public_detail.php?id=43'><i class='fa fa-paper-plane'></i> ทำไม?ต้องใช้ระบบยืนยันตัวตน</a>
          <br><span class='glyphicon glyphicon-eye-open'></span> 4955 <span class='glyphicon glyphicon-save'></span> 0</td>   
          <td align='center'><button class='btn btn-link'><span class='glyphicon glyphicon-remove-circle'></span> ไม่มีไฟล์แนบ</button></td>
          <td align='center' class='clearfix hidden-xs'><a class='btn btn-link' href='public_detail.php?id=43'><span class='glyphicon glyphicon-search'></span> ดูรายละเอียด </a></td>
          </tr><tr>
          <td align='center' class='clearfix hidden-xs'>10</td>
          <td><span class='glyphicon glyphicon-calendar'></span> 29 ก.ย. 2560<br/></td>
          <td><a href='public_detail.php?id=41'><i class='fa fa-paper-plane'></i> ลงทะเบียนขอใช้ระบบอินเทอร์เน็ต</a>
          <br><span class='glyphicon glyphicon-eye-open'></span> 4889 <span class='glyphicon glyphicon-save'></span> 0</td>   
          <td align='center'><button class='btn btn-link'><span class='glyphicon glyphicon-remove-circle'></span> ไม่มีไฟล์แนบ</button></td>
          <td align='center' class='clearfix hidden-xs'><a class='btn btn-link' href='public_detail.php?id=41'><span class='glyphicon glyphicon-search'></span> ดูรายละเอียด </a></td>
          </tr>          </tbody>
          </table>
        </div>
        </div>
      </div>
      </div><!-- /.container -->
      <!-- credit -->
      <?php
            include('../credit/credit.php');
      ?>
      <!-- Footer -->
      <?php
            include('../footer.php');
        ?>
<div class="tab"></div>    <!--<script src="js/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="js/jquery.min.js"><\/script>')</script>-->
    <script src="js/bootstrap.min.js"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src="js/holder.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="js/ie10-viewport-bug-workaround.js"></script>
  </body>
  <script src="../dist/js/bootstrap.min.js"></script>
</html>