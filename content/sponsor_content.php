<div class="post">
	<div class="entry">
		<div id="Sponsors">
				<div id="Sponsorlinkbar"><a href="index.php?page=Sponsors">Our Sponsors</a> - <a href="index.php?page=Sponsors&sub=New Sponsors">New Sponsors</a> - <a href="index.php?page=Sponsors&sub=Sponsor Presentations">Sponsor Presentations</a> </div>
			<?php
				
				$subpage = htmlspecialchars($_GET["sub"]);
				
				if ($subpage == '') {
					$subpage = 'Our Sponsors';
				}
				
				if ($subpage == 'Our Sponsors') {
					$subText = file_get_contents("content/Our_Sponsors.txt");
				}
				elseif ($subpage == 'New Sponsors') {
					$subText = file_get_contents("content/New_Sponsors.txt");
				}
				elseif ($subpage == 'Sponsor Presentations') {
					$subText = file_get_contents("content/presentation.php");
				}
				else {
					$subText = file_get_contents("content/404.txt");
				}
				
				
				echo "<p>".$subText."</p>";
				
		</div>
	</div>
</div>	