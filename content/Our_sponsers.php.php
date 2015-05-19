		<div class="post">
			<h1 class="title"><a>Our Sponsors:</a></h1>
			<div class="entry">
				<ol type="none" id="sponsorlist">
					<?php
					
						$corporateSponsorList = file_get_contents("content/CorporateSponsors.txt");
						$privateSponsorList = file_get_contents("content/PrivateSponsors.txt");
						$educationSponsorList = file_get_contents("content/EducationPartners.txt");
						$fundraisingSponsorList = file_get_contents("content/FundraisingAffiliates.txt");
					
						$corporateSponsorarray = explode("\n", $corporateSponsorList);
						$privateSponsorarray = explode("\n", $privateSponsorList);
						$educationSponsorarray = explode("\n", $educationSponsorList);
						$fundraisingSponsorarray = explode("\n", $fundraisingSponsorList);
						
						echo "
						<li>
							<p><b>Corporate Sponsors:</b></p>
							<ul>
							";
5						
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
					</br>
					</br>
					</br>
					<strong>Related Documents:</strong></br>
					<a href=http://www.team2471.org/sponsorship.doc>Sponsorship Form</a>
				</ol><?php $_COOKIE[]; ?>
			</div>
		</div>
        <div class="post">
	<div class="entry">
		<div id="about_us">
				<div id="aboutlinkbar"><a href="index.php?page=About%20Us">Our 2013 Robot</a> - <a href="index.php?page=About%20Us&amp;sub=team">About Our Team</a> - <a href="index.php?page=About%20Us&amp;sub=mentors">About Our Mentors</a> - <a href="index.php?page=About%20Us&amp;sub=first">About FIRST</a></div>
			<?php
				
				$subpage = htmlspecialchars($_GET["sub"]);
				
				if ($subpage == '') {
					$subpage = '2013 Robot';
				}
				
				if ($subpage == 'team') {
					$aboutText = file_get_contents("content/teamabout.txt");
				}
				elseif ($subpage == '2013 Robot') {
					$aboutText = file_get_contents("content/2013robotspecs.txt");
				}
				elseif ($subpage == 'first') {
					$aboutText = file_get_contents("content/firstabout.txt");
				}
				elseif ($subpage == 'mentors') {
					$aboutText = file_get_contents("content/mentorsabout.txt");
				}
				else {
					$aboutText = file_get_contents("content/404.txt");
				}
				
				
				echo "<p>".$aboutText."</p>";
			
			?>
		</div>
	</div>
</div>	