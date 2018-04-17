<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>نظر سنجي</title>

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800"
          rel="stylesheet">

    <!-- Bootstrap CSS File -->
    <link href="{{ asset('dist/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('dist/css/common.css') }}" rel="stylesheet">

    <!-- Libraries CSS Files -->
    <link href="{{asset('dist/css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{asset('dist/css/flaticon.css')}}" rel="stylesheet">
    <link href="{{asset('dist/css/bootstrap.css')}}" rel="stylesheet">
    <link href="{{ asset('css/user/animate.min.css') }}" rel="stylesheet">
    <link href="'/dist/css/bootstrap.css'" rel="stylesheet">
    <!-- Main Stylesheet File -->
    <link href="{{ asset('css/user/customs.css') }}" rel="stylesheet">

    <!-- =======================================================
      Theme Name: Imperial
      Theme URL: https://bootstrapmade.com/imperial-free-onepage-bootstrap-theme/
      Author: BootstrapMade.com
      Author URL: https://bootstrapmade.com
    ======================================================= -->
    <style>
        #cam1{
            margin: auto;
            width: 70%;
            height: 90%;
            margin-top: 20px;
        }
    </style>
</head>

<body style="background-color:#F7F7F7; ">

<header id="header">
    <div class="container">

        <div id="logo">
            <a href="#hero"><img src="{{ asset('img/user/logo.png') }}" alt="" title=""/></a>
            <!-- Uncomment below if you prefer to use a text image -->
            <!--<h1><a href="#hero">Header 1</a></h1>-->
        </div>

        <nav id="nav-menu-container">
            <ul class="nav-menu">
                <li class="menu-active"><a href="#hero">خانه</a></li>
                <li><a href="#about">درباره ما</a></li>
                <li><a href="#services">خدمات</a></li>
                {{--<li><a href="#portfolio">اخبار</a></li>--}}
                <li><a href="#testimonials">اخبار</a></li>
                <li><a href="#team">اساتید</a></li>
                {{--<li class="menu-has-children"><a href="">Drop Down</a>--}}
                {{--<ul>--}}
                {{--<li><a href="#">Drop Down 1</a></li>--}}
                {{--<li class="menu-has-children"><a href="#">Drop Down 2</a>--}}
                {{--<ul>--}}
                {{--<li><a href="#">Deep Drop Down 1</a></li>--}}
                {{--<li><a href="#">Deep Drop Down 2</a></li>--}}
                {{--<li><a href="#">Deep Drop Down 3</a></li>--}}
                {{--<li><a href="#">Deep Drop Down 4</a></li>--}}
                {{--<li><a href="#">Deep Drop Down 5</a></li>--}}
                {{--</ul>--}}
                {{--</li>--}}
                {{--<li><a href="#">Drop Down 3</a></li>--}}
                {{--<li><a href="#">Drop Down 4</a></li>--}}
                {{--<li><a href="#">Drop Down 5</a></li>--}}
                {{--</ul>--}}
                {{--</li>--}}
                <li><a href="#contact">تماس با ما</a></li>
                <li><a href="camment">نظرات</a></li>
            </ul>
        </nav><!-- #nav-menu-container -->
    </div>
</header><!-- #header -->

    <div id="cam1" class="container ">
        <div class="panel panel-success">
            <div class="panel-heading"><h4 class="form-signin-heading">فرم نظرات</h4></div>
            <div class="panel-body" >

        <form class="form-horizontal  col-lg-12 pull-right " style="padding: 4px; padding-right: 210px;padding-left: 210px" method="POST" action="{{url('/home/post')}}">
            {{ csrf_field() }}
            <div class="form">
                <div id="sendmessage"></div>
                <div id="errormessage"></div>
                <div class="form-group ">
                    <input type="text" name="name" class="form-control " id="name" style="font-family: b Nazi"  placeholder="نام و نام خانوادگي(اختياري)"
                           data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                    <div class="validation"></div>
                </div>
                <div class="form-group  ">
                    <input type="email" class="form-control" name="email" id="email" style="font-family: b Nazi" placeholder="ايميل"
                           data-rule="email" data-msg="Please enter a valid email" required/>
                    <div class="validation"></div>
                </div>
                <div class="form-group  ">
                    <input type="tel" class="form-control" name="tel" id="tel" style="font-family: b Nazi" placeholder="تلفن تماس(اختياري)"
                           data-rule="tel" data-msg="Please enter a valid email"/>
                    <div class="validation"></div>
                </div>

                <label style="padding-left: 15px; font-family: 'B Nazanin';">جنسيت:</label>
                <input style="margin-left: 5px;" type="radio" name="gens" id="gens"  /><label style="padding-left: 40px;">مرد</label>
                <input style="margin-left: 5px;" type="radio" name="gens" id= "gens" checked /><label>زن</label>
                <br/>
                <br/>

                <label style="padding-left: 15px; font-family: 'B Nazanin';">ماه:</label>
                <input style="margin-left: 5px;" type="radio" name="a" id="a"  /><label style="padding-left: 40px;">فروردین</label>
                <input style="margin-left: 5px;" type="radio" name="a" id= "a" checked /><label>اردیبهشت</label>
                <br/>
                <br/>

                <label style="padding-left: 15px; font-family: 'B Nazanin';">اتوماسيون انتخاب واحد سايت چگونه است؟</label>
                <br/>
                <input style="margin-left: 5px;" type="radio" name="nz1" id="nz1"  /><label style="padding-left: 50px;">عالي</label>
                <input style="margin-left: 5px;" type="radio" name="nz1"  id="nz1" /><label style="padding-left: 50px;">خوب</label>
                <input style="margin-left: 5px;" type="radio" name="nz1" id="nz1" /><label style="padding-left: 40px;">متوسط</label>
                <input style="margin-left: 5px;" type="radio" name="nz1" id="nz1" checked /><label>ضعيف</label>
                <br/>
                <br/>

                <label style="padding-left: 15px; font-family: 'B Nazanin';">سطح علمي مطالب آيا مناسب است؟</label>
                <br/>
                <input style="margin-left: 5px;" type="radio" name="nz2" id="nz2" /><label style="padding-left: 50px;">عالي</label>
                <input style="margin-left: 5px;" type="radio" name="nz2" id="nz2"  /><label style="padding-left: 50px;">خوب</label>
                <input style="margin-left: 5px;" type="radio" name="nz2" id="nz2" /><label style="padding-left: 40px;">متوسط</label>
                <input style="margin-left: 5px;" type="radio" name="nz2" id="nz2" checked /><label>ضعيف</label>
                <br/>
                <br/>

                <div class="form-group  ">
                    <label style="padding-left: 15px; margin-right: 10px; font-family: 'B Nazanin';">نظر شما در باره اساتيد چيست؟</label>
                    <br/>
                    <input type="text" class="form-control" name="subject" id="subject" style="font-family: b Nazi;" placeholder="پاسخ"
                           data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject"/>
                    <div class="validation"></div>
                </div>
                <div class="form-group  ">
                                    <textarea class="form-control" name="message" rows="5" data-rule="required"
                                              data-msg="Please write something for us"  style="font-family: b Nazi;" placeholder="پيشنهادات"></textarea>
                    <div class="validation"></div>
                </div>
                <div class="text-right">
                    <button data-title="send_message_us" class="btn btn-primary" type="submit" >ارسال</button>
                </div>
            </div>
        </form>
            </div>
        </div>
    </div>

    <footer id="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="copyright">
                        تمام حقوق برای<strong> مرکز تربیت مدرس قرآن قائن </strong>محفوظ است.
                    </div>
                    <div class="credits">
                        امروز گرسنگي فكر از گرسنگي نان فاجعه آميز تر است
                    </div>
                </div>
            </div>
        </div>
    </footer><!-- #footer -->


</body>