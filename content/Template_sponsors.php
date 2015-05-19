<div class="post">
	<div class="entry">
		<div id="about_us">
			<div id="aboutlinkbar"><a href="index.php?page=Sponsors">Our 2013 Robot</a> - <a href="index.php?page=About%20Us&amp;sub=team">About Our Team</a> - <a href="index.php?page=About%20Us&amp;sub=mentors">About Our Mentors</a> - <a href="index.php?page=About%20Us&amp;sub=first">About FIRST</a></div>
			<?php
					    
						$corporateSponsorList = file_get_contents("content/CorporateSponsors.txt");
						$privateSponsorList = file_get_contents("content/PrivateSponsors.txt");
						$educationSponsorList = file_get_contents("content/EducationPartners.txt");
						$fundraisingSponsorList = file_get_contents("content/FundraisingAffiliates.txt");
					
						$corporateSponsorarray = explode("\n", $corporateSponsorList);
						$privateSponsorarray = explode("\n", $privateSponsorList);
						$educationSponsorarray = explode("\n", $educationSponsorList);
						$fundraisingSponsorarray = explode("\n", $fundraisingSponsorList);

						foreach ($corporateSponsorarray as $sponsor) {
							$sponsordetails = explode(",", $sponsor);
							if($sponsordetails[1] == "") {
								echo "<li>$sponsordetails[0]</li>";
							}
							else {
								echo "<li><a style=\"target-new: tab\" target=\"new\" href=\"$sponsordetails[1]\">$sponsordetails[0]</a></li>\n";
							}
						}
						
						echo "
						<li>
							<p><b>Corporate Sponsors:</b></p>
							<ul>
							";
						
						
						echo "
							</ul>
						</li>
						<li>
							<p><b>Private Sponsors:</b></p>
							<ul>
						";
						
						foreach ($privateSponsorarray as $sponsor) {
							$sponsordetails = explode(",", $sponsor);
							if($sponsordetails[1] == "") {
								echo "<li>$sponsordetails[0]</li>";
							}
							else {
								echo "<li><a style=\"target-new: tab\" target=\"new\" href=\"$sponsordetails[1]\">$sponsordetails[0]</a></li>";
							}
						}
						
						echo "
							</ul>
						</li>
						<li>
							<p><b>Education Partners:</b></p>
							<ul>
						";
						
						foreach ($educationSponsorarray as $sponsor) {
							$sponsordetails = explode(",", $sponsor);
							if($sponsordetails[1] == "") {
								echo "<li>$sponsordetails[0]</li>";
							}
							else {
								echo "<li>$sponsordetails[0]</li>";
							}
						}
						
						echo "
							</ul>
						</li>
						<li>
							<p><b>Fundraising Affiliates:</b></p>
							<ul>
						";
						
						foreach ($fundraisingSponsorarray as $sponsor) {
							$sponsordetails = explode(",", $sponsor);
							if($sponsordetails[1] == "") {
								echo "<li>$sponsordetails[0]</li>";
							}
							else {
								echo "<li>$sponsordetails[0]</li>";
							}
						}
						
						echo "
							</ul>
						</li>
						";
						
					?>
				
		</div>
	</div>	
</div>