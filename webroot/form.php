<?php
	$success = false;
	$error = false;
	$nameReErr = $emailReErr = $emailmessageReErr =$maritalReErr = $DOBdayReErr= $DOBmonthReErr = $DOByearReErr = $street1ReErr = $cityReErr = $stateReErr = $ageReErr = $genderReErr = $hppnReErr = $cppnReErr = $hpmessageReErr = $cpmessageReErr = $emergencynameReErr = $emergencynumberReErr = $emergencyrelationshipReErr = $phsyesnoReErr = $currenttakingyesnoReErr = $prescribedpmyesnoReErr = $employmentyesnoReErr = $consentyesnoReErr = $postalReErr = "";
	$nameErr  = $nameofparentErr= $stateErr = $cityErr="";
if (!empty($_POST)) {

	// Used for later to determine result


	// Object syntax looks better and is easier to use than arrays to me
	$post = new stdClass;
	
	// Usually there would be much more validation and filtering, but this
	// will work for now.
	foreach ($_POST as $key => $val)
		$post->$key = trim(strip_tags($_POST[$key]));
		
	// Check for blank fields
	

		if (!preg_match("/^[a-zA-Z ]*$/",$post->name)) {
			$nameErr = "Only letters and white space allowed";
			$error=true;			
		}
		
		else if (!preg_match("/^[a-zA-Z ]*$/",$post->nameofparent)) {
			$nameofparentErr = "Only letters and white space allowed";
			$error=true;			
		}

		
		else if (!preg_match("/^[a-zA-Z ]*$/",$post->city)) {
			$cityErr = "Only letters and white space allowed";
			$error=true;			
		}


		
		else if (!preg_match("/^[a-zA-Z ]*$/",$post->state)) {
			$stateErr = "Only letters and white space allowed";
			$error=true;			
		}

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
				<p style="color: green; font-size: 12pt">Congratulations! Please go to section 2 <b><font size="5"><p><em><u><?= '<a href="../../../dev/3/webroot/intakeforms2/form.php">Click Here</a>'; ?> </u></em></p></font></b></p>
			</div>
		<?php } elseif ($error==true) { ?>
			<div class="message error">
				<p style="color: red; font-size: 12pt">Sorry, an error occurred. Double check your input and Try again!</p>
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

				<script>
				function goBack() {
					window.history.back();
				}
				</script>
			</div> 
            <div class="row contact-wrap"> 
                <div class="status alert alert-success" style="display: none"></div>
				
                <form id="main-contact-form" class="contact-form" method="post" action="">
					
                    <div class="col-sm-5 col-sm-offset-1">
					<h2><font color="green">Section 1: Personal Information (3 min)</font></h2>
					<br><br>
                    
					
					<div class="form-group">
						<label for="name"><b>Your Name</b></label><span style="color:red">* <?php echo $nameErr;?></span>
						<input type="text" name="name" id="name" class="form-control" placeholder="..." value="<?php echo @$_POST['name'];?>" required/>
						<!--name-->
                    </div>
						
					<div class="form-group">
						<label class="form-label form-label-top" id="DOB" for="DOB"><b>Birth Date</b></label>
						<span style="color:red">* </span>
        
						<div id="cid_46" class="form-input-wide jf-required">
			
						<span class="form-sub-label-container" style="vertical-align: top">
					  
						<select class="form-control" name="DOBday" id="DOBday"><!--DOBday-->
						 
						  <option value="1" <?php if(isset($_POST['DOBday']) && $_POST['DOBday'] == '1') 
          echo ' selected="selected"';
    ?>> 1 </option>
						  <option value="2" <?php if(isset($_POST['DOBday']) && $_POST['DOBday'] == '2') 
          echo ' selected="selected"';
    ?>> 2 </option>
						  <option value="3" <?php if(isset($_POST['DOBday']) && $_POST['DOBday'] == '3') 
          echo ' selected="selected"';
    ?>> 3 </option>
						  <option value="4" <?php if(isset($_POST['DOBday']) && $_POST['DOBday'] == '4') 
          echo ' selected="selected"';
    ?>> 4 </option>
						  <option value="5" <?php if(isset($_POST['DOBday']) && $_POST['DOBday'] == '5') 
          echo ' selected="selected"';
    ?>> 5 </option>
						  <option value="6" <?php if(isset($_POST['DOBday']) && $_POST['DOBday'] == '6') 
          echo ' selected="selected"';
    ?>> 6 </option>
						  <option value="7" <?php if(isset($_POST['DOBday']) && $_POST['DOBday'] == '7') 
          echo ' selected="selected"';
    ?>> 7 </option>
						  <option value="8" <?php if(isset($_POST['DOBday']) && $_POST['DOBday'] == '8') 
          echo ' selected="selected"';
    ?>> 8 </option>
						  <option value="9" <?php if(isset($_POST['DOBday']) && $_POST['DOBday'] == '9') 
          echo ' selected="selected"';
    ?>> 9 </option>
						  <option value="10" <?php if(isset($_POST['DOBday']) && $_POST['DOBday'] == '10') 
          echo ' selected="selected"';
    ?>> 10 </option>
						  <option value="11" <?php if(isset($_POST['DOBday']) && $_POST['DOBday'] == '11') 
          echo ' selected="selected"';
    ?>> 11 </option>
						  <option value="12" <?php if(isset($_POST['DOBday']) && $_POST['DOBday'] == '12') 
          echo ' selected="selected"';
    ?>> 12 </option>
						  <option value="13" <?php if(isset($_POST['DOBday']) && $_POST['DOBday'] == '13') 
          echo ' selected="selected"';
    ?>> 13 </option>
						  <option value="14" <?php if(isset($_POST['DOBday']) && $_POST['DOBday'] == '14') 
          echo ' selected="selected"';
    ?>> 14 </option>
						  <option value="15" <?php if(isset($_POST['DOBday']) && $_POST['DOBday'] == '15') 
          echo ' selected="selected"';
    ?>> 15 </option>
						  <option value="16" <?php if(isset($_POST['DOBday']) && $_POST['DOBday'] == '16') 
          echo ' selected="selected"';
    ?>> 16 </option>
						  <option value="17" <?php if(isset($_POST['DOBday']) && $_POST['DOBday'] == '17') 
          echo ' selected="selected"';
    ?>> 17 </option>
						  <option value="18" <?php if(isset($_POST['DOBday']) && $_POST['DOBday'] == '18') 
          echo ' selected="selected"';
    ?>> 18 </option>
						  <option value="19" <?php if(isset($_POST['DOBday']) && $_POST['DOBday'] == '19') 
          echo ' selected="selected"';
    ?>> 19 </option>
						  <option value="20" <?php if(isset($_POST['DOBday']) && $_POST['DOBday'] == '20') 
          echo ' selected="selected"';
    ?>> 20 </option>
						  <option value="21"<?php if(isset($_POST['DOBday']) && $_POST['DOBday'] == '21') 
          echo ' selected="selected"';
    ?>> 21 </option>
						  <option value="22" <?php if(isset($_POST['DOBday']) && $_POST['DOBday'] == '22') 
          echo ' selected="selected"';
    ?>> 22 </option>
						  <option value="23" <?php if(isset($_POST['DOBday']) && $_POST['DOBday'] == '23') 
          echo ' selected="selected"';
    ?>> 23 </option>
						  <option value="24" <?php if(isset($_POST['DOBday']) && $_POST['DOBday'] == '24') 
          echo ' selected="selected"';
    ?>> 24 </option>
						  <option value="25" <?php if(isset($_POST['DOBday']) && $_POST['DOBday'] == '25') 
          echo ' selected="selected"';
    ?>> 25 </option>
						  <option value="26" <?php if(isset($_POST['DOBday']) && $_POST['DOBday'] == '26') 
          echo ' selected="selected"';
    ?>> 26 </option>
						  <option value="27"<?php if(isset($_POST['DOBday']) && $_POST['DOBday'] == '27') 
          echo ' selected="selected"';
    ?>> 27 </option>
						  <option value="28" <?php if(isset($_POST['DOBday']) && $_POST['DOBday'] == '28') 
          echo ' selected="selected"';
    ?>> 28 </option>
						  <option value="29" <?php if(isset($_POST['DOBday']) && $_POST['DOBday'] == '29') 
          echo ' selected="selected"';
    ?>> 29 </option>
						  <option value="30" <?php if(isset($_POST['DOBday']) && $_POST['DOBday'] == '30') 
          echo ' selected="selected"';
    ?>> 30 </option>
						  <option value="31" <?php if(isset($_POST['DOBday']) && $_POST['DOBday'] == '31') 
          echo ' selected="selected"';
    ?>> 31 </option>
						</select>
				
					
						<select class="form-control" name="DOBmonth" id="DOBmonth"><!--DOBmonth-->
						  
						  <option value="January" <?php if(isset($_POST['DOBmonth']) && $_POST['DOBmonth'] == 'January') 
          echo ' selected="selected"';
    ?>> January </option>
						  <option value="February" <?php if(isset($_POST['DOBmonth']) && $_POST['DOBmonth'] == 'February') 
          echo ' selected="selected"';
    ?>> February </option>
						  <option value="March" <?php if(isset($_POST['DOBmonth']) && $_POST['DOBmonth'] == 'March') 
          echo ' selected="selected"';
    ?>> March </option>
						  <option value="April" <?php if(isset($_POST['DOBmonth']) && $_POST['DOBmonth'] == 'April') 
          echo ' selected="selected"';
    ?>> April </option>
						  <option value="May" <?php if(isset($_POST['DOBmonth']) && $_POST['DOBmonth'] == 'May') 
          echo ' selected="selected"';
    ?>> May </option>
						  <option value="June" <?php if(isset($_POST['DOBmonth']) && $_POST['DOBmonth'] == 'June') 
          echo ' selected="selected"';
    ?>> June </option>
						  <option value="July" <?php if(isset($_POST['DOBmonth']) && $_POST['DOBmonth'] == 'July') 
          echo ' selected="selected"';
    ?>> July </option>
						  <option value="August" <?php if(isset($_POST['DOBmonth']) && $_POST['DOBmonth'] == 'August') 
          echo ' selected="selected"';
    ?>> August </option>
						  <option value="September" <?php if(isset($_POST['DOBmonth']) && $_POST['DOBmonth'] == 'September') 
          echo ' selected="selected"';
    ?>> September </option>
						  <option value="October" <?php if(isset($_POST['DOBmonth']) && $_POST['DOBmonth'] == 'October') 
          echo ' selected="selected"';
    ?>> October </option>
						  <option value="November" <?php if(isset($_POST['DOBmonth']) && $_POST['DOBmonth'] == 'November') 
          echo ' selected="selected"';
    ?>> November </option>
						  <option value="December" <?php if(isset($_POST['DOBmonth']) && $_POST['DOBmonth'] == 'December') 
          echo ' selected="selected"';
    ?>> December </option>
						</select>
						
					 
						<select class="form-control" name="DOByear" id="DOByear"><!--DOByear-->
						 
						  <option value="2015" <?php if(isset($_POST['DOByear']) && $_POST['DOByear'] == '2015') 
          echo ' selected="selected"';
    ?>> 2015 </option>
						  <option value="2014" <?php if(isset($_POST['DOByear']) && $_POST['DOByear'] == '2014') 
          echo ' selected="selected"';
    ?>> 2014 </option>
						  <option value="2013" <?php if(isset($_POST['DOByear']) && $_POST['DOByear'] == '2013') 
          echo ' selected="selected"';
    ?>> 2013 </option>
						  <option value="2012" <?php if(isset($_POST['DOByear']) && $_POST['DOByear'] == '2012') 
          echo ' selected="selected"';
    ?>> 2012 </option>
						  <option value="2011" <?php if(isset($_POST['DOByear']) && $_POST['DOByear'] == '2011') 
          echo ' selected="selected"';
    ?>> 2011 </option>
						  <option value="2010" <?php if(isset($_POST['DOByear']) && $_POST['DOByear'] == '2010') 
          echo ' selected="selected"';
    ?>> 2010 </option>
						  <option value="2009" <?php if(isset($_POST['DOByear']) && $_POST['DOByear'] == '2009') 
          echo ' selected="selected"';
    ?>> 2009 </option>
						  <option value="2008" <?php if(isset($_POST['DOByear']) && $_POST['DOByear'] == '2008') 
          echo ' selected="selected"';
    ?>> 2008 </option>
						  <option value="2007"<?php if(isset($_POST['DOByear']) && $_POST['DOByear'] == '2007') 
          echo ' selected="selected"';
    ?>> 2007 </option>
						  <option value="2006" <?php if(isset($_POST['DOByear']) && $_POST['DOByear'] == '2006') 
          echo ' selected="selected"';
    ?>> 2006 </option>
						  <option value="2005" <?php if(isset($_POST['DOByear']) && $_POST['DOByear'] == '2005') 
          echo ' selected="selected"';
    ?>> 2005 </option>
						  <option value="2004" <?php if(isset($_POST['DOByear']) && $_POST['DOByear'] == '2004') 
          echo ' selected="selected"';
    ?>> 2004 </option>
						  <option value="2003"<?php if(isset($_POST['DOByear']) && $_POST['DOByear'] == '2003') 
          echo ' selected="selected"';
    ?>> 2003 </option>
						  <option value="2002" <?php if(isset($_POST['DOByear']) && $_POST['DOByear'] == '2002') 
          echo ' selected="selected"';
    ?>> 2002 </option>
						  <option value="2001" <?php if(isset($_POST['DOByear']) && $_POST['DOByear'] == '2001') 
          echo ' selected="selected"';
    ?>> 2001 </option>
						  <option value="2000" <?php if(isset($_POST['DOByear']) && $_POST['DOByear'] == '2000') 
          echo ' selected="selected"';
    ?>> 2000 </option>
						  <option value="1999" <?php if(isset($_POST['DOByear']) && $_POST['DOByear'] == '1999') 
          echo ' selected="selected"';
    ?>> 1999 </option>
						  <option value="1998" <?php if(isset($_POST['DOByear']) && $_POST['DOByear'] == '1998') 
          echo ' selected="selected"';
    ?>> 1998 </option>
						  <option value="1997" <?php if(isset($_POST['DOByear']) && $_POST['DOByear'] == '1997') 
          echo ' selected="selected"';
    ?>> 1997 </option>
						  <option value="1996" <?php if(isset($_POST['DOByear']) && $_POST['DOByear'] == '1996') 
          echo ' selected="selected"';
    ?>> 1996 </option>
						  <option value="1995" <?php if(isset($_POST['DOByear']) && $_POST['DOByear'] == '1995') 
          echo ' selected="selected"';
    ?>> 1995 </option>
						  <option value="1994" <?php if(isset($_POST['DOByear']) && $_POST['DOByear'] == '1994') 
          echo ' selected="selected"';
    ?>> 1994 </option>
						  <option value="1993" <?php if(isset($_POST['DOByear']) && $_POST['DOByear'] == '1993') 
          echo ' selected="selected"';
    ?>> 1993 </option>
						  <option value="1992" <?php if(isset($_POST['DOByear']) && $_POST['DOByear'] == '1992') 
          echo ' selected="selected"';
    ?>> 1992 </option>
						  <option value="1991" <?php if(isset($_POST['DOByear']) && $_POST['DOByear'] == '1991') 
          echo ' selected="selected"';
    ?>> 1991 </option>
						  <option value="1990" <?php if(isset($_POST['DOByear']) && $_POST['DOByear'] == '1990') 
          echo ' selected="selected"';
    ?>> 1990 </option>
						  <option value="1989" <?php if(isset($_POST['DOByear']) && $_POST['DOByear'] == '1989') 
          echo ' selected="selected"';
    ?>> 1989 </option>
						  <option value="1988" <?php if(isset($_POST['DOByear']) && $_POST['DOByear'] == '1988') 
          echo ' selected="selected"';
    ?>> 1988 </option>
						  <option value="1987" <?php if(isset($_POST['DOByear']) && $_POST['DOByear'] == '1987') 
          echo ' selected="selected"';
    ?>> 1987 </option>
						  <option value="1986" <?php if(isset($_POST['DOByear']) && $_POST['DOByear'] == '1986') 
          echo ' selected="selected"';
    ?>> 1986 </option>
						  <option value="1985" <?php if(isset($_POST['DOByear']) && $_POST['DOByear'] == '1985') 
          echo ' selected="selected"';
    ?>> 1985 </option>
						  <option value="1984" <?php if(isset($_POST['DOByear']) && $_POST['DOByear'] == '1984') 
          echo ' selected="selected"';
    ?>> 1984 </option>
						  <option value="1983" <?php if(isset($_POST['DOByear']) && $_POST['DOByear'] == '1983') 
          echo ' selected="selected"';
    ?>> 1983 </option>
						  <option value="1982" <?php if(isset($_POST['DOByear']) && $_POST['DOByear'] == '1982') 
          echo ' selected="selected"';
    ?>> 1982 </option>
						  <option value="1981" <?php if(isset($_POST['DOByear']) && $_POST['DOByear'] == '1981') 
          echo ' selected="selected"';
    ?>> 1981 </option>
						  <option value="1980" <?php if(isset($_POST['DOByear']) && $_POST['DOByear'] == '1980') 
          echo ' selected="selected"';
    ?>> 1980 </option>
						  <option value="1979" <?php if(isset($_POST['DOByear']) && $_POST['DOByear'] == '1979') 
          echo ' selected="selected"';
    ?>> 1979 </option>
						  <option value="1978" <?php if(isset($_POST['DOByear']) && $_POST['DOByear'] == '1978') 
          echo ' selected="selected"';
    ?>> 1978 </option>
						  <option value="1977" <?php if(isset($_POST['DOByear']) && $_POST['DOByear'] == '1977') 
          echo ' selected="selected"';
    ?>> 1977 </option>
						  <option value="1976" <?php if(isset($_POST['DOByear']) && $_POST['DOByear'] == '1976') 
          echo ' selected="selected"';
    ?>> 1976 </option>
						  <option value="1975" <?php if(isset($_POST['DOByear']) && $_POST['DOByear'] == '1975') 
          echo ' selected="selected"';
    ?>> 1975 </option>
						  <option value="1974" <?php if(isset($_POST['DOByear']) && $_POST['DOByear'] == '1974') 
          echo ' selected="selected"';
    ?>> 1974 </option>
						  <option value="1973" <?php if(isset($_POST['DOByear']) && $_POST['DOByear'] == '1973') 
          echo ' selected="selected"';
    ?>> 1973 </option>
						  <option value="1972" <?php if(isset($_POST['DOByear']) && $_POST['DOByear'] == '1972') 
          echo ' selected="selected"';
    ?>> 1972 </option>
						  <option value="1971" <?php if(isset($_POST['DOByear']) && $_POST['DOByear'] == '1971') 
          echo ' selected="selected"';
    ?>> 1971 </option>
						  <option value="1970" <?php if(isset($_POST['DOByear']) && $_POST['DOByear'] == '1970') 
          echo ' selected="selected"';
    ?>> 1970 </option>
						  <option value="1969" <?php if(isset($_POST['DOByear']) && $_POST['DOByear'] == '1969') 
          echo ' selected="selected"';
    ?>> 1969 </option>
						  <option value="1968" <?php if(isset($_POST['DOByear']) && $_POST['DOByear'] == '1968') 
          echo ' selected="selected"';
    ?>> 1968 </option>
						  <option value="1967" <?php if(isset($_POST['DOByear']) && $_POST['DOByear'] == '1967') 
          echo ' selected="selected"';
    ?>> 1967 </option>
						  <option value="1966" <?php if(isset($_POST['DOByear']) && $_POST['DOByear'] == '1966') 
          echo ' selected="selected"';
    ?>> 1966 </option>
						  <option value="1965" <?php if(isset($_POST['DOByear']) && $_POST['DOByear'] == '1965') 
          echo ' selected="selected"';
    ?>> 1965 </option>
						  <option value="1964" <?php if(isset($_POST['DOByear']) && $_POST['DOByear'] == '1964') 
          echo ' selected="selected"';
    ?>> 1964 </option>
						  <option value="1963" <?php if(isset($_POST['DOByear']) && $_POST['DOByear'] == '1963') 
          echo ' selected="selected"';
    ?>> 1963 </option>
						  <option value="1962" <?php if(isset($_POST['DOByear']) && $_POST['DOByear'] == '1962') 
          echo ' selected="selected"';
    ?>> 1962 </option>
						  <option value="1961" <?php if(isset($_POST['DOByear']) && $_POST['DOByear'] == '1961') 
          echo ' selected="selected"';
    ?>> 1961 </option>
						  <option value="1960" <?php if(isset($_POST['DOByear']) && $_POST['DOByear'] == '1960') 
          echo ' selected="selected"';
    ?>> 1960 </option>
						  <option value="1959" <?php if(isset($_POST['DOByear']) && $_POST['DOByear'] == '1959') 
          echo ' selected="selected"';
    ?>> 1959 </option>
						  <option value="1958" <?php if(isset($_POST['DOByear']) && $_POST['DOByear'] == '1958') 
          echo ' selected="selected"';
    ?>> 1958 </option>
						  <option value="1957" <?php if(isset($_POST['DOByear']) && $_POST['DOByear'] == '1957') 
          echo ' selected="selected"';
    ?>> 1957 </option>
						  <option value="1956" <?php if(isset($_POST['DOByear']) && $_POST['DOByear'] == '1956') 
          echo ' selected="selected"';
    ?>> 1956 </option>
						  <option value="1955" <?php if(isset($_POST['DOByear']) && $_POST['DOByear'] == '1955') 
          echo ' selected="selected"';
    ?>> 1955 </option>
						  <option value="1954" <?php if(isset($_POST['DOByear']) && $_POST['DOByear'] == '1954') 
          echo ' selected="selected"';
    ?>> 1954 </option>
						  <option value="1953" <?php if(isset($_POST['DOByear']) && $_POST['DOByear'] == '1953') 
          echo ' selected="selected"';
    ?>> 1953 </option>
						  <option value="1952" <?php if(isset($_POST['DOByear']) && $_POST['DOByear'] == '1952') 
          echo ' selected="selected"';
    ?>> 1952 </option>
						  <option value="1951" <?php if(isset($_POST['DOByear']) && $_POST['DOByear'] == '1951') 
          echo ' selected="selected"';
    ?>> 1951 </option>
						  <option value="1950" <?php if(isset($_POST['DOByear']) && $_POST['DOByear'] == '1950') 
          echo ' selected="selected"';
    ?>> 1950 </option>
						  <option value="1949" <?php if(isset($_POST['DOByear']) && $_POST['DOByear'] == '1949') 
          echo ' selected="selected"';
    ?>> 1949 </option>
						  <option value="1948" <?php if(isset($_POST['DOByear']) && $_POST['DOByear'] == '1948') 
          echo ' selected="selected"';
    ?>> 1948 </option>
						  <option value="1947" <?php if(isset($_POST['DOByear']) && $_POST['DOByear'] == '1947') 
          echo ' selected="selected"';
    ?>> 1947 </option>
						  <option value="1946" <?php if(isset($_POST['DOByear']) && $_POST['DOByear'] == '1946') 
          echo ' selected="selected"';
    ?>> 1946 </option>
						  <option value="1945" <?php if(isset($_POST['DOByear']) && $_POST['DOByear'] == '1945') 
          echo ' selected="selected"';
    ?>> 1945 </option>
						  <option value="1944" <?php if(isset($_POST['DOByear']) && $_POST['DOByear'] == '1944') 
          echo ' selected="selected"';
    ?>> 1944 </option>
						  <option value="1943" <?php if(isset($_POST['DOByear']) && $_POST['DOByear'] == '1943') 
          echo ' selected="selected"';
    ?>> 1943 </option>
						  <option value="1942" <?php if(isset($_POST['DOByear']) && $_POST['DOByear'] == '1942') 
          echo ' selected="selected"';
    ?>> 1942 </option>
						  <option value="1941" <?php if(isset($_POST['DOByear']) && $_POST['DOByear'] == '1941') 
          echo ' selected="selected"';
    ?>> 1941 </option>
						  <option value="1940" <?php if(isset($_POST['DOByear']) && $_POST['DOByear'] == '1940') 
          echo ' selected="selected"';
    ?>> 1940 </option>
						  <option value="1939" <?php if(isset($_POST['DOByear']) && $_POST['DOByear'] == '1939') 
          echo ' selected="selected"';
    ?>> 1939 </option>
						  <option value="1938" <?php if(isset($_POST['DOByear']) && $_POST['DOByear'] == '1938') 
          echo ' selected="selected"';
    ?>> 1938 </option>
						  <option value="1937" <?php if(isset($_POST['DOByear']) && $_POST['DOByear'] == '1937') 
          echo ' selected="selected"';
    ?>> 1937 </option>
						  <option value="1936" <?php if(isset($_POST['DOByear']) && $_POST['DOByear'] == '1936') 
          echo ' selected="selected"';
    ?>> 1936 </option>
						  <option value="1935" <?php if(isset($_POST['DOByear']) && $_POST['DOByear'] == '1935') 
          echo ' selected="selected"';
    ?>> 1935 </option>
						  <option value="1934" <?php if(isset($_POST['DOByear']) && $_POST['DOByear'] == '1934') 
          echo ' selected="selected"';
    ?>> 1934 </option>
						  <option value="1933"<?php if(isset($_POST['DOByear']) && $_POST['DOByear'] == '1933') 
          echo ' selected="selected"';
    ?>> 1933 </option>
						  <option value="1932" <?php if(isset($_POST['DOByear']) && $_POST['DOByear'] == '1932') 
          echo ' selected="selected"';
    ?>> 1932 </option>
						  <option value="1931"<?php if(isset($_POST['DOByear']) && $_POST['DOByear'] == '1931') 
          echo ' selected="selected"';
    ?>> 1931 </option>
						  <option value="1930"<?php if(isset($_POST['DOByear']) && $_POST['DOByear'] == '1930') 
          echo ' selected="selected"';
    ?>> 1930 </option>
						  <option value="1929"<?php if(isset($_POST['DOByear']) && $_POST['DOByear'] == '1929') 
          echo ' selected="selected"';
    ?>> 1929 </option>
						  <option value="1928"<?php if(isset($_POST['DOByear']) && $_POST['DOByear'] == '1928') 
          echo ' selected="selected"';
    ?>> 1928 </option>
						  <option value="1927"<?php if(isset($_POST['DOByear']) && $_POST['DOByear'] == '1927') 
          echo ' selected="selected"';
    ?>> 1927 </option>
						  <option value="1926"<?php if(isset($_POST['DOByear']) && $_POST['DOByear'] == '1926') 
          echo ' selected="selected"';
    ?>> 1926 </option>
						  
							</select>
						
							</span>
							</div>
					</div>	
						
				
						
                    <div class="form-group">
						<label class="form-label form-label-right form-label-auto" id="marital_status" for="marital_status"> <b>Marital Status:</b> </label><span style="color:red">*</span>
						 <select class="form-control"  id="marital_status" name="marital_status">
						 
						 <option value="Never Married"<?php if(isset($_POST['marital_status']) && $_POST['marital_status'] == 'Never Married') 
          echo ' selected="selected"';
    ?>> Never Married</option>
						 <option value="Domestic Partnership"<?php if(isset($_POST['marital_status']) && $_POST['marital_status'] == 'Domestic Partnership') 
          echo ' selected="selected"';
    ?>> Domestic Partnership </option>
						 <option value="Separated"<?php if(isset($_POST['marital_status']) && $_POST['marital_status'] == 'Separated') 
          echo ' selected="selected"';
    ?>>Separated</option>
						 <option value="Married"<?php if(isset($_POST['marital_status']) && $_POST['marital_status'] == 'Married') 
          echo ' selected="selected"';
    ?>> Married </option>
						 <option value="Divorced"<?php if(isset($_POST['marital_status']) && $_POST['marital_status'] == 'Divorced') 
          echo ' selected="selected"';
    ?>> Divorced </option>
						 <option value="Widowed"<?php if(isset($_POST['marital_status']) && $_POST['marital_status'] == 'Widowed') 
          echo ' selected="selected"';
    ?>> Widowed </option>
					     </select>
						<!--marital_status-->
                    </div>
						
						<br><br><br><br>
					<div class="form-group">
						<label class="form-label form-label-right form-label-auto" id="address" for="address"><b>Address</b></label><br>
						
						<label class="form-sub-label" for="street1" id="street1" style="min-height: 13px;"> <b>Street Address</b> </label><span style="color:red">*</span><br>
						<input class="form-control" type="text" name="street1" id="street1" placeholder="..." value="<?php echo @$_POST['street1'];?>" required/><br>
						<!--street1-->
						<label class="form-sub-label" for="street2" id="street2" style="min-height: 13px;"> <b>Street Address Line 2</b> </label><br>
						<input class="form-control" type="text" name="street2" id="street2" size="46" placeholder="..." value="<?php echo @$_POST['street2'];?>"/><br>
						<!--street2-->
						<label class="form-sub-label" for="city" id="city" style="min-height: 13px;"> <b>City</b> </label><span style="color:red">*<?php echo $cityErr;?></span><br>
						<input class="form-control" type="text" name="city" id="city" size="21" placeholder="..." value="<?php echo @$_POST['city'];?>" required/><br>
						<!--city-->
						<label class="form-sub-label" for="state" id="state" style="min-height: 13px;"> <b>State / Province</b> </label><span style="color:red">*<?php echo $stateErr;?></span><br>
						<input class="form-control" type="text" name="state" id="state" size="22" placeholder="..." value="<?php echo @$_POST['state'];?>" required/><br>
						<!--state-->
						<label class="form-sub-label" for="postal" id="postal" style="min-height: 13px;"> <b>Postal / Zip Code</b> </label><span style="color:red">*</span><br>
						<input class="form-control" type="number" name="postal" id="postal" placeholder="..." value="<?php echo @$_POST['postal'];?>" required/><br>
						<!--postal-->
					</div>
						
						<br>
						<h2><font color="green">Section 2: Refer and Medicare (2 min)</font></h2>
						<br>
						
					<div class="form-group">
						<label class="form-label form-label-right form-label-auto" id="label_89" for="refer"> <b>Referred by (if any)</b> </label>
						<input type="text" class="form-control" data-type="input-textbox" id="refer" name="refer" size="20" placeholder="..." value="<?php echo @$_POST['refer'];?>" />
						<!--refer-->
					</div>
						
					<div class="form-group">
						<label class="form-label form-label-top" id="medicare" for="medicare"> <b>Medicare# (In xxxx xxxxx x-x)</b></label>
						<input type="tel" class="form-control" data-type="input-textbox" id="medicare" name="medicare" size="20" pattern="^\d{4}[ ]\d{5}[ ]\d{1}-\d{1}$" placeholder="..." value="<?php echo @$_POST['medicare'];?>" />
						<!--medicare-->
						<label class="form-label form-label-top" id="medicare_expiry" for="medicare_expiry"> <b>Medicare Expiry (MM/YYYY)</b> </label>
						<input type="tel" class="form-control" data-type="input-textbox" id="medicare_expiry" name="medicare_expiry" size="20" pattern="^\d{2}/\d{4}$" placeholder="..." value="<?php echo @$_POST['medicare_expiry'];?>" />
						<!--medicare_expiry-->
						<label class="form-label form-label-top" id="medicare_ref" for="medicare_ref"> <b>Ref# </b></label>
						<input type="number" class="form-control" data-type="input-textbox" id="medicare_ref" name="medicare_ref" size="20" placeholder="..." value="<?php echo @$_POST['medicare_ref'];?>" />
						<!--medicare_ref-->
					</div>
					
					<div class="form-group">
					<br>
					<h2><font color="green">Section 3: Emergency Contact (2 min)</font></h2>
					<br>
						<label class="form-label form-label-top" id="emergency_name" for="emergency_name"> <b>Emergency Contact Name </b></label><span style="color:red">*</span>
						<input type="text" class="form-control" data-type="input-textbox" id="emergency_name" name="emergency_name" size="30" placeholder="..." value="<?php echo @$_POST['emergency_name'];?>" required />
					<!--emergency_name-->
					</div>
						  
					<div class="form-group">
						<label class="form-label form-label-top" id="emergency_number" for="emergency_number"> <b>Phone Number (Write In 0xxx-xxx-xxx)</b></label><span style="color:red">*</span>
						<input class="form-control" type="tel" name="emergency_number" id="emergency_number" pattern="^0\d{3}-\d{3}-\d{3}$" placeholder="..." value="<?php echo @$_POST['emergency_number'];?>" required />
						<!--emergency_number-->
					</div>
					
					
					<div class="form-group">
						<br>
						<h2><font color="green">Section 4: Previous Health Services (2 min)</font></h2>
						<br>
						<label class="form-label form-label-top" id="phs_yes_no" for="phs_yes_no"> <b>Previous mental health services (psychotherapy, psychiatricservices, etc.)? </b><font color="red">*</font></label>
						<input  type="radio" name="phs_yes_no" value="Yes" <?php if (isset($_POST['phs_yes_no']) && $_POST['phs_yes_no'] == 'Yes')  echo ' checked="checked"';?> required/>Yes  
						<input  type="radio" name="phs_yes_no" value="No" <?php if (isset($_POST['phs_yes_no']) && $_POST['phs_yes_no'] == 'No')  echo ' checked="checked"';?>/>No
						<!--phs_yes_no-->
						<br>
						<br>
						<br>
						<label class="form-label form-label-top" id="current_taking_yes_no" for="current_taking_yes_no"> <b>Are you currently taking any prescription medication? </b></label><span style="color:red">* </span>
						<br>
						<input  type="radio" name="current_taking_yes_no" value="Yes"<?php if (isset($_POST['current_taking_yes_no']) && $_POST['current_taking_yes_no'] == 'Yes')  echo ' checked="checked"';?> required>Yes  
						<input  type="radio" name="current_taking_yes_no" value="No" <?php if (isset($_POST['current_taking_yes_no']) && $_POST['current_taking_yes_no'] == 'No')  echo ' checked="checked"';?>>No
						<!--current_taking_yes_no-->
						<br>
						<br>
						<br>
						<label class="form-label form-label-top" id="prescribed_pm_yes_no" for="prescribed_pm_yes_no"> <b>Have you ever been prescribed psychiatric medication? </b></label><span style="color:red">* </span>
						<br>
						<input  type="radio" name="prescribed_pm_yes_no" value="Yes"<?php if (isset($_POST['prescribed_pm_yes_no']) && $_POST['prescribed_pm_yes_no'] == 'Yes')  echo ' checked="checked"';?> required>Yes  
						<input  type="radio" name="prescribed_pm_yes_no" value="No" <?php if (isset($_POST['prescribed_pm_yes_no']) && $_POST['prescribed_pm_yes_no'] == 'No')  echo ' checked="checked"';?>>No
						<!--prescribed_pm_yes_no-->
						
					</div>
					
					
					
					
					<div class="form-group">
						<br><br>
						<h2><font color="green">Section 7: Additional Information (1 min)</font></h2>
						<br>
						<label class="form-label form-label-right form-label-auto" id="employment_yes_no" for="employment_yes_no"> <b>1. Are you currently employed?</b> </label><span style="color:red">* </span>
						<br>
						<input  type="radio" name="employment_yes_no" value="Yes"<?php if (isset($_POST['employment_yes_no']) && $_POST['employment_yes_no'] == 'Yes')  echo ' checked="checked"';?> required>Yes <br> 
						<input  type="radio" name="employment_yes_no" value="No" <?php if (isset($_POST['employment_yes_no']) && $_POST['employment_yes_no'] == 'No')  echo ' checked="checked"';?>>No<br>
						<!--employment_yes_no-->
						<label class="form-label form-label-top" id="employment_yes" for="employment_yes"> <b>If yes, what is your current employment situation: </b></label>
						<input type="text" class="form-control" data-type="input-textbox" id="employment_yes" name="employment_yes" size="80" placeholder="..." value="<?php echo @$_POST['employment_yes'];?>"/>
						<!--employment_yes-->
						<label class="form-label form-label-right form-label-auto" id="consent_yes_no" for="consent_yes_no"> <b>2: I give consent for my information and reports regarding myself to be obtained/released to my referring practitioner</b> <span style="color:red">* </span></label>
						<br>
						<input  type="radio" name="consent_yes_no" value="Yes"<?php if (isset($_POST['consent_yes_no']) && $_POST['consent_yes_no'] == 'Yes')  echo ' checked="checked"';?> required>Yes <br> 
						<input  type="radio" name="consent_yes_no" value="No" <?php if (isset($_POST['consent_yes_no']) && $_POST['consent_yes_no'] == 'No')  echo ' checked="checked"';?>>No<br>
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
					
						<label for="nameofparent"><b>Name of parent/guardian (if under 18 years): </b></label><span style="color:red">* <?php echo $nameofparentErr;?></span>
						<input type="text" name="nameofparent" id="nameofparent" class="form-control" placeholder="..." value="<?php echo @$_POST['nameofparent'];?>"/>
						<!--nameofparent-->
                    </div>
					
					<div class="form-group">
					
						 <label class="form-label form-label-top" id="age" for="age"><b>Age</b></label><span style="color:red">*</span>
						 <br>
						 <input class="form-control" type="number" id="age" name="age" min="1" max="100" placeholder="..." value="<?php echo @$_POST['age'];?>" required/>
						 <br>
						 
						<label  id="gender" for="gender"><b>Gender: </b></label><span style="color:red">* </span>
						
						<input  type="radio" name="gender" value="Male" <?php if (isset($_POST['gender']) && $_POST['gender'] == 'Male')  echo ' checked="checked"';?> required>Male  
						<input  type="radio" name="gender" value="Female" <?php if (isset($_POST['gender']) && $_POST['gender'] == 'Female')  echo ' checked="checked"';?>>Female

						<!--age-->
						<!--gender-->
                    </div>
					
                    <div class="form-group">
						<br>
                        <label class="form-label form-label-right form-label-auto" id="children" for="children"> <b>Please list any children/age </b></label>
						<textarea id="children" class="form-control" name="children" cols="40" rows="4" placeholder="Describe here..." ><?php if(isset($_POST['children'])) { 
         echo htmlentities ($_POST['children']); }?></textarea>
                    </div>
                        <!--children--> 
						<br>
						
					<div class="form-group">
						<label class="form-label form-label-top" id="hp" for="hp"> <b>Home Phone (Write In 0xxx-xxx-xxx)</b></label><span style="color:red">* </span>
						<br>
						<label class="form-label form-label-top" id="hpmessage" for="hpmessage"> <b>(May we leave a message? </b></label>
						<input  type="radio" name="hpmessage" value="Yes"<?php if (isset($_POST['hpmessage']) && $_POST['hpmessage'] == 'Yes')  echo ' checked="checked"';?> required>Yes  
						<input  type="radio" name="hpmessage" value="No" <?php if (isset($_POST['hpmessage']) && $_POST['hpmessage'] == 'No')  echo ' checked="checked"';?>>No )
						<!--hpmessage-->
						<br>
						<input class="form-control" type="tel" name="hppn" id="hppn" pattern="^0\d{3}-\d{3}-\d{3}$" placeholder="..." value="<?php echo @$_POST['hppn'];?>" required/>
						<!--hppn-->
					</div>
						
					<div class="form-group">
						<br>
						<label class="form-label form-label-top" id="label_87" for="input_87"> <b>Cell Phone (Write In 0xxx-xxx-xxx)</b></label><span style="color:red">* </span>
						<br>
						<label class="form-label form-label-top" id="cpmessage" for="cpmessage"> <b>(May we leave a message? </b></label>
						<input  type="radio" name="cpmessage" value="Yes" <?php if (isset($_POST['cpmessage']) && $_POST['cpmessage'] == 'Yes')  echo ' checked="checked"';?> required>Yes  
						<input  type="radio" name="cpmessage" value="No" <?php if (isset($_POST['cpmessage']) && $_POST['cpmessage'] == 'No')  echo ' checked="checked"';?>>No <b>)</b>
						<!--cpmessage-->
						<br>
						<input class="form-control" type="tel" name="cppn" id="cppn" pattern="^0\d{3}-\d{3}-\d{3}$" placeholder="..." value="<?php echo @$_POST['cppn'];?>" required />
						<!--cppn-->
					</div>
						
					<div class="form-group">
						<br>
						<label for="email"><b>Your Email</b></label><span style="color:red">*</span>
						<br>
						<label class="form-label form-label-top" id="emailmessage" for="emailmessage"> <b>(May we leave a message? </b></label>
						<input  type="radio" name="emailmessage" value="Yes" <?php if (isset($_POST['emailmessage']) && $_POST['emailmessage'] == 'Yes')  echo ' checked="checked"';?> required>Yes  
						<input  type="radio" name="emailmessage" value="No" <?php if (isset($_POST['emailmessage']) && $_POST['emailmessage'] == 'No')  echo ' checked="checked"';?> >No <b>)</b>
						<!--emailmessage-->
						<input type="email" name="email" id="email" class="form-control" placeholder="..." value="<?php echo @$_POST['email'];?>" required/>
						<!--email-->
                    </div>
					
					<br><br><br><br><br>
					<br><br><br><br>
					
					<div class="form-group">
					
						<label class="form-label form-label-top" id="Pension" for="Pension"> <b>Pension / HCC </b></label>
						<input type="text" class="form-control" data-type="input-textbox" id="Pension" name="Pension" size="20" placeholder="..." value="<?php echo @$_POST['Pension'];?>" />
						<!--Pension-->
						<label class="form-label form-label-top" id="pension_expiry" for="pension_expiry"> <b>Pension / HCC Expiry (MM/YYYY)</b></label>
						<input type="tel" class="form-control" data-type="input-textbox" id="pension_expiry" name="pension_expiry" size="20" pattern="^\d{2}/\d{4}$" placeholder="..." value="<?php echo @$_POST['pension_expiry'];?>" />
						<!--pension_expiry-->
					</div>
					
					<br><br><br><br><br><br><br><br><br><br><br>
					
					<div class="form-group">
						<label class="form-label form-label-top" id="emergency_relationship" for="emergency_relationship"> <b>Relationship </b></label><span style="color:red">* </span>
						<input type="text" class="form-control" data-type="input-textbox" id="emergency_relationship" name="emergency_relationship" size="32" placeholder="..." value="<?php echo @$_POST['emergency_relationship'];?>" required />
					<!--emergency_relationship-->
					</div>
				
					<div class="form-group">
						<br>
						<br><br><br><br><br><br><br>
						
						<label class="form-label form-label-left" id="phs_yes" for="phs_yes"> <b>If yes, Provide Previous therapist/practitioner </b></label>
						<input type="text" class="form-control" data-type="input-textbox" id="phs_yes" name="phs_yes" size="80" placeholder="..." value="<?php echo @$_POST['phs_yes'];?>" />
						<!--phs_yes-->
						
						<br><br>
						<label class="form-label form-label-left" id="current_taking_yes" for="current_taking_yes"> <b>If yes, please list </b></label>
						<input type="text" class="form-control" data-type="input-textbox" id="current_taking_yes" name="current_taking_yes" size="80" placeholder="..." value="<?php echo @$_POST['current_taking_yes'];?>" />
						<!--current_taking_yes-->
						
						<br><br>
						<label class="form-label form-label-left" id="prescribed_pm_yes" for="prescribed_pm_yes"> <b>If yes, Please list, inc. dates (where known): </b></label>
						<input type="text" class="form-control" data-type="input-textbox" id="prescribed_pm_yes" name="prescribed_pm_yes" size="80" placeholder="..." value="<?php echo @$_POST['prescribed_pm_yes'];?>" />
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