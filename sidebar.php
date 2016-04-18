		<div id="sidebar2" class="sidebar">
			<ul>
				<li>
					<a href="http://www.firstinspires.org/"><img src="images/FRCicon_RGB.gif" class="firstlogo" alt="FIRST Logo"></a>
				</li>
				<li>
					<h2>Twitter</h2>
					<br />
					<div id="twitter">
						<a class="twitter-timeline" href="https://twitter.com/MeanMachine2471" data-widget-id="350758890092232704">Tweets by @MeanMachine2471</a>
						<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
					</div>
				</li>
				<li>
					<h2>Sponsors</h2>
					<ul class="sponsorlist">
					<b>
					<?php
					
					$corporateSponsorList = file_get_contents("content/CorporateSponsors.txt");
					$privateSponsorList = file_get_contents("content/PrivateSponsors.txt");
					$educationSponsorList = file_get_contents("content/EducationPartners.txt");
					$fundraisingSponsorList = file_get_contents("content/FundraisingAffiliates.txt");
					
					$corporateSponsorarray = explode("\n", $corporateSponsorList);
					$privateSponsorarray = explode("\n", $privateSponsorList);
					$educationSponsorarray = explode("\n", $educationSponsorList);
					$fundraisingSponsorarray = explode("\n", $fundraisingSponsorList);
					
					echo "<h3>Corporate Sponsors</h3>";		
					
					foreach ($corporateSponsorarray as $sponsor) {
						$sponsordetails = explode(",", $sponsor);
						if($sponsordetails[1] == "") {
							echo "<br /> -$sponsordetails[0] <br />";
						}
						else {
							echo "<br /> -<a style=\"target-new: tab\" target=\"new\" href=\"$sponsordetails[1]\">$sponsordetails[0]</a> <br />";
						}
					}
					
					echo "<h3>Private Sponsors</h3>";
					
					foreach ($privateSponsorarray as $sponsor) {
						$sponsordetails = explode(",", $sponsor);
						if($sponsordetails[1] == "") {
							echo "<br /> -$sponsordetails[0] <br />";
						}
						else {
							echo "<br /> -<a style=\"target-new: tab\" target=\"new\" href=\"$sponsordetails[1]\">$sponsordetails[0]</a> <br />";
						}
					}
					
					echo "<h3>Education Sponsors</h3>";
					
					foreach ($educationSponsorarray as $sponsor) {
						$sponsordetails = explode(",", $sponsor);
						if($sponsordetails[1] == "") {
							echo "<br /> -$sponsordetails[0] <br />";
						}
						else {
							echo "<br /> -<a style=\"target-new: tab\" target=\"new\" href=\"$sponsordetails[1]\">$sponsordetails[0]</a> <br />";
						}
					}
					
					// foreach ($fundraisingSponsorarray as $sponsor) {
						// $sponsordetails = explode(",", $sponsor);
						// if($sponsordetails[1] == "") {
							// echo "<br /> -$sponsordetails[0] <br />";
						// }
						// else {
							// echo "<br /> -<a style=\"target-new: tab\" target=\"new\" href=\"$sponsordetails[1]\">$sponsordetails[0]</a> <br />";
						// }
					// }
					
					?>
					<br />
					<p>View our <a href="index.php?page=Sponsors">Sponsor Page</a></p>
					</b>
					</ul>
				</li>
				<li>
					<h2>FIRST websites</h2>
					<br />
					<a href="http://www.firstwa.org/"><img alt="FirstWA Logo" src="images/FIRSTWALogo.png" class="firstlogo"></a>
					<br />
					<a href="http://oregonfirst.org/"><img alt="Oregon First Logo" src="images/OregonFirstLogo.png" class="firstlogo"></a>
				</li>
			</ul>
		</div>
