<?php
	$success = false;
	$error = false;
if (!empty($_POST)) {

	// Used for later to determine result


	// Object syntax looks better and is easier to use than arrays to me
	$post = new stdClass;
	
	// Usually there would be much more validation and filtering, but this
	// will work for now.
	foreach ($_POST as $key => $val)
		$post->$key = trim(strip_tags($_POST[$key]));
		
	// Check for blank fields
	if (empty($post->name) OR empty($post->email) OR empty($post->marital_status))
		$error = true;
		
	else {
		
		// Get this directory, to include other files from
		$dir = dirname(__FILE__);
		
		// Get the contents of the pdf into a variable for later
		ob_start();
		require_once($dir.'/pdf.php');
		$pdf_html = ob_get_contents();
		ob_end_clean();
		
		// Load the dompdf files
		require_once($dir.'/dompdf/dompdf_config.inc.php');
		
		$dompdf = new DOMPDF(); // Create new instance of dompdf
		$dompdf->load_html($pdf_html); // Load the html
		$dompdf->render(); // Parse the html, convert to PDF
		$pdf_content = $dompdf->output(); // Put contents of pdf into variable for later
		
		// Get the contents of the HTML email into a variable for later
		ob_start();
		require_once($dir.'/html.php');
		$html_message = ob_get_contents();
		ob_end_clean();
		
		// Load the SwiftMailer files
		require_once($dir.'/swift/swift_required.php');

		$mailer = new Swift_Mailer(new Swift_MailTransport()); // Create new instance of SwiftMailer

		$message = Swift_Message::newInstance()
				       ->setSubject('How To Create and Send An HTML Email w/ a PDF Attachment') // Message subject
					   ->setTo(array($post->email => $post->name)) // Array of people to send to: send to specify email all the time ->setTo(array('your_email@website.com' => 'Your Name'))  
					   ->setFrom(array('no-reply@net.tutsplus.com' => 'Nettuts+')) // From:
					   ->setBody($html_message, 'text/html') // Attach that HTML message from earlier
					   ->attach(Swift_Attachment::newInstance($pdf_content, 'nettuts.pdf', 'application/pdf')); // Attach the generated PDF from earlier
		
		// Send the email, and show user message
		if ($mailer->send($message))
			$success = true;
		else
			$error = true;
		
	}

}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Santen Psychology</title>
    
    <!-- core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/animate.min.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">
    
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->
<body>

<!--navigation-->
<section id="contact-page">
        <div class="container">
				<?php if ($success==true) { ?>
			<div class="message success">
				<h4>Congratulations! It worked! Now check your email.</h4>
			</div>
		<?php } elseif ($error==true) { ?>
			<div class="message error">
				<h4>Sorry, an error occurred. Try again!</h4>
			</div>
		<?php } ?>
		
		
            <div class="center">        
                <br>
				<br>
				<br>
				<br>
				<img src="img/favicon.ico" width="60" height="60">
				
				<h2> Client Intake Form</h2>
                <p class="lead">Please provide the following information to the best of <br>your ability and answer the questions below. <br><font color="red">Please note: information you provide here is<br>protected as confidential information.</font></p>
				<p class="lead">Please fill out the information below and submit it. <br>If this is not possible we will provide this form for you at<br>your first appointment to complete.</p>
				<p class="lead"><font color="red">It takes about 26 min to complete. </font></p>
				<button onclick="goBack()" class="btn btn-success btn-md">Back To Previous Page</button>

				<script>
				function goBack() {
					window.history.back();
				}
				</script>
			</div> 
            <div class="row contact-wrap"> 
                <div class="status alert alert-success" style="display: none"></div>
				
                <form id="main-contact-form" class="contact-form" name="contact-form" method="post" action="">
					
                    <div class="col-sm-5 col-sm-offset-1">
					<h2><font color="green">Section 1: Personal Information (3 min)</font></h2>
					<br><br>
                    
					
					<div class="form-group">
						<label for="name"><b>Your Name</b></label>
						<input type="text" name="name" id="name" class="form-control" />
						<!--name-->
                    </div>
						
					<div class="form-group">
						<label class="form-label form-label-top" id="DOB" for="DOB"><b>Birth Date</b></label>
         
        
						<div id="cid_46" class="form-input-wide jf-required">
			
						<span class="form-sub-label-container" style="vertical-align: top">
					  
						<select class="form-control" name="DOBday" id="DOBday"><!--DOBday-->
						  <option>  </option>
						  <option value="1"> 1 </option>
						  <option value="2"> 2 </option>
						  <option value="3"> 3 </option>
						  <option value="4"> 4 </option>
						  <option value="5"> 5 </option>
						  <option value="6"> 6 </option>
						  <option value="7"> 7 </option>
						  <option value="8"> 8 </option>
						  <option value="9"> 9 </option>
						  <option value="10"> 10 </option>
						  <option value="11"> 11 </option>
						  <option value="12"> 12 </option>
						  <option value="13"> 13 </option>
						  <option value="14"> 14 </option>
						  <option value="15"> 15 </option>
						  <option value="16"> 16 </option>
						  <option value="17"> 17 </option>
						  <option value="18"> 18 </option>
						  <option value="19"> 19 </option>
						  <option value="20"> 20 </option>
						  <option value="21"> 21 </option>
						  <option value="22"> 22 </option>
						  <option value="23"> 23 </option>
						  <option value="24"> 24 </option>
						  <option value="25"> 25 </option>
						  <option value="26"> 26 </option>
						  <option value="27"> 27 </option>
						  <option value="28"> 28 </option>
						  <option value="29"> 29 </option>
						  <option value="30"> 30 </option>
						  <option value="31"> 31 </option>
						</select>
						
					
						<select class="form-control" name="DOBmonth" id="DOBmonth"><!--DOBmonth-->
						  <option>  </option>
						  <option value="January"> January </option>
						  <option value="February"> February </option>
						  <option value="March"> March </option>
						  <option value="April"> April </option>
						  <option value="May"> May </option>
						  <option value="June"> June </option>
						  <option value="July"> July </option>
						  <option value="August"> August </option>
						  <option value="September"> September </option>
						  <option value="October"> October </option>
						  <option value="November"> November </option>
						  <option value="December"> December </option>
						</select>
						
					 
						<select class="form-control" name="DOByear" id="DOByear"><!--DOByear-->
						  <option>  </option>
						  <option value="2015"> 2015 </option>
						  <option value="2014"> 2014 </option>
						  <option value="2013"> 2013 </option>
						  <option value="2012"> 2012 </option>
						  <option value="2011"> 2011 </option>
						  <option value="2010"> 2010 </option>
						  <option value="2009"> 2009 </option>
						  <option value="2008"> 2008 </option>
						  <option value="2007"> 2007 </option>
						  <option value="2006"> 2006 </option>
						  <option value="2005"> 2005 </option>
						  <option value="2004"> 2004 </option>
						  <option value="2003"> 2003 </option>
						  <option value="2002"> 2002 </option>
						  <option value="2001"> 2001 </option>
						  <option value="2000"> 2000 </option>
						  <option value="1999"> 1999 </option>
						  <option value="1998"> 1998 </option>
						  <option value="1997"> 1997 </option>
						  <option value="1996"> 1996 </option>
						  <option value="1995"> 1995 </option>
						  <option value="1994"> 1994 </option>
						  <option value="1993"> 1993 </option>
						  <option value="1992"> 1992 </option>
						  <option value="1991"> 1991 </option>
						  <option value="1990"> 1990 </option>
						  <option value="1989"> 1989 </option>
						  <option value="1988"> 1988 </option>
						  <option value="1987"> 1987 </option>
						  <option value="1986"> 1986 </option>
						  <option value="1985"> 1985 </option>
						  <option value="1984"> 1984 </option>
						  <option value="1983"> 1983 </option>
						  <option value="1982"> 1982 </option>
						  <option value="1981"> 1981 </option>
						  <option value="1980"> 1980 </option>
						  <option value="1979"> 1979 </option>
						  <option value="1978"> 1978 </option>
						  <option value="1977"> 1977 </option>
						  <option value="1976"> 1976 </option>
						  <option value="1975"> 1975 </option>
						  <option value="1974"> 1974 </option>
						  <option value="1973"> 1973 </option>
						  <option value="1972"> 1972 </option>
						  <option value="1971"> 1971 </option>
						  <option value="1970"> 1970 </option>
						  <option value="1969"> 1969 </option>
						  <option value="1968"> 1968 </option>
						  <option value="1967"> 1967 </option>
						  <option value="1966"> 1966 </option>
						  <option value="1965"> 1965 </option>
						  <option value="1964"> 1964 </option>
						  <option value="1963"> 1963 </option>
						  <option value="1962"> 1962 </option>
						  <option value="1961"> 1961 </option>
						  <option value="1960"> 1960 </option>
						  <option value="1959"> 1959 </option>
						  <option value="1958"> 1958 </option>
						  <option value="1957"> 1957 </option>
						  <option value="1956"> 1956 </option>
						  <option value="1955"> 1955 </option>
						  <option value="1954"> 1954 </option>
						  <option value="1953"> 1953 </option>
						  <option value="1952"> 1952 </option>
						  <option value="1951"> 1951 </option>
						  <option value="1950"> 1950 </option>
						  <option value="1949"> 1949 </option>
						  <option value="1948"> 1948 </option>
						  <option value="1947"> 1947 </option>
						  <option value="1946"> 1946 </option>
						  <option value="1945"> 1945 </option>
						  <option value="1944"> 1944 </option>
						  <option value="1943"> 1943 </option>
						  <option value="1942"> 1942 </option>
						  <option value="1941"> 1941 </option>
						  <option value="1940"> 1940 </option>
						  <option value="1939"> 1939 </option>
						  <option value="1938"> 1938 </option>
						  <option value="1937"> 1937 </option>
						  <option value="1936"> 1936 </option>
						  <option value="1935"> 1935 </option>
						  <option value="1934"> 1934 </option>
						  <option value="1933"> 1933 </option>
						  <option value="1932"> 1932 </option>
						  <option value="1931"> 1931 </option>
						  <option value="1930"> 1930 </option>
						  <option value="1929"> 1929 </option>
						  <option value="1928"> 1928 </option>
						  <option value="1927"> 1927 </option>
						  <option value="1926"> 1926 </option>
						  <option value="1925"> 1925 </option>
						  <option value="1924"> 1924 </option>
						  <option value="1923"> 1923 </option>
						  <option value="1922"> 1922 </option>
						  <option value="1921"> 1921 </option>
						  <option value="1920"> 1920 </option>
							</select>
						
							</span>
							</div>
					</div>	
						
				
						
                    <div class="form-group">
						<label class="form-label form-label-right form-label-auto" id="label_93" for="input_93"> <b>Marital Status:</b> </label>
						 <select class="form-control"  id="marital_status" name="marital_status">
						 <option value="">  </option>
						 <option value="Never Married"> Never Married</option>
						 <option value="Domestic Partnership"> Domestic Partnership </option>
						 <option value="Separated">Separated</option>
						 <option value="Married"> Married </option>
						 <option value="Divorced"> Divorced </option>
						 <option value="Widowed"> Widowed </option>
					     </select>
						<!--marital_status-->
                    </div>
						
						<br><br><br><br>
					<div class="form-group">
						<label class="form-label form-label-right form-label-auto" id="address" for="address"><b>Address</b></label><br>
						
						<label class="form-sub-label" for="street1" id="street1" style="min-height: 13px;"> <b>Street Address</b> </label><br>
						<input class="form-control" type="text" name="street1" id="street1" /><br>
						<!--street1-->
						<label class="form-sub-label" for="street2" id="street2" style="min-height: 13px;"> <b>Street Address Line 2</b> </label><br>
						<input class="form-control" type="text" name="street2" id="street2" size="46" /><br>
						<!--street2-->
						<label class="form-sub-label" for="city" id="city" style="min-height: 13px;"> <b>City</b> </label><br>
						<input class="form-control" type="text" name="city" id="city" size="21" /><br>
						<!--city-->
						<label class="form-sub-label" for="state" id="state" style="min-height: 13px;"> <b>State / Province</b> </label><br>
						<input class="form-control" type="text" name="state" id="state" size="22" /><br>
						<!--state-->
						<label class="form-sub-label" for="postal" id="postal" style="min-height: 13px;"> <b>Postal / Zip Code</b> </label><br>
						<input class="form-control" type="text" name="postal" id="postal" size="10" /><br>
						<!--postal-->
					</div>
						
						<br>
						<h2><font color="green">Section 2: Refer and Medicare (2 min)</font></h2>
						<br>
						
					<div class="form-group">
						<label class="form-label form-label-right form-label-auto" id="label_89" for="input_89"> <b>Referred by (if any)</b> </label>
						<input type="text" class="form-control" data-type="input-textbox" id="refer" name="refer" size="20" value="" />
						<!--refer-->
					</div>
						
					<div class="form-group">
						<label class="form-label form-label-top" id="label_159" for="input_159"> <b>Medicare# </b></label>
						<input type="text" class="form-control" data-type="input-textbox" id="medicare" name="medicare" size="20" value="" />
						<!--medicare-->
						<label class="form-label form-label-top" id="label_164" for="input_164"> <b>Medicare Expiry</b> </label>
						<input type="text" class="form-control" data-type="input-textbox" id="medicare_expiry" name="medicare_expiry" size="20" value="" />
						<!--medicare_expiry-->
						<label class="form-label form-label-top" id="medicare_ref" for="medicare_ref"> <b>Ref# </b></label>
						<input type="text" class="form-control" data-type="input-textbox" id="medicare_ref" name="medicare_ref" size="20" value="" />
						<!--medicare_ref-->
					</div>
					
					<div class="form-group">
					<br>
					<h2><font color="green">Section 3: Emergency Contact (2 min)</font></h2>
					<br>
						<label class="form-label form-label-top" id="label_118" for="emergency_name"> <b>Emergency Contact Name </b></label>
						<input type="text" class="form-control" data-type="input-textbox" id="emergency_name" name="emergency_name" size="30" value="" />
					<!--emergency_name-->
					</div>
						  
					<div class="form-group">
						<label class="form-label form-label-top" id="label_87" for="input_87"> <b>Phone Number </b></label>
						<input class="form-control" type="tel" name="emergency_number" id="emergency_number" size="8">
						<!--emergency_number-->
					</div>
					
					
					<div class="form-group">
						<br>
						<h2><font color="green">Section 4: Previous Health Services (2 min)</font></h2>
						<br>
						<label class="form-label form-label-top" id="label_166" for="phs_yes_no"> <b>Previous mental health services (psychotherapy, psychiatricservices, etc.)? </b></label>
						<input  type="radio" name="phs_yes_no" value="Yes">Yes  
						<input  type="radio" name="phs_yes_no" value="No" checked>No
						<!--phs_yes_no-->
						<br>
						<br>
						<br>
						<label class="form-label form-label-top" id="label_168" for="input_168"> <b>Are you currently taking any prescription medication? </b></label>
						<br>
						<input  type="radio" name="current_taking_yes_no" value="Yes">Yes  
						<input  type="radio" name="current_taking_yes_no" value="No" checked>No
						<!--current_taking_yes_no-->
						<br>
						<br>
						<br>
						<label class="form-label form-label-top" id="label_169" for="input_169"> <b>Have you ever been prescribed psychiatric medication? </b></label>
						<br>
						<input  type="radio" name="prescribed_pm_yes_no" value="Yes">Yes  
						<input  type="radio" name="prescribed_pm_yes_no" value="No" checked>No
						<!--prescribed_pm_yes_no-->
						
					</div>
					
					
					<div class="form-group">
						<br>
						<h2><font color="green">Section 5: General Heath And Mental Information (10 min)</font></h2>
						<br>
						<label class="form-label form-label-top" id="label_122" for="input_122"> <b>1: How would you rate your current physical health? </b></label><br>
						<input  type="radio" name="rate_current_health" value="Yes">  Poor<br>  
						<input  type="radio" name="rate_current_health" value="No" checked>  Unsatisfactory<br> 
						<input  type="radio" name="rate_current_health" value="Yes">  Satisfactory<br>   
						<input  type="radio" name="rate_current_health" value="No" checked>  Good<br> 
						<input  type="radio" name="rate_current_health" value="Yes">  Very good<br>
						<br><br>
						<!--rate_current_health-->
						<label class="form-label form-label-top" id="label_173" for="input_173"> <b>2. How would you rate your current sleeping habits?</b> </label><br>
						<input  type="radio" name="rate_current_sleep" value="Yes">  Poor<br>  
						<input  type="radio" name="rate_current_sleep" value="No" checked>  Unsatisfactory<br> 
						<input  type="radio" name="rate_current_sleep" value="Yes">  Satisfactory<br>   
						<input  type="radio" name="rate_current_sleep" value="No" checked>  Good<br> 
						<input  type="radio" name="rate_current_sleep" value="Yes">  Very good<br>
						<br>
						<!--rate_current_sleep-->
					
					</div>
					
					
					<br>
					
					<div class="form-group">
						<label class="form-label form-label-right form-label-auto" id="label_175" for="input_175"> <b>3. How many times per week do you generally exercise? </b></label>
						<input type="text" class="form-control" data-type="input-textbox" id="how_many_exe" name="how_many_exe" size="20" value="" />
						<!--how_many_exe-->
					</div>
					
					<br>
										
					<div class="form-group">
						<label class="form-label form-label-right form-label-auto" id="label_176" for="input_176"> <b>What types of exercise do you participate in? </b></label>
						<textarea id="input_176" class="form-control" name="what_type_exe" cols="40" rows="6"></textarea>
						<!--what_type_exe-->
					</div>
  
  
					<div class="form-group">
						<br>
						<label class="form-label form-label-right form-label-auto" id="label_126" for="input_126"> <b>5. Are you currently experiencing overwhelming sadness, grief or depression? </b></label>
						<input  type="radio" name="sad_yes_no" value="Yes">Yes<br>  
						<input  type="radio" name="sad_yes_no" value="No" checked>No
						<!--sad_yes_no-->
						<br>
						<br>
						<br>
						<label class="form-label form-label-right form-label-auto" id="label_178" for="input_178"> <b>6. Are you currently experiencing anxiety, panic attacks or have any phobias? </b></label>
						<br>
						<input  type="radio" name="anxiety_yes_no" value="Yes">Yes<br>  
						<input  type="radio" name="anxiety_yes_no" value="No" checked>No
						<!--anxiety_yes_no-->
						<br>
						<br>
						<br>
						<label class="form-label form-label-right form-label-auto" id="label_180" for="input_180"> <b>7. Are you currently experiencing any chronic pain? </b></label>
						<br>
						<input  type="radio" name="chronic_pain_yes_no" value="Yes">Yes<br>  
						<input  type="radio" name="chronic_pain_yes_no" value="No" checked>No
						<!--chronic_pain_yes_no-->
						
					</div>
					
					<br><br>
					<div class="form-group">
						<label class="form-label form-label-top" id="label_128" for="input_128"> <b>8: Do you drink alcohol more than once a week? </b></label>
						<br>
						<input  type="radio" name="alcohol_yes_no" value="Yes">Yes<br>  
						<input  type="radio" name="alcohol_yes_no" value="No" checked>No
					</div>
					<!--alcohol_yes_no-->
					<br>
					<div class="form-group">
						<label class="form-label form-label-top" id="label_130" for="input_130"> <b>9. How often do you engage recreational drug use? </b></label>
						<br>
						<input  type="radio" name="drug_yes_no" value="Daily">Daily<br>  
						<input  type="radio" name="drug_yes_no" value="Weekly" checked>Weekly<br>
						<input  type="radio" name="drug_yes_no" value="Monthly" checked>Monthly<br>
						<input  type="radio" name="drug_yes_no" value="Infrequently" checked>Infrequently<br>
						<input  type="radio" name="drug_yes_no" value="Never" checked>Never<br>
					</div>
					<!--drug_yes_no-->
					
					<br>
					<div class="form-group">
						<label class="form-label form-label-top" id="label_182" for="input_182"> <b>10. Are you currently in a romantic relationship? </b></label>
						<br>
						<input  type="radio" name="romantic_yes_no" value="Yes">Yes<br>  
						<input  type="radio" name="romantic_yes_no" value="No" checked>No
					</div>
					<!--romantic_yes_no-->
					
					<div class="form-group">
						<label class="form-label form-label-top" id="label_184" for="input_184"> <b>On a scale of 1-10, how would you rate your relationship? </b></label>
						<input type="text" class="form-control" data-type="input-textbox" id="relationship_scale" name="relationship_scale" size="80" value="" />
						<!--relationship_scale-->
					</div>
					
					<br>
					<div class="form-group">
						<label class="form-label form-label-right form-label-auto" id="label_185" for="input_185"> <b>11. What significant life changes or stressful events have you experienced recently: </b></label>
						<textarea id="input_185" class="form-control" name="life_change" cols="40" rows="6"></textarea>
						<!--life_change-->
					</div>
					
					<div class="form-group">
						<label class="form-label form-label-top" id="label_182" for="input_182"> <b>12. Have you ever smoked? </b></label>
						<br>
						<input  type="radio" name="smoke_yes_no" value="Never">Never<br>  
						<input  type="radio" name="smoke_yes_no" value="Not any more" checked>Not any more<br>
						<input  type="radio" name="smoke_yes_no" value="Currently" checked>Currently
						<!--smoke_yes_no-->
					</div>
					
					<div class="form-group">
						<br>
						<br>
						<h2><font color="green">Section 6: Family Mental Health History (6 min)</font></h2>
						<br>
						<p>In the section below identify if there is a family history of any of the following. </p>
						<p><br>If yes, please indicate the family member’s relationship to you in the<br>space provided </p>
						<p>(father, grandmother, uncle, etc.).<p>
						
						<br><br>
						<label class="form-label form-label-top" id="label_188" for="input_188"> <b>1. Alcohol/Substance Abuse: </b></label>
						<br>
						<input  type="radio" name="family_alchol_yes_no" value="Yes">Yes<br>  
						<input  type="radio" name="family_alchol_yes_no" value="No" checked>No<br>
						<!--family_alchol_yes_no-->
						
						<label class="form-label form-label-left" id="label_171" for="input_171"> <b>If yes, please list </b></label>
						<input type="text" class="form-control" data-type="input-textbox" id="family_alchol_yes" name="family_alchol_yes" size="80" value="" />
						<!--family_alchol_yes-->
						
						<br>
						<label class="form-label form-label-top" id="label_190" for="input_190"> <b>2. Anxiety: </b></label>
						<br>
						<input  type="radio" name="family_anxiey_yes_no" value="Yes">Yes  <br>
						<input  type="radio" name="family_anxiey_yes_no" value="No" checked>No<br>
						<!--family_anxiey_yes_no-->
						<label class="form-label form-label-left" id="label_171" for="input_171"> <b>If yes, please list </b></label>
						<input type="text" class="form-control" data-type="input-textbox" id="family_anxiey_yes" name="family_anxiey_yes" size="80" value="" />
						<!--family_anxiey_yes-->
						
						
						<br>
						<label class="form-label form-label-top" id="label_193" for="input_193"> <b>3. Depression: </b></label>
						<br>
						<input  type="radio" name="family_depres_yes_no" value="Yes">Yes<br>  
						<input  type="radio" name="family_depres_yes_no" value="No" checked>No<br>
						<!--family_depres_yes_no-->
						<label class="form-label form-label-left" id="label_171" for="input_171"> <b>If yes, please list </b></label>
						<input type="text" class="form-control" data-type="input-textbox" id="family_depres_yes" name="family_depres_yes" size="80" value="" />
						<!--family_depres_yes-->
						
						
						<br>
						<label class="form-label form-label-top" id="label_194" for="input_194"> <b>4. Domestic Violence: </b></label>
						<br>
						<input  type="radio" name="family_violence_yes_no" value="Yes">Yes <br> 
						<input  type="radio" name="family_violence_yes_no" value="No" checked>No<br>
						<!--family_violence_yes_no-->
						<label class="form-label form-label-left" id="label_171" for="input_171"> <b>If yes, please list </b></label>
						<input type="text" class="form-control" data-type="input-textbox" id="family_violence_yes" name="family_violence_yes" size="80" value="" />
						<!--family_violence_yes-->
						
						
						<br>
						<label class="form-label form-label-top" id="label_195" for="input_195"> <b>5. Eating Disorders:</b> </label>
						<br>
						<input  type="radio" name="family_eating_yes_no" value="Yes">Yes <br> 
						<input  type="radio" name="family_eating_yes_no" value="No" checked>No<br>
						<!--family_eating_yes_no-->
						<label class="form-label form-label-left" id="label_171" for="input_171"> <b>If yes, please list </b></label>
						<input type="text" class="form-control" data-type="input-textbox" id="family_eating_yes" name="family_eating_yes" size="80" value="" />
						<!--family_eating_yes-->
						
						
						
					</div>
					
					<div class="form-group">
						<br><br>
						<h2><font color="green">Section 7: Additional Information (1 min)</font></h2>
						<br>
						<label class="form-label form-label-right form-label-auto" id="label_207" for="input_207"> <b>1. Are you currently employed?</b> </label>
						<br>
						<input  type="radio" name="employment_yes_no" value="Yes">Yes <br> 
						<input  type="radio" name="employment_yes_no" value="No" checked>No<br>
						<!--employment_yes_no-->
						<label class="form-label form-label-top" id="label_68" for="input_68"> <b>If yes, what is your current employment situation: </b></label>
						<input type="text" class="form-control" data-type="input-textbox" id="employment_yes" name="employment_yes" size="80" value="" />
						<!--employment_yes-->
						<label class="form-label form-label-right form-label-auto" id="label_207" for="input_207"> <b>2: I give consent for my information and reports regarding myself to be obtained/released to my referring practitioner</b> </label>
						<br>
						<input  type="radio" name="consent_yes_no" value="Yes">Yes <br> 
						<input  type="radio" name="consent_yes_no" value="No" checked>No<br>
						<!--consent_yes_no-->
					</div>
					
					
					
					<div class="form-group">
					<p><font color="red">Note* Failure to disclose or provide accurate information may affect<br>the ability to provide appropriate treatment plan and Santen<br>Psychology cannot be held responsible.</font></p>
					<p><font color="red">I have read the above and have also read the privacy agreement and<br>consent to treatment for Santen Psychology.</font></p>
					
					
					</div>
					
							
                    </div>
					
					
					
					
					
					
                <div class="col-sm-5">
					<center><h2><font color="#FFFFFF">Personal Information</font></h2></center>
					<br><br>
					<div class="form-group">
					
						<label for="nameofparent"><b>Name of parent/guardian (if under 18 years): </b></label>
						<input type="text" name="nameofparent" id="nameofparent" class="form-control" />
						<!--nameofparent-->
                    </div>
					
					<div class="form-group">
					
						 <label class="form-label form-label-top" id="age" for="age"><b>Age</b></label>
						 <br>
						 <input class="form-control" type="text" id="age" name="age" size="3" value="" />
						 <br>
						 
						<label  id="gender" for="gender"><b>Gender: </b></label>
						
						<input  type="radio" name="gender" value="Male">Male  
						<input  type="radio" name="gender" value="Female" checked>Female

						<!--age-->
						<!--gender-->
                    </div>
					
                    <div class="form-group">
						<br>
                        <label class="form-label form-label-right form-label-auto" id="children" for="children"> <b>Please list any children/age </b></label>
						<textarea id="children" class="form-control" name="children" cols="40" rows="4"></textarea>
                    </div>
                        <!--children--> 
						<br>
						
					<div class="form-group">
						<label class="form-label form-label-top" id="hp" for="hp"> <b>Home Phone </b></label>
						<br>
						<label class="form-label form-label-top" id="label_156" for="input_156"> <b>(May we leave a message? </b></label>
						<input  type="radio" name="hpmessage" value="Yes">Yes  
						<input  type="radio" name="hpmessage" value="No" checked>No )
						<!--hpmessage-->
						<br>
						<input class="form-control" type="tel" name="hppn" id="hppn" size="8">
						<!--hppn-->
					</div>
						
					<div class="form-group">
						<br>
						<label class="form-label form-label-top" id="label_87" for="input_87"> <b>Cell Phone </b></label>
						<br>
						<label class="form-label form-label-top" id="label_156" for="input_156"> <b>(May we leave a message? </b></label>
						<input  type="radio" name="cpmessage" value="Yes">Yes  
						<input  type="radio" name="cpmessage" value="No" checked>No <b>)</b>
						<!--cpmessage-->
						<br>
						<input class="form-control" type="tel" name="cppn" id="cppn" size="8">
						<!--cppn-->
					</div>
						
					<div class="form-group">
						<br>
						<label for="email"><b>Your Email</b></label>
						<br>
						<label class="form-label form-label-top" id="label_156" for="input_156"> <b>(May we leave a message? </b></label>
						<input  type="radio" name="emailmessage" value="Yes">Yes  
						<input  type="radio" name="emailmessage" value="No" checked>No <b>)</b>
						<!--emailmessage-->
						<input type="text" name="email" id="email" class="form-control" value="jyi7@student.monash.edu"/>
						<!--email-->
                    </div>
					
					<br><br><br><br><br>
					<br><br><br><br>
					
					<div class="form-group">
					
						<label class="form-label form-label-top" id="label_162" for="input_162"> <b>Pension / HCC </b></label>
						<input type="text" class="form-control" data-type="input-textbox" id="Pension" name="Pension" size="20" value="" />
						<!--Pension-->
						<label class="form-label form-label-top" id="label_213" for="input_213"> <b>Pension / HCC Expiry </b></label>
						<input type="text" class="form-control" data-type="input-textbox" id="pension_expiry" name="pension_expiry" size="20" value="" />
						<!--pension_expiry-->
					</div>
					
					<br><br><br><br><br><br><br><br><br><br><br>
					
					<div class="form-group">
						<label class="form-label form-label-top" id="label_55" for="input_55"> <b>Relationship </b></label>
						<input type="text" class="form-control" data-type="input-textbox" id="emergency_relationship" name="emergency_relationship" size="32" value="" />
					<!--emergency_relationship-->
					</div>
				
					<div class="form-group">
						<br>
						<br><br><br><br><br><br><br>
						
						<label class="form-label form-label-left" id="label_167" for="input_167"> <b>If yes, Provide Previous therapist/practitioner </b></label>
						<input type="text" class="form-control" data-type="input-textbox" id="phs_yes" name="phs_yes" size="80" value="" />
						<!--phs_yes-->
						
						<br><br>
						<label class="form-label form-label-left" id="label_171" for="input_171"> <b>If yes, please list </b></label>
						<input type="text" class="form-control" data-type="input-textbox" id="current_taking_yes" name="current_taking_yes" size="80" value="" />
						<!--current_taking_yes-->
						
						<br><br>
						<label class="form-label form-label-left" id="label_170" for="input_170"> <b>If yes, Please list, inc. dates (where known): </b></label>
						<input type="text" class="form-control" data-type="input-textbox" id="prescribed_pm_yes" name="prescribed_pm_yes" size="80" value="" />
						<!--prescribed_pm_yes-->
					</div>
					
					<div class="form-group">
						<br>
						<h2><font color="#FFFFFF">General Heath And Mental Information</font></h2>
						
						<label class="form-label form-label-right form-label-auto" id="label_172" for="input_172"> <b>Please list any specific health problems you are currently experiencing: </b></label>
						<textarea id="input_172" class="form-control" name="current_health" cols="40" rows="4"></textarea>
						<!--current_health-->
						<br><br>
						<label class="form-label form-label-right form-label-auto" id="label_174" for="input_174"> <b>Please list any specific sleep problems you are currently experiencing: </b></label>
						<textarea id="input_172" class="form-control" name="current_sleep" cols="40" rows="4"></textarea>
						<!--current_sleep-->
						
					</div>
					
					<br><br>

					
					<div class="form-group">
						<label class="form-label form-label-right form-label-auto" id="label_177" for="input_177"> <b>4. Please list any difficulties you experience with your appetite or eating patterns </b></label>
						<textarea id="input_177" class="form-control" name="eating" cols="40" rows="6"></textarea>
						<!--eating-->
					</div>	
					
					
					<div class="form-group">
						<br>
						<br>
						<br>
						<br>
						<br>
						
						<label class="form-label form-label-left" id="label_127" for="input_127"> <b>If yes, for approx how long? </b></label>
						<input type="text" class="form-control" data-type="input-textbox" id="sad_yes" name="sad_yes" size="80" value="" />
						<!--sad_yes-->
						
						<br><br><br>
						<label class="form-label form-label-left" id="label_179" for="input_179"> <b>If yes, for approx how long? </b></label>
						<input type="text" class="form-control" data-type="input-textbox" id="anxiety_yes" name="anxiety_yes" size="80" value="" />
						<!--anxiety_yes-->
						
						<br><br><br><br>
						<label class="form-label form-label-left" id="label_181" for="input_181"> <b>If yes, for approx how long? </b></label>
						<input type="text" class="form-control" data-type="input-textbox" id="chronic_pain_yes" name="chronic_pain_yes" size="80" value="" />
						<!--chronic_pain_yes-->
					</div>
					
					<br><br><br><br><br><br><br><br><br><br><br><br><br><br>
					
					<div class="form-group">
						<label class="form-label form-label-top" id="label_183" for="input_183"> <b>If yes, for how long? </b></label>
						<input type="text" class="form-control" data-type="input-textbox" id="romantic_yes" name="romantic_yes" size="80" value="" />
						<!--romantic_yes-->
					</div>
					
					<div class="form-group">
					<br>
						<label class="form-label form-label-top" id="label_182" for="input_182"> <b>Any intimacy issues? </b></label>
						<br>
						<input  type="radio" name="intimacy_yes_no" value="Yes">Yes<br>  
						<input  type="radio" name="intimacy_yes_no" value="No" checked>No
						<!--intimacy_yes_no-->
					</div>
					
					<br><br><br><br><br><br><br><br><br><br>
					
					<div class="form-group">
						<label class="form-label form-label-top" id="label_183" for="input_183"> <b>If currently, qty per day? </b></label>
						<input type="text" class="form-control" data-type="input-textbox" id="smoke_yes" name="smoke_yes" size="80" value="" />
						<!--smoke_yes-->
					</div>
					
					<div class="form-group">
					<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
				
						<label class="form-label form-label-top" id="label_196" for="input_196"> <b>6. Obesity: </b></label>
						<br>
						<input  type="radio" name="family_obesity_yes_no" value="Yes">Yes  <br>
						<input  type="radio" name="family_obesity_yes_no" value="No" checked>No<br>
						<!--family_obesity_yes_no-->
						<label class="form-label form-label-left" id="label_171" for="input_171"> <b>If yes, please list </b></label>
						<input type="text" class="form-control" data-type="input-textbox" id="family_obesity_yes" name="family_obesity_yes" size="80" value="" />
						<!--family_obesity_yes-->
						
						
						<br>
						<label class="form-label form-label-top" id="label_197" for="input_197"> <b>7. Obsessive Compulsive Behavior:</b> </label>
						<br>
						<input  type="radio" name="family_obsessive_yes_no" value="Yes">Yes  <br>
						<input  type="radio" name="family_obsessive_yes_no" value="No" checked>No<br>
						<!--family_obsessive_yes_no-->
						<label class="form-label form-label-left" id="label_171" for="input_171"> <b>If yes, please list </b></label>
						<input type="text" class="form-control" data-type="input-textbox" id="family_obsessive_yes" name="family_obsessive_yes" size="80" value="" />
						<!--family_obsessive_yes-->
						
						
						<br>
						<label class="form-label form-label-top" id="label_198" for="input_198"> <b>8. Schizophrenia: </b></label>
						<br>
						<input  type="radio" name="family_Schizophrenia_yes_no" value="Yes">Yes  <br>
						<input  type="radio" name="family_Schizophrenia_yes_no" value="No" checked>No<br>
						<!--family_Schizophrenia_yes_no-->
						<label class="form-label form-label-left" id="label_171" for="input_171"> <b>If yes, please list </b></label>
						<input type="text" class="form-control" data-type="input-textbox" id="family_Schizophrenia_yes" name="family_Schizophrenia_yes" size="80" value="" />
						<!--family_Schizophrenia_yes-->
						
						
						<br>
						<label class="form-label form-label-top" id="label_199" for="input_199"> <b>9. Suicide Attempts: </b></label>
						<br>
						<input  type="radio" name="family_suicide_yes_no" value="Yes">Yes  <br>
						<input  type="radio" name="family_suicide_yes_no" value="No" checked>No<br>
						<!--family_suicide_yes_no-->
						<label class="form-label form-label-left" id="label_171" for="input_171"> <b>If yes, please list </b></label>
						<input type="text" class="form-control" data-type="input-textbox" id="family_suicide_yes" name="family_suicide_yes" size="80" value="" />
						<!--family_suicide_yes-->
						
						
						<br>
						<label class="form-label form-label-top" id="label_200" for="input_200"> <b>10. Bipolar: </b></label>
						<br>
						<input  type="radio" name="family_bipolar_yes_no" value="Yes">Yes  <br>
						<input  type="radio" name="family_bipolar_yes_no" value="No" checked>No<br>
						<!--family_bipolar_yes_no-->
						<label class="form-label form-label-left" id="label_171" for="input_171"> <b>If yes, please list</b> </label>
						<input type="text" class="form-control" data-type="input-textbox" id="family_bipolar_yes" name="family_bipolar_yes" size="80" value="" />
						<!--family_bipolar_yes-->
						
						
					</div>
					
					
                    <div class="form-group">
					<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
						<button type="submit" name="submit" class="btn btn-primary btn-lg">Submit Message</button>
                    </div>
                </div>
                </form> 
            </div><!--/.row-->
        </div><!--/.container-->
    </section><!--/#contact-page-->
</body>
</html>