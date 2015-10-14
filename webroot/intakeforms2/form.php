<?php
	$success = false;
	$error = false;
	$nameErr  = $nameofparentErr= "";
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
				<font color="green"><h4>Congratulations! All Done! </h4></font>
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
				<h3>(Section 2 Health information)</h3>
                <p class="lead">Please provide the following information to the best of <br>your ability and answer the questions below. <br><font color="red">Please note: information you provide here is<br>protected as confidential information.</font></p>
				<p class="lead">Please fill out the information below and submit it. <br>If this is not possible we will provide this form for you at<br>your first appointment to complete.</p>
				<!--<p class="lead"><font color="red">It takes about 16 min to complete. </font></p>-->
				<!--<button onclick="goBack()" class="btn btn-success btn-md">Back To Previous Page</button>-->
				<a href="http://130.194.7.83/team04/build6/rev/pages/newclient" class="btn btn-success btn-md">Back to Home</a>
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
					<h2><font color="green">Personal Information (20%)</font></h2>
					<br><br>
                    
					
					<div class="form-group">
						<label for="name"><b>Full Name</b></label><span style="color:red">* <?php echo $nameErr;?></span>
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
						<label class="form-label form-label-right form-label-auto" id="label_89" for="refer"> <b>Referred by (if any)</b> </label>
						<input type="text" class="form-control" data-type="input-textbox" id="refer" name="refer" size="20" placeholder="..." value="<?php echo @$_POST['refer'];?>" />
						<!--refer-->
					</div>
						
                    
					
					
					<div class="form-group">
						<br>
						<h2><font color="green">Section 5: General Heath And Mental Information (40%)</font></h2>
						<br>
						<label class="form-label form-label-top" id="rate_current_health" for="rate_current_health"> <b>1: How would you rate your current physical health? </b></label><span style="color:red">*</span><br>
						<input  type="radio" name="rate_current_health" value="Poor" <?php if (isset($_POST['rate_current_health']) && $_POST['rate_current_health'] == 'Poor')  echo ' checked="checked"';?>required>  Poor<br>  
						<input  type="radio" name="rate_current_health" value="Unsatisfactory" <?php if (isset($_POST['rate_current_health']) && $_POST['rate_current_health'] == 'Unsatisfactory')  echo ' checked="checked"';?>>  Unsatisfactory<br> 
						<input  type="radio" name="rate_current_health" value="Satisfactory" <?php if (isset($_POST['rate_current_health']) && $_POST['rate_current_health'] == 'Satisfactory')  echo ' checked="checked"';?>>  Satisfactory<br>   
						<input  type="radio" name="rate_current_health" value="Good" <?php if (isset($_POST['rate_current_health']) && $_POST['rate_current_health'] == 'Good')  echo ' checked="checked"';?>>  Good<br> 
						<input  type="radio" name="rate_current_health" value="Very good" <?php if (isset($_POST['rate_current_health']) && $_POST['rate_current_health'] == 'Very good')  echo ' checked="checked"';?>>  Very good<br>
						<br><br>
						<!--rate_current_health-->
						<label class="form-label form-label-top" id="rate_current_sleep" for="rate_current_sleep"> <b>2. How would you rate your current sleeping habits?</b> </label><span style="color:red">*</span><br>
						<input  type="radio" name="rate_current_sleep" value="Poor" <?php if (isset($_POST['rate_current_sleep']) && $_POST['rate_current_sleep'] == 'Poor')  echo ' checked="checked"';?>required>  Poor<br>  
						<input  type="radio" name="rate_current_sleep" value="Unsatisfactory" <?php if (isset($_POST['rate_current_sleep']) && $_POST['rate_current_sleep'] == 'Unsatisfactory')  echo ' checked="checked"';?>>  Unsatisfactory<br> 
						<input  type="radio" name="rate_current_sleep" value="Satisfactory" <?php if (isset($_POST['rate_current_sleep']) && $_POST['rate_current_sleep'] == 'Satisfactory')  echo ' checked="checked"';?>>  Satisfactory<br>   
						<input  type="radio" name="rate_current_sleep" value="Good" <?php if (isset($_POST['rate_current_sleep']) && $_POST['rate_current_sleep'] == 'Good')  echo ' checked="checked"';?>>  Good<br> 
						<input  type="radio" name="rate_current_sleep" value="Very good" <?php if (isset($_POST['rate_current_sleep']) && $_POST['rate_current_sleep'] == 'Very good')  echo ' checked="checked"';?>>  Very good<br>
						<br>
						<!--rate_current_sleep-->
					
					</div>
					
					
					<br>
					
					<div class="form-group">
						<label class="form-label form-label-right form-label-auto" id="how_many_exe" for="how_many_exe"> <b>3. How many times per week do you generally exercise? </b></label><span style="color:red">*</span>
						<input type="text" class="form-control" data-type="input-textbox" id="how_many_exe" name="how_many_exe" size="20" placeholder="..." value="<?php echo @$_POST['how_many_exe'];?>" required/>
						<!--how_many_exe-->
					</div>
					
					<br>
										
					<div class="form-group">
						<label class="form-label form-label-right form-label-auto" id="what_type_exe" for="what_type_exe"> <b>What types of exercise do you participate in? </b></label>
						<textarea id="what_type_exe" class="form-control" name="what_type_exe" cols="40" rows="6" placeholder="Describe here..." ><?php if(isset($_POST['what_type_exe'])) { 
         echo htmlentities ($_POST['what_type_exe']); }?></textarea>
						<!--what_type_exe-->
					</div>
  
  
					<div class="form-group">
						<br>
						<label class="form-label form-label-right form-label-auto" id="sad_yes_no" for="sad_yes_no"> <b>5. Are you currently experiencing overwhelming sadness, grief or depression? <font style="color:red">*</font></b></label>
						<input  type="radio" name="sad_yes_no" value="Yes" <?php if (isset($_POST['sad_yes_no']) && $_POST['sad_yes_no'] == 'Yes')  echo ' checked="checked"';?>required>Yes<br>  
						<input  type="radio" name="sad_yes_no" value="No" <?php if (isset($_POST['sad_yes_no']) && $_POST['sad_yes_no'] == 'No')  echo ' checked="checked"';?>>No
						<!--sad_yes_no-->
						<br>
						<br>
						<br>
						<label class="form-label form-label-right form-label-auto" id="anxiety_yes_no" for="anxiety_yes_no"> <b>6. Are you currently experiencing anxiety, panic attacks or have any phobias? <font style="color:red">*</font></b></label>
						<br>
						<input  type="radio" name="anxiety_yes_no" value="Yes" <?php if (isset($_POST['anxiety_yes_no']) && $_POST['anxiety_yes_no'] == 'Yes')  echo ' checked="checked"';?>required>Yes<br>  
						<input  type="radio" name="anxiety_yes_no" value="No" <?php if (isset($_POST['anxiety_yes_no']) && $_POST['anxiety_yes_no'] == 'No')  echo ' checked="checked"';?>>No
						<!--anxiety_yes_no-->
						<br>
						<br>
						<br>
						<label class="form-label form-label-right form-label-auto" id="chronic_pain_yes_no" for="chronic_pain_yes_no"> <b>7. Are you currently experiencing any chronic pain? </b></label><span style="color:red">*</span>
						<br>
						<input  type="radio" name="chronic_pain_yes_no" value="Yes" <?php if (isset($_POST['chronic_pain_yes_no']) && $_POST['chronic_pain_yes_no'] == 'Yes')  echo ' checked="checked"';?>required>Yes<br>  
						<input  type="radio" name="chronic_pain_yes_no" value="No" <?php if (isset($_POST['chronic_pain_yes_no']) && $_POST['chronic_pain_yes_no'] == 'No')  echo ' checked="checked"';?>>No
						<!--chronic_pain_yes_no-->
						
					</div>
					
					<br><br>
					<div class="form-group">
						<label class="form-label form-label-top" id="alcohol_yes_no" for="alcohol_yes_no"> <b>8: Do you drink alcohol more than once a week? </b></label><span style="color:red">*</span>
						<br>
						<input  type="radio" name="alcohol_yes_no" value="Yes" <?php if (isset($_POST['alcohol_yes_no']) && $_POST['alcohol_yes_no'] == 'Yes')  echo ' checked="checked"';?>required>Yes<br>  
						<input  type="radio" name="alcohol_yes_no" value="No" <?php if (isset($_POST['alcohol_yes_no']) && $_POST['alcohol_yes_no'] == 'No')  echo ' checked="checked"';?>>No
					</div>
					<!--alcohol_yes_no-->
					<br>
					<div class="form-group">
						<label class="form-label form-label-top" id="drug_yes_no" for="drug_yes_no"> <b>9. How often do you engage recreational drug use? </b></label><span style="color:red">*</span>
						<br>
						<input  type="radio" name="drug_yes_no" value="Daily" <?php if (isset($_POST['drug_yes_no']) && $_POST['drug_yes_no'] == 'Daily')  echo ' checked="checked"';?>required>Daily<br>  
						<input  type="radio" name="drug_yes_no" value="Weekly" <?php if (isset($_POST['drug_yes_no']) && $_POST['drug_yes_no'] == 'Weekly')  echo ' checked="checked"';?>>Weekly<br>
						<input  type="radio" name="drug_yes_no" value="Monthly" <?php if (isset($_POST['drug_yes_no']) && $_POST['drug_yes_no'] == 'Monthly')  echo ' checked="checked"';?>>Monthly<br>
						<input  type="radio" name="drug_yes_no" value="Infrequently" <?php if (isset($_POST['drug_yes_no']) && $_POST['drug_yes_no'] == 'Infrequently')  echo ' checked="checked"';?>>Infrequently<br>
						<input  type="radio" name="drug_yes_no" value="Never" <?php if (isset($_POST['drug_yes_no']) && $_POST['drug_yes_no'] == 'Never')  echo ' checked="checked"';?>>Never<br>
					</div>
					<!--drug_yes_no-->
					
					<br>
					<div class="form-group">
						<label class="form-label form-label-top" id="romantic_yes_no" for="romantic_yes_no"> <b>10. Are you currently in a romantic relationship? </b></label><span style="color:red">*</span>
						<br>
						<input  type="radio" name="romantic_yes_no" value="Yes" <?php if (isset($_POST['romantic_yes_no']) && $_POST['romantic_yes_no'] == 'Yes')  echo ' checked="checked"';?>required>Yes<br>  
						<input  type="radio" name="romantic_yes_no" value="No" <?php if (isset($_POST['romantic_yes_no']) && $_POST['romantic_yes_no'] == 'No')  echo ' checked="checked"';?>>No
					</div>
					<!--romantic_yes_no-->
					
					<div class="form-group">
						<label class="form-label form-label-top" id="relationship_scale" for="relationship_scale"> <b>On a scale of 1-10, how would you rate your relationship? </b></label>
						<input type="number" min="1" max="10" class="form-control" data-type="input-textbox" id="relationship_scale" name="relationship_scale" size="80" placeholder="..." value="<?php echo @$_POST['relationship_scale'];?>" />
						<!--relationship_scale-->
					</div>
					
					<br>
					<div class="form-group">
						<label class="form-label form-label-right form-label-auto" id="life_change" for="life_change"> <b>11. What significant life changes or stressful events have you experienced recently: </b></label>
						<textarea id="life_change" class="form-control" name="life_change" cols="40" rows="6" placeholder="Describe here..." ><?php if(isset($_POST['life_change'])) { 
         echo htmlentities ($_POST['life_change']); }?></textarea>
						<!--life_change-->
					</div>
					
					<div class="form-group">
						<label class="form-label form-label-top" id="smoke_yes_no" for="smoke_yes_no"> <b>12. Have you ever smoked? </b></label><span style="color:red">*</span>
						<br>
						<input  type="radio" name="smoke_yes_no" value="Never" <?php if (isset($_POST['smoke_yes_no']) && $_POST['smoke_yes_no'] == 'Never')  echo ' checked="checked"';?>required>Never<br>  
						<input  type="radio" name="smoke_yes_no" value="Not any more" <?php if (isset($_POST['smoke_yes_no']) && $_POST['smoke_yes_no'] == 'Not any more')  echo ' checked="checked"';?>>Not any more<br>
						<input  type="radio" name="smoke_yes_no" value="Currently" <?php if (isset($_POST['smoke_yes_no']) && $_POST['smoke_yes_no'] == 'Currently')  echo ' checked="checked"';?>>Currently
						<!--smoke_yes_no-->
					</div>
					
					<div class="form-group">
						<br>
						<br>
						<h2><font color="green">Section 6: Family Mental Health History (40%)</font></h2>
						<br>
						<p>In the section below identify if there is a family history of any of the following. </p>
						<p><br>If yes, please indicate the family member’s relationship to you in the<br>space provided </p>
						<p>(father, grandmother, uncle, etc.).<p>
						
						<br><br>
						<label class="form-label form-label-top" id="family_alchol_yes_no" for="family_alchol_yes_no"> <b>1. Alcohol/Substance Abuse: </b></label><span style="color:red">*</span>
						<br>
						<input  type="radio" name="family_alchol_yes_no" value="Yes" <?php if (isset($_POST['family_alchol_yes_no']) && $_POST['family_alchol_yes_no'] == 'Yes')  echo ' checked="checked"';?>required>Yes<br>  
						<input  type="radio" name="family_alchol_yes_no" value="No" <?php if (isset($_POST['family_alchol_yes_no']) && $_POST['family_alchol_yes_no'] == 'No')  echo ' checked="checked"';?>>No<br>
						<!--family_alchol_yes_no-->
						
						<label class="form-label form-label-left" id="family_alchol_yes" for="family_alchol_yes"> <b>If yes, please list </b></label>
						<input type="text" class="form-control" data-type="input-textbox" id="family_alchol_yes" name="family_alchol_yes" size="80" placeholder="..." value="<?php echo @$_POST['family_alchol_yes'];?>" />
						<!--family_alchol_yes-->
						
						<br>
						<label class="form-label form-label-top" id="family_anxiey_yes_no" for="family_anxiey_yes_no"> <b>2. Anxiety: </b></label><span style="color:red">*</span>
						<br>
						<input  type="radio" name="family_anxiey_yes_no" value="Yes" <?php if (isset($_POST['family_anxiey_yes_no']) && $_POST['family_anxiey_yes_no'] == 'Yes')  echo ' checked="checked"';?>required>Yes  <br>
						<input  type="radio" name="family_anxiey_yes_no" value="No" <?php if (isset($_POST['family_anxiey_yes_no']) && $_POST['family_anxiey_yes_no'] == 'No')  echo ' checked="checked"';?>>No<br>
						<!--family_anxiey_yes_no-->
						<label class="form-label form-label-left" id="family_anxiey_yes" for="family_anxiey_yes"> <b>If yes, please list </b></label>
						<input type="text" class="form-control" data-type="input-textbox" id="family_anxiey_yes" name="family_anxiey_yes" size="80" placeholder="..." value="<?php echo @$_POST['family_anxiey_yes'];?>" />
						<!--family_anxiey_yes-->
						
						
						<br>
						<label class="form-label form-label-top" id="family_depres_yes_no" for="family_depres_yes_no"> <b>3. Depression: </b></label><span style="color:red">*</span>
						<br>
						<input  type="radio" name="family_depres_yes_no" value="Yes" <?php if (isset($_POST['family_depres_yes_no']) && $_POST['family_depres_yes_no'] == 'Yes')  echo ' checked="checked"';?>required>Yes<br>  
						<input  type="radio" name="family_depres_yes_no" value="No" <?php if (isset($_POST['family_depres_yes_no']) && $_POST['family_depres_yes_no'] == 'No')  echo ' checked="checked"';?>>No<br>
						<!--family_depres_yes_no-->
						<label class="form-label form-label-left" id="family_depres_yes" for="family_depres_yes"> <b>If yes, please list </b></label>
						<input type="text" class="form-control" data-type="input-textbox" id="family_depres_yes" name="family_depres_yes" size="80" placeholder="..." value="<?php echo @$_POST['family_depres_yes'];?>" />
						<!--family_depres_yes-->
						
						
						<br>
						<label class="form-label form-label-top" id="family_violence_yes_no" for="family_violence_yes_no"> <b>4. Domestic Violence: </b></label><span style="color:red">*</span>
						<br>
						<input  type="radio" name="family_violence_yes_no" value="Yes" <?php if (isset($_POST['family_violence_yes_no']) && $_POST['family_violence_yes_no'] == 'Yes')  echo ' checked="checked"';?>required>Yes <br> 
						<input  type="radio" name="family_violence_yes_no" value="No" <?php if (isset($_POST['family_violence_yes_no']) && $_POST['family_violence_yes_no'] == 'No')  echo ' checked="checked"';?>>No<br>
						<!--family_violence_yes_no-->
						<label class="form-label form-label-left" id="family_violence_yes" for="family_violence_yes"> <b>If yes, please list </b></label>
						<input type="text" class="form-control" data-type="input-textbox" id="family_violence_yes" name="family_violence_yes" size="80" placeholder="..." value="<?php echo @$_POST['family_violence_yes'];?>" />
						<!--family_violence_yes-->
						
						
						<br>
						<label class="form-label form-label-top" id="family_eating_yes_no" for="family_eating_yes_no"> <b>5. Eating Disorders:</b> </label><span style="color:red">*</span>
						<br>
						<input  type="radio" name="family_eating_yes_no" value="Yes" <?php if (isset($_POST['family_eating_yes_no']) && $_POST['family_eating_yes_no'] == 'Yes')  echo ' checked="checked"';?>required>Yes <br> 
						<input  type="radio" name="family_eating_yes_no" value="No" <?php if (isset($_POST['family_eating_yes_no']) && $_POST['family_eating_yes_no'] == 'No')  echo ' checked="checked"';?>>No<br>
						<!--family_eating_yes_no-->
						<label class="form-label form-label-left" id="family_eating_yes" for="family_eating_yes"> <b>If yes, please list </b></label>
						<input type="text" class="form-control" data-type="input-textbox" id="family_eating_yes" name="family_eating_yes" size="80" placeholder="..." value="<?php echo @$_POST['family_eating_yes'];?>" />
						<!--family_eating_yes-->
						
						
						
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
						<br><br><br><br><br>
						<br><br><br><br><br>
						
						<label class="form-label form-label-right form-label-auto" id="current_health" for="current_health"> <b>Please list any specific health problems you are currently experiencing: </b></label>
						<textarea id="input_172" class="form-control" name="current_health" cols="40" rows="4" placeholder="Describe here..." ><?php if(isset($_POST['current_health'])) { 
         echo htmlentities ($_POST['current_health']); }?></textarea>
						<!--current_health-->
						<br>
						<label class="form-label form-label-right form-label-auto" id="current_sleep" for="current_sleep"> <b>Please list any specific sleep problems you are currently experiencing: </b></label>
						<textarea id="input_172" class="form-control" name="current_sleep" cols="40" rows="4" placeholder="Describe here..." ><?php if(isset($_POST['current_sleep'])) { 
         echo htmlentities ($_POST['current_sleep']); }?></textarea>
						<!--current_sleep-->
						
					</div>
					
					<br><br>
	
					
					<div class="form-group">
						<label class="form-label form-label-right form-label-auto" id="eating" for="eating"> <b>4. Please list any difficulties you experience with your appetite or eating patterns </b></label>
						<textarea id="input_177" class="form-control" name="eating" cols="40" rows="6" placeholder="Describe here..." ><?php if(isset($_POST['eating'])) { 
         echo htmlentities ($_POST['eating']); }?></textarea>
						<!--eating-->
					</div>	
					
					
					<div class="form-group">
						<br>
						<br>
						<br>
						<br>
						<br>
						
						
						<label class="form-label form-label-left" id="sad_yes" for="sad_yes"> <b>If yes, for approx how long? </b></label>
						<input type="text" class="form-control" data-type="input-textbox" id="sad_yes" name="sad_yes" size="80" value="<?php echo @$_POST['sad_yes'];?>" />
						<!--sad_yes-->
						
						<br><br><br>
						<label class="form-label form-label-left" id="anxiety_yes" for="anxiety_yes"> <b>If yes, for approx how long? </b></label>
						<input type="text" class="form-control" data-type="input-textbox" id="anxiety_yes" name="anxiety_yes" size="80" value="<?php echo @$_POST['anxiety_yes'];?>" />
						<!--anxiety_yes-->
						
						<br><br><br><br>
						<label class="form-label form-label-left" id="chronic_pain_yes" for="chronic_pain_yes"> <b>If yes, for approx how long? </b></label>
						<input type="text" class="form-control" data-type="input-textbox" id="chronic_pain_yes" name="chronic_pain_yes" size="80" value="<?php echo @$_POST['chronic_pain_yes'];?>" />
						<!--chronic_pain_yes-->
					</div>
					
					<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
					
					<div class="form-group">
						<label class="form-label form-label-top" id="romantic_yes" for="romantic_yes"> <b>If yes, for how long? </b></label>
						<input type="text" class="form-control" data-type="input-textbox" id="romantic_yes" name="romantic_yes" size="80" value="<?php echo @$_POST['romantic_yes'];?>" />
						<!--romantic_yes-->
					</div>
					
					<div class="form-group">
					<br>
						<label class="form-label form-label-top" id="intimacy_yes_no" for="intimacy_yes_no"> <b>Any intimacy issues? </b></label>
						<br>
						<input  type="radio" name="intimacy_yes_no" value="Yes" <?php if (isset($_POST['intimacy_yes_no']) && $_POST['intimacy_yes_no'] == 'Yes')  echo ' checked="checked"';?>>Yes<br>  
						<input  type="radio" name="intimacy_yes_no" value="No" <?php if (isset($_POST['intimacy_yes_no']) && $_POST['intimacy_yes_no'] == 'No')  echo ' checked="checked"';?>>No
						<!--intimacy_yes_no-->
					</div>
					
					<br><br><br><br><br><br><br><br><br><br>
					
					<div class="form-group">
						<label class="form-label form-label-top" id="smoke_yes" for="smoke_yes"> <b>If currently, qty per day? </b></label>
						<input type="text" class="form-control" data-type="input-textbox" id="smoke_yes" name="smoke_yes" size="80" value="<?php echo @$_POST['smoke_yes'];?>" />
						<!--smoke_yes-->
					</div>
					
					<div class="form-group">
					<br><br><br><br><br><br><br><br><br><br><br><br><br><br>
				
						<label class="form-label form-label-top" id="family_obesity_yes_no" for="family_obesity_yes_no"> <b>6. Obesity: </b></label><span style="color:red">*</span>
						<br>
						<input  type="radio" name="family_obesity_yes_no" value="Yes" <?php if (isset($_POST['family_obesity_yes_no']) && $_POST['family_obesity_yes_no'] == 'Yes')  echo ' checked="checked"';?>required>Yes  <br>
						<input  type="radio" name="family_obesity_yes_no" value="No" <?php if (isset($_POST['family_obesity_yes_no']) && $_POST['family_obesity_yes_no'] == 'No')  echo ' checked="checked"';?>>No<br>
						<!--family_obesity_yes_no-->
						<label class="form-label form-label-left" id="family_obesity_yes" for="family_obesity_yes"> <b>If yes, please list </b></label>
						<input type="text" class="form-control" data-type="input-textbox" id="family_obesity_yes" name="family_obesity_yes" size="80" value="<?php echo @$_POST['family_obesity_yes'];?>" />
						<!--family_obesity_yes-->
						
						
						<br>
						<label class="form-label form-label-top" id="family_obsessive_yes_no" for="family_obsessive_yes_no"> <b>7. Obsessive Compulsive Behavior:</b> </label><span style="color:red">*</span>
						<br>
						<input  type="radio" name="family_obsessive_yes_no" value="Yes" <?php if (isset($_POST['family_obsessive_yes_no']) && $_POST['family_obsessive_yes_no'] == 'Yes')  echo ' checked="checked"';?>required>Yes  <br>
						<input  type="radio" name="family_obsessive_yes_no" value="No" <?php if (isset($_POST['family_obsessive_yes_no']) && $_POST['family_obsessive_yes_no'] == 'No')  echo ' checked="checked"';?>>No<br>
						<!--family_obsessive_yes_no-->
						<label class="form-label form-label-left" id="family_obsessive_yes" for="family_obsessive_yes"> <b>If yes, please list </b></label>
						<input type="text" class="form-control" data-type="input-textbox" id="family_obsessive_yes" name="family_obsessive_yes" size="80" value="<?php echo @$_POST['family_obsessive_yes'];?>" />
						<!--family_obsessive_yes-->
						
						
						<br>
						<label class="form-label form-label-top" id="family_Schizophrenia_yes_no" for="family_Schizophrenia_yes_no"> <b>8. Schizophrenia: </b></label><span style="color:red">*</span>
						<br>
						<input  type="radio" name="family_Schizophrenia_yes_no" value="Yes" <?php if (isset($_POST['family_Schizophrenia_yes_no']) && $_POST['family_Schizophrenia_yes_no'] == 'Yes')  echo ' checked="checked"';?>required>Yes  <br>
						<input  type="radio" name="family_Schizophrenia_yes_no" value="No" <?php if (isset($_POST['family_Schizophrenia_yes_no']) && $_POST['family_Schizophrenia_yes_no'] == 'No')  echo ' checked="checked"';?>>No<br>
						<!--family_Schizophrenia_yes_no-->
						<label class="form-label form-label-left" id="family_Schizophrenia_yes" for="family_Schizophrenia_yes"> <b>If yes, please list </b></label>
						<input type="text" class="form-control" data-type="input-textbox" id="family_Schizophrenia_yes" name="family_Schizophrenia_yes" size="80" value="<?php echo @$_POST['family_Schizophrenia_yes'];?>" />
						<!--family_Schizophrenia_yes-->
						
						
						
						
						
						<br>
						<label class="form-label form-label-top" id="family_bipolar_yes_no" for="family_bipolar_yes_no"> <b>9. Bipolar: </b></label><span style="color:red">*</span>
						<br>
						<input  type="radio" name="family_bipolar_yes_no" value="Yes" <?php if (isset($_POST['family_bipolar_yes_no']) && $_POST['family_bipolar_yes_no'] == 'Yes')  echo ' checked="checked"';?>required>Yes  <br>
						<input  type="radio" name="family_bipolar_yes_no" value="No" <?php if (isset($_POST['family_bipolar_yes_no']) && $_POST['family_bipolar_yes_no'] == 'No')  echo ' checked="checked"';?>>No<br>
						<!--family_bipolar_yes_no-->
						<label class="form-label form-label-left" id="family_bipolar_yes" for="family_bipolar_yes"> <b>If yes, please list</b> </label>
						<input type="text" class="form-control" data-type="input-textbox" id="family_bipolar_yes" name="family_bipolar_yes" size="80" value="<?php echo @$_POST['family_bipolar_yes'];?>" />
						<!--family_bipolar_yes-->
						
						
						<br>
						<label class="form-label form-label-top" id="family_suicide_yes_no" for="family_suicide_yes_no"> <b>10. Suicide Attempts: </b></label><span style="color:red">*</span>
						<br>
						<input  type="radio" name="family_suicide_yes_no" value="Yes" <?php if (isset($_POST['family_suicide_yes_no']) && $_POST['family_suicide_yes_no'] == 'Yes')  echo ' checked="checked"';?>required>Yes  <br>
						<input  type="radio" name="family_suicide_yes_no" value="No" <?php if (isset($_POST['family_suicide_yes_no']) && $_POST['family_suicide_yes_no'] == 'No')  echo ' checked="checked"';?>>No<br>
						<!--family_suicide_yes_no-->
						<label class="form-label form-label-left" id="family_suicide_yes" for="family_suicide_yes"> <b>If yes, please list </b></label>
						<input type="text" class="form-control" data-type="input-textbox" id="family_suicide_yes" name="family_suicide_yes" size="80" value="<?php echo @$_POST['family_suicide_yes'];?>" />
						<!--family_suicide_yes-->
						
					</div>
					
					
                    <div class="form-group">
					<br>
						<button type="submit" name="submit" class="btn btn-primary btn-lg">Submit Form</button>
                    </div>
                </div>
                </form> 
            </div><!--/.row-->
			<div class="form-group">
					<p><font color="red" size="2">Note* Failure to disclose or provide accurate information may affect the ability to provide appropriate treatment plan and Santen Psychology cannot be held responsible.
					I have read the above and have also read the privacy agreement and consent to treatment for Santen Psychology.</font></p>
					
					
					</div>
        </div><!--/.container-->
    </section><!--/#contact-page-->
</body>
</html>