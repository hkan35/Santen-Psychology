
<html>
<head>
	<style>
	body {font-family:Helvetica, Arial, sans-serif; font-size:10pt;}
	table {width:100%; border-collapse:collapse; border:1px solid #CCC;}
	td {padding:5px; border:1px solid #CCC; border-width:1px 0;}
	</style>
</head>
<body>
            <h2>Client Intake Form Section 2</h2>
			<h3>Health Information of: <?php echo $post->name; ?></h3>
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
							<td>1:Current physical health:</td>
							<td><?php echo $post->rate_current_health; ?></td>
							
							<td colspan="2"><?php echo $post->current_health; ?></td>

							<td>2:Current sleeping habits:</td>
							<td><?php echo $post->rate_current_sleep; ?></td>
							
							<td colspan="2"><?php echo $post->current_sleep; ?></td>
						</tr>
						<tr>
							<td>3: Exercise per week:</td>
							<td><?php echo $post->how_many_exe; ?></td>
							<td>List Exercise</td>
							<td colspan="2"><?php echo $post->what_type_exe; ?></td>
			

							<td>4: difficulties with appetite or eating patterns:</td>
							<td colspan="2"><?php echo $post->eating; ?></td>
				
						</tr>
						<tr>
							<td colspan="5">5: Currently overwhelming sadness,grief or depression:</td>
							<td><?php echo $post->sad_yes_no; ?></td>
							<td>Approx how long</td>
							<td><?php echo $post->sad_yes; ?></td>
						</tr>
						<tr>
							<td colspan="5">6: Currently anxiety, panic attacks or have any phobias:</td>
							<td><?php echo $post->anxiety_yes_no; ?></td>
							<td>Approx how long</td>
							<td><?php echo $post->anxiety_yes; ?></td>
						</tr>
						<tr>
							<td colspan="2">7: Currently any chronic pain:</td>
							<td><?php echo $post->chronic_pain_yes_no; ?></td>
							<td>Approx how long</td>
							<td><?php echo $post->chronic_pain_yes; ?></td>
							<td colspan="2">8:Alcohol more than once a week:</td>
							<td><?php echo $post->alcohol_yes_no; ?></td>
						</tr>
						<tr>

							<td colspan="3">9:How often engage recreational drug use:</td>
							<td><?php echo $post->drug_yes_no; ?></td>
							
							<td>10:Ever smoked? </td>
							<td><?php echo $post->smoke_yes_no; ?></td>
							<td>Qty per day? </td>
							<td><?php echo $post->smoke_yes; ?></td>
						</tr>
						<tr>
							<td>11: Currently in a romantic relationship:</td>
							<td><?php echo $post->romantic_yes_no; ?></td>
							<td>How long</td>
							<td><?php echo $post->romantic_yes; ?></td>
							<td>Rate relationship</td>
							<td><?php echo $post->relationship_scale; ?></td>
							<td>Any intimacy issues? </td>
							<td><?php echo $post->intimacy_yes_no; ?></td>
						</tr>
						<tr>
							<td colspan="3">12: Significant life changes or stressful events recently:</td>
							<td colspan="5"><?php echo $post->life_change; ?></td>
						</tr>
	                
						<tr>
							<td colspan="2">1.Alcohol/Substance Abuse:</td>
							<td><?php echo $post->family_alchol_yes_no; ?></td>
							<td><?php echo $post->family_alchol_yes; ?></td>

							<td colspan="2">2.Anxiety:</td>
							<td><?php echo $post->family_anxiey_yes_no; ?></td>
							<td><?php echo $post->family_anxiey_yes; ?></td>
						</tr>
						<tr>
							<td colspan="2">3.Depression:</td>
							<td><?php echo $post->family_depres_yes_no; ?></td>
						
							<td ><?php echo $post->family_depres_yes; ?></td>

							<td colspan="2">4.Domestic Violence:</td>
							<td><?php echo $post->family_violence_yes_no; ?></td>
							
							<td><?php echo $post->family_violence_yes; ?></td>
						</tr>
						<tr>
							<td colspan="2">5.Eating Disorders:</td>
							<td><?php echo $post->family_eating_yes_no; ?></td>
							
							<td><?php echo $post->family_eating_yes; ?></td>

							<td colspan="2">6.Obesity:</td>
							<td><?php echo $post->family_obesity_yes_no; ?></td>
							
							<td><?php echo $post->family_obesity_yes; ?></td>
						</tr>
						<tr>
							<td colspan="2">7.Obsessive Compulsive Behavior:</td>
							<td><?php echo $post->family_obsessive_yes_no; ?></td>
							
							<td ><?php echo $post->family_obsessive_yes; ?></td>

							<td colspan="2">8.Schizophrenia:</td>
							<td><?php echo $post->family_Schizophrenia_yes_no; ?></td>
							
							<td><?php echo $post->family_Schizophrenia_yes; ?></td>
						</tr>
						<tr>
							<td colspan="2">9.Suicide Attempts:</td>
							<td><?php echo $post->family_suicide_yes_no; ?></td>
							
							<td ><?php echo $post->family_suicide_yes; ?></td>

							<td colspan="2">10.Bipolar:</td>
							<td><?php echo $post->family_bipolar_yes_no; ?></td>
							
							<td ><?php echo $post->family_bipolar_yes; ?></td>
						</tr>
					</table>
	

</body>
</html>