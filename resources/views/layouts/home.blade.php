<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="amalia is clean simple business theme built with bootstrap">
    <meta name="keywords" content="amalia, bootstrap, wrapbootstrap-theme, bootstrap-theme, responsive, business-theme">
    <meta name="author" content="@avriqq">
    <title>บทเรียนออนไลน์</title>

    <!-- Bootstrap -->
    <link href="{{ asset('boxed/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,600' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Bitter:400,700' rel='stylesheet' type='text/css'>
    <link href="{{ asset('boxed/css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('boxed/css/magnific-popup.css') }}" rel="stylesheet">
    <link href="{{ asset('boxed/css/style.css') }}" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="{{ asset('boxed/js/html5shiv.min.js') }}"></script>
      <script src="{{ asset('boxed/js/respond.min.js') }}"></script>
    <![endif]-->
  </head>
  <body>

    <div class="container">

      <!-- header -->
      <div class="row">
        <div class="col-md-12">


                <img src = "{{ asset('boxed/img/logo.jpg') }}" width="100%"/>

        </div><!-- .col-md-12 -->
      </div><!-- .row -->

      <!-- navbar -->
      <div class="row">
        <div class="col-md-12">
          <nav class="navbar navbar-default">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#amalia-navbar-collapse" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button><!-- .navbar-toggle -->
            </div><!-- .navbar-header -->

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="amalia-navbar-collapse">
              <ul class="nav navbar-nav pull-right">
                <li><a href="">หน้าหลัก <span class="sr-only">(current)</span></a></li>
                <li><a href="">แนะนำบทเรียน</a></li>
                <li><a href="">ความรู้เพิ่มเติม</a></li>
                  <li><a href="">ผู้จัดทำ</a></li>
                  <li><a href="">ผลงานนักเรียน</a></li>
                  <li><a href="">บรรณานุกรม</a></li>
              </ul><!-- .navbar-nav -->
            </div><!-- .navbar-collapse -->
          </nav><!-- .navbar -->
        </div><!-- .col-md-12 -->
      </div><!-- .row -->

      <!-- site-header -->



      <div class="site-main">

        <!-- post-entry -->
        <div class="post-entry">
          <div class="row">

            <!-- content-area -->
            <div class="col-md-8 col-md-push-4 thumbnail" >

             @yield('content')


            </div><!-- .col-md-8 -->

            <!-- sidebar -->
            <div class="col-md-4 col-md-pull-8">

              <section class="widget widget_archive">
                <h2 class="widget-title"><a href = "" class="btn btn-success btn-lg btn-block">แบบทดสอบก่อนเรียน</a></h2>
                <h2 class="widget-title">หน่วยที่ 1 แนะนำ Desktop Author</h2>
                <ul>
                  <li><a href="">จุดประสงค์การเรียนรู้</a></li>
                  <li><a href="">ความรู้เบื้องต้นเกี่ยวกับ Desktop Author</a></li>
                  <li><a href="">วิธีการเข้าสู่โปรแกรม</a></li>
                  <li><a href="">ส่วนประกอบของโปรแกรม</a></li>
                  <li><a href="">ส่วนประกอบของโปรแกรม</a></li>

                    <li><a href="">แบบทดสอบท้ายบทเรียน</a></li>

                </ul>


                  <h2 class="widget-title">หน่วยที่ 2 เริ่มสร้างหนังสืออิเล็กทรอนิกส์</h2>
                  <ul>
                      <li><a href="">จุดประสงค์การเรียนรู้</a></li>
                      <li><a href="">การกำหนดคุณสมบัติเบื้องต้น</a></li>
                      <li><a href="">การแบ่งหน้ากระดาษ</a></li>
                      <li><a href="">การแทรกภาพปกหน้าและกำหนดให้โปร่งใส</a></li>
                      <li><a href="">การเพิ่มหน้ากระดาษ</a></li>
                      <li><a href="">การใส่สีให้หน้ากระดาษ</a></li>
                      <li><a href="">แบบทดสอบท้ายบทเรียน</a></li>


                  </ul>
                  <h2 class="widget-title">หน่วยที่ 3 ข้อความและ Multimedia</h2>
                  <ul>
                      <li><a href="">จุดประสงค์การเรียนรู้</a></li>
                      <li><a href="">การพิมพ์ข้อความลงในหนังสือ</a></li>
                      <li><a href="">การทำภาพ Popup</a></li>
                      <li><a href="">การแทรกไฟล์ MP3</a></li>
                      <li><a href="">การแทรกไฟล์ Animation และวิดีโอ</a></li>
                      <li><a href="">แบบทดสอบท้ายบทเรียน</a></li>

                  </ul>
                  <h2 class="widget-title">หน่วยที่ 4 ปุ่ม Buttons และการเชื่อมโยง</h2>
                  <ul>
                      <li><a href="">จุดประสงค์การเรียนรู้</a></li>
                      <li><a href="">การแทรกปุ่ม Buttons และการเชื่อมโยง</a></li>
                      <li><a href="">การทำสารบัญ และการเชื่อมโยง</a></li>
                      <li><a href="">การกำหนดปกหลังให้มีคุณภาพโปร่งใส</a></li>
                      <li><a href="">แบบทดสอบท้ายบทเรียน</a></li>

                  </ul>

                  <h2 class="widget-title">หน่วยที่ 5 การสร้างแบบทดสอบ</h2>
                  <ul>
                      <li><a href="">จุดประสงค์การเรียนรู้</a></li>
                      <li><a href="">การสร้างคำถามและคำตอบ</a></li>
                      <li><a href="">การสร้างปุ่มสำหรับการส่งแบบทดสอบ</a></li>
                      <li><a href="">แบบทดสอบท้ายบทเรียน</a></li>

                  </ul>

                  <h2 class="widget-title">หน่วยที่ 6 การบีบอัดไฟล์เพื่อเผยแพร่ผลงาน</h2>
                  <ul>
                      <li><a href="">จุดประสงค์การเรียนรู้</a></li>
                      <li><a href="">การบีบอัดไฟล์งานด้วยคำสั่ง Package</a></li>
                      <li><a href="">แบบทดสอบท้ายบทเรียน</a></li>

                  </ul>
                <h2 class="widget-title"><a href = "" class="btn btn-success btn-lg btn-block">แบบทดสอบหลังเรียน</a></h2>
                <h2 class="widget-title"></h2>
              </section><!-- .widget_archive -->


            </div><!-- .col-md-4 -->

          </div><!-- .row -->
        </div><!-- .post-entry -->

        <!-- footer -->
        <div class="footer" style="background-image: {{ asset('img/amalia-image-footer.jpg') }}">
          <div class="row">

            <div class="col-md-12">
              <h4>นางสาวสุภัชรา  อวบอ้วน ครู ชำนาญการ</h4>
              <h4>บทเรียนออนไลน์ เรื่อง การสร้างหนังสืออิเล็กทรอนิกส์ด้วยโปรแกรม Desktop Author</h4>
                <p>ระดับชั้นมัธยมศึกษาปีที่ 1 โรงเรียนบ้านหนองบอนหัวหนองเหล่ายาว</p>


            </div><!-- .col-md-4 -->

            <div class="col-md-4">

            </div><!-- .col-md-4 -->

            <div class="col-md-4">

            </div><!-- .col-md-4 -->

          </div><!-- .row -->
        </div><!-- .footer -->


      </div><!-- .site-main -->

    </div><!-- .container -->

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="{{ asset('boxed/js/jquery.min.js') }}"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="{{ asset('boxed/js/bootstrap.min.js') }}"></script>
    <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false&amp;language=en"></script>
    <script src="{{ asset('boxed/js/gmap3.min.js') }}"></script>
    <script src="{{ asset('boxed/js/jquery.justifiedGallery.min.js') }}"></script>
    <script src="{{ asset('boxed/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('boxed/js/script.min.js') }}"></script>

  </body>
</html>