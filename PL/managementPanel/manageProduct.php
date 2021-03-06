﻿<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>داروخانه دکتر آل احمد - صفحه اصلی</title>

    <!-- Bootstrap Core CSS -->
    <link href="../fonts/farsi.css" rel="stylesheet" type="text/css" />
    <link href="../css/bootstrap/bootstrap.min.css" rel="stylesheet">
    <link href="../css/page/pageFeature.css" rel="stylesheet">
    <link href="../css/page/animate.css" rel="stylesheet">
    <link href="../css/bootstrap/bootstrap-rtl.min.css" rel="stylesheet" type="text/css" />
    <link href="../css/shop/shopHomepage.css" rel="stylesheet">
	<link href="../css/shop/addPro.css" rel="stylesheet">
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
	<!--JavaScript-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js" type="text/javascript"></script>
    <script src="../js/bootstrap/bootstrap.min.js" type="text/javascript"></script>
    <script src="../js/memberHandler/logoutM.js" type="text/javascript"></script>
	<script src="../js/shop/addNewProduct.js" type="text/javascript"></script>
    <!--<script src="js/jquery.js" type="text/javascript"></script>-->
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
	<?php
	session_start();
	if(isset($_SESSION['name']) && !empty($_SESSION['name']))
	{
		$user = $_SESSION['name'] . ' ' . $_SESSION['family'] ;
		$status = "خروج";
		$login = 1;
	}
	else
	{
		$user = "حساب شخصی";
		$status = "ورود";
		$login = 0;
	}
	?>
	<script>
		login = <?php echo $login; ?>
	</script>
    <!-- Navigation -->
    <div class="container">
                <img src="../images/logo.png" alt="Nevia Premium Template" width="70" height="78" />
                        <font size="5"><b style="font-family:IranNastaliq">داروخانه دکتر سادات آل احمد</b></font>
				<button type="button" style="float:left" class="btn btn-default btncolor" id="lgname"><?php echo $user; ?><i class="fa fa-user"></i></button>
                <button type="button"  style="float:left" class="btn btn-default btncolor" id="myBtn">
                    خروج<i class="fa fa-lock"></i>
                </button>
                
        <!-- Modal -->
        <div class="modal fade" id="myModal" role="dialog" >
            <div class="modal-dialog">
    
                <!-- Modal content-->
                <div class="modal-content">
                <div class="modal-header" >
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4><span class="glyphicon glyphicon-lock"></span> ورود</h4>
                </div>
                <div class="modal-body" style="padding:40px 50px;">
                    <form role="form">
                    <div class="form-group">
                        <label for="usrname"><span class="glyphicon glyphicon-user"></span> نام کاربری</label>
                        <input type="text" class="form-control" id="usrname" placeholder="نام کاربری یا ایمیل خود را وارد کنید">
                    </div>
                    <div class="form-group">
                        <label for="psw"><span class="glyphicon glyphicon-eye-open"></span> رمز عبور</label>
                        <input type="text" class="form-control" id="psw" placeholder="رمز عبور را وارد کنید">
                    </div>
                    <div class="checkbox">
                        <label><input type="checkbox" value="" checked>مرا به خاطر بسپار</label>
                    </div>
                        <button type="submit" class="btn btn-success btn-block"><span class="glyphicon glyphicon-off"></span>ورود</button>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-danger btn-default pull-left" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> لغو</button>
                    <p>عضو نیستید؟  <a href="../memberHandler/register.php">ثبت نام</a></p>
                    <p>رمز خود را فراموش کرده اید؟ <a href="#">رمز عبور</a></p>
                </div>
                </div>
      
            </div>
            </div> 
    </div>

    <nav class=" navbar navbar-inverse navbar-center col-md-12" role="navigation" style="background-color:darkgreen; width:98%; padding-right:1%;" id="navtitr" >
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header" >
                <button type="button" class="navbar-toggle pull-right" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!--<a class="navbar-brand navbar-right" href="#">داروخانه دکتر سادات آل احمد</a>-->
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right" style="font-size:large; font-family:'B Mitra'">
                    <li >
                        <a href="manageEmployer.php">مدیریت کارمندان<i class="fa fa-home"></i></a>
                    </li>
                    <li class="active">
                        <a href="manageProduct.php">مدیریت کالاها<i class="fa fa-medkit"></i></a>
                    </li>
                    <li>
                        <a href="manageComment.php">مشاهده نظرات<i class="fa fa-commenting"></i></a>
                    </li>
                </ul>
                <!--search mitune inja ham bashe!-->
            </div>
            <!-- /.navbar-collapse -->
          </div>
    </nav>

    <!-- Page Content -->
        <div class="row" >
            <div class="col-md-2 hidden-xs hidden-sm" >       
                 <div id="Div1" class="affix" style="width: 212px;">
                    <div id="Div2">
                        <ul class="nav nav-pills nav-stacked">
                           <li class="activ">
                            <a href="#navtitr" style="color:darkgreen; font-weight:bold">افزودن کالا</a>
                           </li>
                           <li class="">
                            <a href="#edit" style="color:darkgreen; font-weight:bold">افزودن تبلیغات</a>
                           </li>
                           <li class="">
                            <a href="#report" style="color:darkgreen; font-weight:bold">مشاهده گزارشات مالی</a>
                           </li>
                      </ul>            
                    </div>
                    <ul class="nav nav-pills nav-stacked">
                    <li>
                    <a href="#navtitr" class="small" style="color:darkgreen; font-weight:bold">بازگشت به ابتدای صفحه</a>
                    </li>
                    </ul>        
                 </div>
            </div>

            <div class="col-md-8 col-sm-8" >
                <div class="panel panel-default" style="background-color:#a7d4a7" id="add">
                    <h1 style="text-align:center">افزودن کالای جدید</h1>
                    <div class="panel-body">
						<form id="uploadForm" action="upload.php" method="post" enctype="multipart/form-data"> 
<div class="form-group col-md-3 col-sm-3 col-lg-3">
                                            <label> نام کالا :</label>
                                            <input class="form-control" type="text" name="pname" value="" />
                                        </div> 
                                        <div class="form-group col-md-3 col-sm-3 col-lg-3">
                                            <label> بار کد کالا :</label>
                                            <input class="form-control" type="text" name="pcode" value="" />
                                        </div>
                                        <div class="form-group col-md-3 col-sm-3 col-lg-3">
                                            <label> قیمت کالا :</label>
                                            <input class="form-control" type="text" name="pprice" value="" />
                                        </div>
                                        <div class="form-group col-md-3 col-sm-3 col-lg-3">
                                            <label>دسته کالا</label>
											<select name="pcateg" class="form-control">
												<option value="arayeshi">آرایشی</option>
												<option value="behdashti">بهداشتی</option>
												<option value="ortopedy">ارتوپدی</option>
												<option value="mokamel">مکمل دارویی</option>
												<option value="tajhizat">تجهیزات پزشکی</option>
											</select>
                                        </div>
						

						<div class="form-group col-md-3 col-sm-3 col-lg-3">													
						<label>بار گذاری عکس کالا :</label><br/>
						<input name="userImage" id="userImage" type="file" class="inputFile" />
						<br/>
						<input type="submit" id="sabt" value="تایید و افزودن" class="btnSubmit" />
						</div>
							
						</form>
<div class="alert alert-danger" id="error">
							</div>
							<div class="alert alert-success" id="successful">
							</div>
                        <!--<form id="uploadForm" action="upload.php" method="post" enctype="multipart/form-data">
                            <div class="col-sm-12 col-lg-12 col-md-12 " style=" font-size:large">
                                        <div class="form-group col-md-3 col-sm-3 col-lg-3">
                                            <label> نام کالا :</label>
                                            <input class="form-control" type="text" name="pname" value="" />
                                        </div> 
                                        <div class="form-group col-md-3 col-sm-3 col-lg-3">
                                            <label> بار کد کالا :</label>
                                            <input class="form-control" type="text" name="pcode" value="" />
                                        </div>
                                        <div class="form-group col-md-3 col-sm-3 col-lg-3">
                                            <label> قیمت کالا :</label>
                                            <input class="form-control" type="text" name="pprice" value="" />
                                        </div>
                                        <div class="form-group col-md-3 col-sm-3 col-lg-3">
                                            <label>دسته کالا</label>
											<select name="pcateg" class="form-control">
												<option value="1">آرایشی</option>
												<option value="2">بهداشتی</option>
												<option value="3">ارتوپدی</option>
												<option value="4">مکمل دارویی</option>
												<option value="5">تجهیزات پزشکی</option>
											</select>
                                        </div>
										<div class="form-group col-md-3 col-sm-3 col-lg-3">
											<label>بارگذاری عکس کالا :</label><br/>
											<input name="userImage" id="userImage" type="file"  />
											<input type="submit" value="تایید و افزودن" id="sabt" class="btn btn-default left" />
											<div id="targetLayer">
											
											</div>
										</div>-->
                                        
                            <!--</div>-->
                                
							
                             
                        </div>
                    </div>
<!---------------------------------------------------------------------------------->
					
<!---------------------------------------------------------------------------------->
                <div class="panel panel-default" style="background-color:#a7d4a7" id="edit">
              <h1 style="text-align:center">افزودن تبلیغات</h1>
                <div class="panel-body">        

                    <form role="form">
                        <div class="col-sm-12 col-lg-12 col-md-12 " style=" font-size:large">
                            <div class="form-group col-md-3 col-sm-3 col-lg-3">
                                <label> نام محصول:</label>
                                <input class="form-control" type="text" name="" value="" />
                            </div>
                            <div class="form-group col-md-3 col-sm-3 col-lg-3">
                                <label> نام شرکت سازنده:</label>
                                <input class="form-control" type="text" name="" value="" />
                            </div>
                            <div class="form-group col-md-3 col-sm-3 col-lg-3">
                                <label> بار کد محصول:</label>
                                <input class="form-control" type="text" name="" value="" />
                            </div>
                            <div class="form-group col-md-3 col-sm-3 col-lg-3">
                                <label> تاریخ تولید:</label>
                                <input class="form-control" type="text" name="" value="" />
                            </div>
                            <div class="form-group col-md-3 col-sm-3 col-lg-3">
                                <label> تاریخ انقضا:</label>
                                <input class="form-control" type="text" name="" value="" />
                            </div>
                            <div class="form-group col-md-3 col-sm-3 col-lg-3">
                                <label> قیمت محصول:</label>
                                <input class="form-control" type="text" name="" value="" />
                            </div>
                            <div class="form-group col-md-3 col-sm-3 col-lg-3">
                                <label> شماره نمایندگی توزیع:</label>
                                <input class="form-control" type="text" name="" value="" />
                            </div>
                            <div class="form-group col-md-3 col-sm-3 col-lg-3">
                                <label> رابط خرید:</label>
                                <input class="form-control" type="text" name="" value="" />
                            </div>
                        </div>
                        <div class="col-md-2" style="padding-top:3%;">
                            <button type="submit" class="btn btn-default left">اصلاح</button>
                        </div>
                    </form>        
                </div>
            </div>
                <div class="panel panel-default col-md-12" style="background-color:#a7d4a7; float:left" id="report">
                    <h1 style="text-align:center">مشاهده گزارش خرید و فروش</h1>
                    <div class="panel-body">
                        <form class="form-inline" role="form">
                            <div class="container table-responsive col-md-12">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>ردیف</th>
                                            <th>نام محصول</th>
                                            <th>شرکت سازنده</th>
                                            <th>میزان خرید در ماه جاری</th>
                                            <th>میزان فروش  در ماه جاری</th>
                                            <th>میزان سود</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th>1</th>
                                            <th>صندلی چرخ دار</th>
                                            <th>پاک سمن</th>
                                            <th>15</th>
                                            <th>6</th>
                                            <th>120/000</th>
                                        </tr>
                                        <tr>
                                            <th>1</th>
                                            <th>مکمل غذایی</th>
                                            <th>داروسازان</th>
                                            <th>20 بسته</th>
                                            <th>3 بسته</th>
                                            <th>10/000</th>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </form>
                    </div>
                </div>

        </div>
    </div>
    

    <!-- jQuery -->
    

    <!-- Bootstrap Core JavaScript -->
    
    <!-- log out from management -->
    <!--<script type="text/javascript">
        function myclose()
        {
            var retVal = confirm("آیا می خواهید از پنل مدیریت خارج شوید؟")
            if (retVal == true) {
                window.close(this);
            }
        }
    </script>-->
    
</body>

</html>
