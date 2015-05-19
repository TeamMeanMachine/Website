<script type="text/javascript">

	featuredcontentglider.init({
		gliderid: "container", //ID of main glider container
		contentclass: "glidecontent", //Shared CSS class name of each glider content
		togglerid: "p-select", //ID of toggler container
		remotecontent: "", //Get gliding contents from external file on server? "filename" or "" to disable
		selected: 0, //Default selected content index (0=1st)
		persiststate: false, //Remember last content shown within browser session (true/false)?
		speed: 500, //Glide animation duration (in milliseconds)
		direction: "updown", //set direction of glide: "updown", "downup", "leftright", or "downup"
		autorotate: false, //Auto rotate contents (true/false)?
		autorotateconfig: [3000, 2] //if auto rotate enabled, set [milliseconds_btw_rotations, cycles_before_stopping]
	})

</script>
<div id="container" class="glidecontentwrapper">

<div class="glidecontent">
				<div class="header_01">About Our Company</div>
</div>

<div class="glidecontent">2</div>

<div class="glidecontent">3</div>

<div class="glidecontent">4</div>

<div class="glidecontent">5</div>

<div id="p-select" class="glidecontenttoggler">
	<a href="#" class="toc">Page 1</a>
	<a href="#" class="toc">Page 2</a>
	<a href="#" class="toc">Page 3</a>
	<a href="#" class="toc">Page 4</a>
	<a href="#" class="toc">Page 5</a>
</div>
</div>