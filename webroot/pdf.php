
<html>
<head>
	<style>
	body {font-family:Helvetica, Arial, sans-serif; font-size:10pt;}
	table {width:100%; border-collapse:collapse; border:1px solid #CCC;}
	td {padding:5px; border:1px solid #CCC; border-width:1px 0;}
	</style>
</head>
<body>
            <h2>Client Intake Form</h2>
			<h3>Personal Information of: <?php echo $post->name; ?></h3>
						<table>
						<tr>
							<td>Name:</td>
							<td><?php echo $post->name; ?></td>
							<td colspan="2">Name of parent/guardian:</td>
							<td><?php echo $post->nameofparent; ?></td>
							<td colspan="2">Referred by (if any):</td>
							<td><?php echo $post->refer; ?></td>
						</tr>
						<tr>
							<td>Birth of Date:</td>
							<td colspan="3"><?php echo $post->DOBday; ?>.<?php echo $post->DOBmonth; ?>.<?php echo $post->DOByear; ?></td>
							<td>Age:</td>
							<td><?php echo $post->age; ?></td>
							<td>Gender:</td>
							<td><?php echo $post->gender; ?></td>
						</tr>
						<tr>
							<td>Marital Status:</td>
							<td><?php echo $post->marital_status; ?></td>
							<td>Please list any children/age</td>
							<td colspan = "5"><?php echo $post->children; ?></td>
							
						</tr>
						<tr>
							<td>Street:</td>
							<td colspan="3"><?php echo $post->street1; ?></td>
							<td colspan="2">Street Line2:</td>
							<td colspan="2"><?php echo $post->street2; ?></td>
						</tr>
						<tr>
							<td>City:</td>
							<td colspan="2"><?php echo $post->city; ?></td>
							<td>State:</td>
							<td colspan="2"><?php echo $post->state; ?></td>
							<td>Postal Code:</td>
							<td><?php echo $post->postal; ?></td>
						</tr>
						<tr>
							<td>Home Phone:</td>
							<td colspan="4"><?php echo $post->hppn; ?></td>
							<td>Leave Message:</td>
							<td colspan="2"><?php echo $post->hpmessage; ?></td>
						</tr>
						<tr>
							<td>Cell Phone:</td>
							<td colspan="4"><?php echo $post->cppn; ?></td>
							<td>Leave Message:</td>
							<td colspan="2"><?php echo $post->cpmessage; ?></td>
						
						</tr>
						<tr>
							<td >Email:</td>
							<td colspan="4"><?php echo $post->email; ?></td>
							<td>Leave Message:</td>
							<td colspan="2"><?php echo $post->emailmessage; ?></td>
							
						</tr>
						<tr>
							<td colspan="2">Emergency Contact Name:</td>
							<td colspan="2"><?php echo $post->emergency_name; ?></td>
							<td>Relationship:</td>
							<td><?php echo $post->emergency_relationship; ?></td>	
							<td>Phone:</td>
							<td><?php echo $post->emergency_number; ?></td>
						</tr>

						<tr>
							<td>Medicare#:</td>
							<td colspan="2"><?php echo $post->medicare; ?></td>
							<td>Expiry:</td>
							<td><?php echo $post->medicare_expiry; ?></td>
							<td>Ref#:</td>
							<td colspan="2"><?php echo $post->medicare_ref; ?></td>
						</tr>
						<tr>
							<td>Pension/HCC:</td>
							<td colspan="3"><?php echo $post->Pension; ?></td>
							<td>Expiry:</td>
							<td colspan="3"><?php echo $post->pension_expiry; ?></td>
						</tr>
						<tr>
							<td colspan="2">Previous mental health services?</td>
							<td colspan="2"><?php echo $post->phs_yes_no; ?></td>
							<td colspan="2">Previous therapist/practitioner</td>
							<td colspan="2"><?php echo $post->phs_yes; ?></td>
						</tr>
						<tr>
							<td colspan="2">Currently taking any prescription medication:</td>
							<td colspan="2"><?php echo $post->current_taking_yes_no; ?></td>
							<td>List</td>
							<td colspan = "3"><?php echo $post->current_taking_yes; ?></td>
						</tr>
						<tr>
							<td colspan = "2">Ever been prescribed psychiatric medication:</td>
							<td colspan="2"><?php echo $post->prescribed_pm_yes_no; ?></td>
							<td>List</td>
							<td colspan = "3"><?php echo $post->prescribed_pm_yes; ?></td>
	
						</tr>
						
					
						<tr>
							<td>Currently employed:</td>
							<td colspan="3"><?php echo $post->employment_yes_no; ?></td>

							<td>Current employment situation:</td>
							<td colspan="3"><?php echo $post->employment_yes; ?></td>

						</tr>
					</table>
				<p>Give consent for information and reports to referring practitioner:</p><?php echo $post->consent_yes_no; ?>
                      <br>
					  <legend><font color="red">Note*</font> 
                </legend>
	                <p>Failure to disclose or provide accurate information may affect
the ability to provide appropriate treatment plan and Santen
Psychology cannot be held responsible.

I have read the above and have also read the privacy agreement and
consent to treatment for Santen Psychology.</p>

</body>
</html>