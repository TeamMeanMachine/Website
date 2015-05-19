<div class="post">
	<div class="entry">
		<div id="about_us">
				<div id="aboutlinkbar"><a href="index.php?page=About%20Us">The Team</a> - <a href="index.php?page=About%20Us&amp;sub=2013 Robot">About Our Robot</a> - <a href="index.php?page=About%20Us&amp;sub=mentors">About Our Mentors</a> - <a href="index.php?page=About%20Us&amp;sub=first">About FIRST</a> - <a href="index.php?page=About%20Us&amp;sub=Safety">About the Safety Team</a></div>
			<?php
				
				$subpage = htmlspecialchars($_GET["sub"]);
				
				if ($subpage == '') {
					$subpage = 'team';
				}
				
				if ($subpage == 'team') {
					$aboutText = file_get_contents("content/teamabout.txt");
				}
				elseif ($subpage == '2013 Robot') {
					$aboutText = file_get_contents("content/2013robotspecs.html");
				}
				elseif ($subpage == 'first') {
					$aboutText = file_get_contents("content/firstabout.html");
				}
				elseif ($subpage == 'mentors') {
					$aboutText = file_get_contents("content/about_mentors.html");
				}
				elseif ($subpage == 'Safety') {
					$aboutText = file_get_contents("content/Safety.txt");
				}
	 			else {
					$aboutText = file_get_contents("content/404.txt");
				}
				
				
				echo "<p>".$aboutText."</p>";
			
			?>
		</div>
	</div>
</div>	
