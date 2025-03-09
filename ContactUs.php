<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>iskuworld : ContactUs</title>
	<?php include('head.php')?>
</head>

<body>
<div class="wrapper">
    <div class="container">
        <div class="header">
        	
        </div>
        <div class="container">
            <div class="content_t">
            	<div class='menu' style="margin-top:30px;">
					<?php include('menu.php') ?>
                </div>
            </div>
            <div class="content_m">
            	<div class="wrap">
                    <div style="padding-top:30px;">                    	
                        <div>
							<h3 class="heading_02">INSTITUTE OF SHOTOKAN KARATE UNITED - ISKU </h3>
							<p>16/A, Jaldhara Apartment, B/h. Jankalyan Press, <br/>
							Karachi Lane, Maninagar West, Ahmedabad, <br/>
                            Gujarat, India-380008<br/><br/>
							Mob.: +91-9327325625<br/>
							E-mail: iskukarate@gmail.com<br/>
							Twitter: <a href= "https://twitter.com/isku_karate">ISKU_karate</a><br/>
							Website: <a href="http://www.iskuworld.com">www.iskuworld.com</a><br/>
							Facebook: <a href="https://www.facebook.com/tariq.mohd.549?fref=ts" target="_blank">ISKU World</a><br/>
							</p>
							<h3 class="heading_01">Enquiry</h3>
                    
							<div class="form_box">
                            	<form action="sendEmail.php" method="post">
                            		<div class="form">
                                		<div class="form_tag">Name:</div>
                                	    <div class="form_fild"><input name="userName" type="text" class="sub" /></div>
                                	</div>
                                	<div class="form">
                                		<div class="form_tag">Email:</div>
                                	    <div class="form_fild"><input name="userEmail" type="text" class="sub" /></div>
                                	</div>
                                	<div class="form">
                                		<div class="form_tag">Telephone:</div>
                                	    <div class="form_fild"><input name="userPhone" type="text" class="sub" /></div>
                                	</div>
                               		<div class="form">
                                		<div class="form_tag">Message:</div>
                                	    <div class="form_fild"><textarea name="userMsg" cols="" rows="" class="sub1"></textarea></div>
                               		</div>
                                	<div class="form">
                                		<div class="form_tag"></div>
                                	    <div class="form_fild"><input name="" type="submit" value="Submit" /><input name="" type="reset" value="Clear" /></div>
                                	</div>
                                </form> 
                            </div>
                        </div>
                    </div>
                </div>
            </div>
			<div class="content_b"></div>
            
        </div>
        <div class="footer">
			<?php include('footer.php') ?>
        </div>
    </div>
</div>
</body>
</html>