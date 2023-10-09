<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description"
        content="โรงพยาบาลวังสามหมอ เป็นโรงพยาบาลขนาด30เตียง สังกัดสำนักงานปลัดกระทรวง ที่อยู่ 108 หมู่11 ตำบลวังสามหมอ อำเภอวังสามหมอ จังหวัดอุดรธานี 41280 ">
    <meta name="keywords"
        content="โรงพยาบาลวังสามหมอ, โรงพยาบาล, วังสามหมอ, โรงพยาบาลชุมชน, อุดรธานี, จังหวัดอุดรธานี, wangsammohospital, wangsammo, hospital, udonthani">
    <link rel="shortcut icon" href="dist/img/icon-maetha.png">
    <title>โรงพยาบาลภูกามยาว| Phukamyao Hospital : หน้าหลัก</title>
    <link rel="stylesheet" href="dist/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="dist/css/scrolltop.css" type="text/css" />
    <link rel="stylesheet" href="dist/css/submenu.css" type="text/css" />
    <link rel="stylesheet" href="dist/css/slide.css" type="text/css" />
    <link rel="stylesheet" href="dist/css/carousel.css" type="text/css" />
 
    <link rel="stylesheet" href="dist/css/style.css" type="text/css" />
    <link rel="stylesheet" href="dist/css/font-awesome.min.css" type="text/css" />


    <script type="text/javascript" src="dist/js/jquery-1.11.3.min.js"></script>
    <script type="text/javascript" src="dist/js/jssor.slider.mini.js"></script>
    <script type="text/javascript" src="dist/js/scrolltop.js"></script>
    <script type="text/javascript" src="dist/js/slide.js"></script>

    <style>
    .affix {
        top: 0;
        width: 100%;
        z-index: 9999 !important;
    }

    .affix+.container-fluid {
        padding-top: 70px;
    }

    .boxceo {
        padding: 30px;
        background-color: #056839;
        margin-top: 45px;
    }
    </style>
    <script src="https://www.google.com/recaptcha/api.js?render=6LfwuiMaAAAAACAL4lYAgq7Uy5-QJtgb-1JxRrXD"></script>
    <script>
    grecaptcha.ready(function() {
        grecaptcha.execute('6LfwuiMaAAAAACAL4lYAgq7Uy5-QJtgb-1JxRrXD', {
            action: 'login'
        }).then(function(token) {
            document.getElementById("token").value = token;
        });
    });
    </script>
</head>

<body id="top">
    <div class="navbar">
        <!-- ส่วนด้านบน -->
        <div class="container">
        <div class="row">
                <div class='col-md-6'>
                    <h1>
                        <a href="index.php"><img src="img/loo.png" class="img-responsive"alt="โรงพยาบาลภูกามยาว" title="โรงพยาบาลภูกามยาว จังหวัดพะเยา"></a>
                    </h1>
                </div>

                <div class='col-md-6'>
                    <div class='clearfix hidden-xs media'>
                        <img src="img/hotline.png" class="img-responsive"
                            alt="สายด่วน 042-387740, 042-387430, 042-387602"
                            title="สายด่วน 042-387740, 042-387430, 042-387602">
                    </div>
                </div>
            </div>
        </div>
        <!--  -->

        <!-- แถบเมนู -->
            <?php
                include("navbar.php");
            ?>
        <!--  -->

    </div>
        <!-- slidesbar -->
            <?php
                include("slides.php");
            ?>
        <!--  -->

        <!-- ข่าวสารโรงพยาบาล -->
            <?php
                include("message-hospital.php");
            ?>
        <!--  -->

        <!-- กิจกรรม -->
            <?php
                include("activity/activity.php");
            ?>
        <!--  -->

        <!-- ข่าวประชาสัมพันธ์ -->
            <?php
                include("public_relations/relations.php");
            ?>
        <!--  -->

        <!-- บริการประชาชน -->
            <?php
                include("public_service/service.php");
            ?>
        <!--  -->

    </div><!-- end row ข่าวประชาสัมพันธ์ -->

        <!-- สมัครงาน -->
            <?php
                include("register_employee/regis.php");
            ?>
        <!--  -->

   
        <!-- ประกาศ -->
            <?php
                include("notify/notify.php");
            ?>
        <!--  -->

    <!-- ita -->
        <?php
            include("ita/ita.php");
        ?>
    <!--  -->

   <!-- บทความสาระน่ารู้ล่าสุด -->
        <?php
            include("research_article/research_article.php");
        ?>
    <!--  -->

    <!-- ดาวน์โหลด -->
        <?php
            include("doc_dowload/doc.php");
        ?>
    <!--  -->

    <!-- ลิงค์ระบบอื่นๆโรงพยาบาล -->
        <?php
            include("link_other/system_other.php");
        ?>
    <!--  -->

</div><!-- /.container -->

    <!-- credit -->
        <?php
            include("credit/credit.php");
        ?>

    <!-- Footer -->
        <?php
            include("footer.php");
        ?>
    <!--  -->

    <div class="tab"></div>
    <script src="dist/js/bootstrap.min.js"></script>
</body>

</html>