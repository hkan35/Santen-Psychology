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
					   ->setTo(array('jyi7@student.monash.edu' => 'Santen Psychology')) // Array of people to send to: send to specify email all the time ->setTo(array('your_email@website.com' => 'Your Name'))  
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
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
    
    <title>Santen Psychology</title>
    
    <!-- core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/animate.min.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">
    
   
</head><!--/head-->
<body>

<!--navigation-->
<section id="contact-page">
        <div class="container">
				
		
		
            <div class="center">        
                <br>
				<?php if ($success==true) { ?>
			<div class="message success">
				<font color="green"><h4>Congratulations! Please go to section 2</h4></font>
			</div>
		<?php } elseif ($error==true) { ?>
			<div class="message error">
				<font color="red"><h4>Sorry, an error occurred. Try again!</h4></font>
			</div>
		<?php } ?>
				<br>
				<br>
				<br>
				<img src="img/favicon.ico" width="60" height="60">
				
				<h2> Client Intake Form</h2>
				<h3> (Section 1 Personal information)</h3>
                <p class="lead">Please provide the following information to the best of <br>your ability and answer the questions below. <br><font color="red">Please note: information you provide here is<br>protected as confidential information.</font></p>
				<p class="lead">Please fill out the information below and submit it. <br>If this is not possible we will provide this form for you at<br>your first appointment to complete.</p>
				<p class="lead"><font color="red">It takes about 10 min to complete section 1. </font></p>
				<button onclick="goBack()" class="btn btn-success btn-md">Back To Previous Page</button>

				<!--<script>
				function goBack() {
					window.history.back();
				}
				</script>-->
			</div> 
            <div class="row contact-wrap"> 
                <div class="status alert alert-success" style="display: none"></div>
				
                <form id="main-contact-form" class="contact-form" method="post" action="">
					
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
						<label class="form-label form-label-right form-label-auto" id="marital_status" for="marital_status"> <b>Marital Status:</b> </label>
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
						<label class="form-label form-label-right form-label-auto" id="label_89" for="refer"> <b>Referred by (if any)</b> </label>
						<input type="text" class="form-control" data-type="input-textbox" id="refer" name="refer" size="20" value="" />
						<!--refer-->
					</div>
						
					<div class="form-group">
						<label class="form-label form-label-top" id="medicare" for="medicare"> <b>Medicare# </b></label>
						<input type="text" class="form-control" data-type="input-textbox" id="medicare" name="medicare" size="20" value="" />
						<!--medicare-->
						<label class="form-label form-label-top" id="medicare_expiry" for="medicare_expiry"> <b>Medicare Expiry</b> </label>
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
						<label class="form-label form-label-top" id="emergency_name" for="emergency_name"> <b>Emergency Contact Name </b></label>
						<input type="text" class="form-control" data-type="input-textbox" id="emergency_name" name="emergency_name" size="30" value="" />
					<!--emergency_name-->
					</div>
						  
					<div class="form-group">
						<label class="form-label form-label-top" id="emergency_number" for="emergency_number"> <b>Phone Number </b></label>
						<input class="form-control" type="tel" name="emergency_number" id="emergency_number" size="8">
						<!--emergency_number-->
					</div>
					
					
					<div class="form-group">
						<br>
						<h2><font color="green">Section 4: Previous Health Services (2 min)</font></h2>
						<br>
						<label class="form-label form-label-top" id="phs_yes_no" for="phs_yes_no"> <b>Previous mental health services (psychotherapy, psychiatricservices, etc.)? </b></label>
						<input  type="radio" name="phs_yes_no" value="Yes">Yes  
						<input  type="radio" name="phs_yes_no" value="No" checked>No
						<!--phs_yes_no-->
						<br>
						<br>
						<br>
						<label class="form-label form-label-top" id="current_taking_yes_no" for="current_taking_yes_no"> <b>Are you currently taking any prescription medication? </b></label>
						<br>
						<input  type="radio" name="current_taking_yes_no" value="Yes">Yes  
						<input  type="radio" name="current_taking_yes_no" value="No" checked>No
						<!--current_taking_yes_no-->
						<br>
						<br>
						<br>
						<label class="form-label form-label-top" id="prescribed_pm_yes_no" for="prescribed_pm_yes_no"> <b>Have you ever been prescribed psychiatric medication? </b></label>
						<br>
						<input  type="radio" name="prescribed_pm_yes_no" value="Yes">Yes  
						<input  type="radio" name="prescribed_pm_yes_no" value="No" checked>No
						<!--prescribed_pm_yes_no-->
						
					</div>
					
					
					
					
					<div class="form-group">
						<br><br>
						<h2><font color="green">Section 7: Additional Information (1 min)</font></h2>
						<br>
						<label class="form-label form-label-right form-label-auto" id="employment_yes_no" for="employment_yes_no"> <b>1. Are you currently employed?</b> </label>
						<br>
						<input  type="radio" name="employment_yes_no" value="Yes">Yes <br> 
						<input  type="radio" name="employment_yes_no" value="No" checked>No<br>
						<!--employment_yes_no-->
						<label class="form-label form-label-top" id="employment_yes" for="employment_yes"> <b>If yes, what is your current employment situation: </b></label>
						<input type="text" class="form-control" data-type="input-textbox" id="employment_yes" name="employment_yes" size="80" value="" />
						<!--employment_yes-->
						<label class="form-label form-label-right form-label-auto" id="consent_yes_no" for="consent_yes_no"> <b>2: I give consent for my information and reports regarding myself to be obtained/released to my referring practitioner</b> </label>
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
						<label class="form-label form-label-top" id="hpmessage" for="hpmessage"> <b>(May we leave a message? </b></label>
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
						<label class="form-label form-label-top" id="cpmessage" for="cpmessage"> <b>(May we leave a message? </b></label>
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
						<label class="form-label form-label-top" id="emailmessage" for="emailmessage"> <b>(May we leave a message? </b></label>
						<input  type="radio" name="emailmessage" value="Yes">Yes  
						<input  type="radio" name="emailmessage" value="No" checked>No <b>)</b>
						<!--emailmessage-->
						<input type="text" name="email" id="email" class="form-control" value="jyi7@student.monash.edu"/>
						<!--email-->
                    </div>
					
					<br><br><br><br><br>
					<br><br><br><br>
					
					<div class="form-group">
					
						<label class="form-label form-label-top" id="Pension" for="Pension"> <b>Pension / HCC </b></label>
						<input type="text" class="form-control" data-type="input-textbox" id="Pension" name="Pension" size="20" value="" />
						<!--Pension-->
						<label class="form-label form-label-top" id="pension_expiry" for="pension_expiry"> <b>Pension / HCC Expiry </b></label>
						<input type="text" class="form-control" data-type="input-textbox" id="pension_expiry" name="pension_expiry" size="20" value="" />
						<!--pension_expiry-->
					</div>
					
					<br><br><br><br><br><br><br><br><br><br><br>
					
					<div class="form-group">
						<label class="form-label form-label-top" id="emergency_relationship" for="emergency_relationship"> <b>Relationship </b></label>
						<input type="text" class="form-control" data-type="input-textbox" id="emergency_relationship" name="emergency_relationship" size="32" value="" />
					<!--emergency_relationship-->
					</div>
				
					<div class="form-group">
						<br>
						<br><br><br><br><br><br><br>
						
						<label class="form-label form-label-left" id="phs_yes" for="phs_yes"> <b>If yes, Provide Previous therapist/practitioner </b></label>
						<input type="text" class="form-control" data-type="input-textbox" id="phs_yes" name="phs_yes" size="80" value="" />
						<!--phs_yes-->
						
						<br><br>
						<label class="form-label form-label-left" id="current_taking_yes" for="current_taking_yes"> <b>If yes, please list </b></label>
						<input type="text" class="form-control" data-type="input-textbox" id="current_taking_yes" name="current_taking_yes" size="80" value="" />
						<!--current_taking_yes-->
						
						<br><br>
						<label class="form-label form-label-left" id="prescribed_pm_yes" for="prescribed_pm_yes"> <b>If yes, Please list, inc. dates (where known): </b></label>
						<input type="text" class="form-control" data-type="input-textbox" id="prescribed_pm_yes" name="prescribed_pm_yes" size="80" value="" />
						<!--prescribed_pm_yes-->
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