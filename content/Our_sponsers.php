<div class="post">
	<h1 class="title" style="text-align:center"><font size="25">Our Sponsors</font></h1>
	<br>
    
    <script src="jquery/collageplus/jquery.collagePlus.js"></script>
    <script src="jquery/collageplus/extras/jquery.removeWhitespace.js"></script>
    <script src="jquery/collageplus/extras/jquery.collageCaption.js"></script>
    
    <script type="text/javascript">
        // All images need to be loaded for this plugin to work so
        // we end up waiting for the whole window to load in this example
        $(window).load(function () {
            $(document).ready(function(){
                collage();
                $('.Collage').collageCaption();
            });
        });
    
    
        // Here we apply the actual CollagePlus plugin
        function collage() {
            $('.Collage').removeWhitespace().collagePlus(
                {
                    'fadeSpeed'     : 2000,
                    'targetHeight'  : 100,
                    'allowPartialLastRow' : true
                }
            );
        };
    
        // This is just for the case that the browser window is resized
        var resizeTimer = null;
        $(window).bind('resize', function() {
            // hide all the images until we resize them
            $('.Collage .Image_Wrapper').css("opacity", 0);
            // set a timer to re-apply the plugin
            if (resizeTimer) clearTimeout(resizeTimer);
            resizeTimer = setTimeout(collage, 200);
        });
    </script>
    
    <section class="Collage effect-parent">
        <div class="Image_Wrapper" data-caption="Camas School District">
            <a target="_blank" href="http://www.camas.wednet.edu"><img src="images/sponsor_logos/CSD-logo.jpg"></a>
        </div>
        <div class="Image_Wrapper" data-caption="US Digital">
            <a target="_blank" href="http://www.usdigital.com"><img src="images/sponsor_logos/usdigital.jpg"></a>
        </div>
        <div class="Image_Wrapper" data-caption="Thomas & Betts - A member of the ABB group">
            <a><img src="images/sponsor_logos/thomasbetts.gif"></a>
        </div>
		<div class="Image_Wrapper" data-caption="Boeing">
            <a target="_blank" href="http://boeing.com/"><img src="images/sponsor_logos/boeing.jpg"></a>
        </div>
		<div class="Image_Wrapper" data-caption="OSPI">
			<a target="_blank" href="http://www.k12.wa.us/"><img src="images/sponsor_logos/ospi.jpg"></a>
		</div>
        <div class="Image_Wrapper" data-caption="Camas HS">
            <a target="_blank" href="http://chs.camas.wednet.edu/"><img src="images/sponsor_logos/chs.jpg"></a>
        </div>
        <div class="Image_Wrapper" data-caption="Linear Technology">
            <a target="_blank" href="http://www.linear.com"><img src="images/sponsor_logos/linear.jpg"></a>
        </div>
        <div class="Image_Wrapper" data-caption="Hewlett-Packard">
            <a target="_blank" href="http://www.hp.com/country/us/en/uc/welcome.html"><img src="images/sponsor_logos/HP.jpg"></a>
        </div>
        <div class="Image_Wrapper" data-caption="iPly Designs">
            <a><img src="images/sponsor_logos/iply.jpg"></a>
        </div>
        <div class="Image_Wrapper" data-caption="Jireh Semiconductor">
            <a target="_blank" href="http://www.aosmd.com/"><img src="images/sponsor_logos/Jireh_Blue_Logo_HiRes.png"></a>
        </div>
		<div class="Image_Wrapper" data-caption="DW Fritz">
            <a target="_blank" href="http://dwfritz.com/"><img src="images/sponsor_logos/dwfritz.jpg"></a>
        </div>
    </section>
    
	<br><br><br>
	<div class="entry">
		<a href="index.php?page=Sponsor%20Us"><img src="images/button.jpeg"></a>
		<br><br><br><br>
		<table cellspacing="0" id="sponsortable">
			<tr>
				<th>Titanium - $5,000+</th>
				<th>Aluminum - $2,000+</th>
				<th>Wood - $1,000+</th>
				<th>Plastic - $500+</th>
				<th class="last">Duct Tape - $100+</th>
			<tr>
			<tr><!--1-->
				<td><a target="_blank" href="http://www.camas.wednet.edu">Camas School District</a></td> <!--Titanium 5,000-->
				<td><a target="_blank" href="http://boeing.com/">Boeing</a></td> <!--Aluminum 2,500-->
				<td><a target="_blank" href="http://www.cwrotary.com/">Camas/Washougal Rotary</a></td> <!--Wood 1,000-->
				<td><a>Murray Family</a></td> <!--Plastic 500-->
				<td class="last"><a target="_blank" href="http://dwfritz.com/">DW Frtiz</a></td> <!--Zip Tie 100-->
			</tr>
			<tr><!--2-->
				<td><a target="_blank" href="http://www.cefcamas.org/">Camas Educational Foundation</a></td> <!--Titanium 5,000-->
				<td><a>iPly Designs</a></td> <!--Aluminum 2,500-->
				<td><a target="_blank" href="http://www.hp.com/country/us/en/uc/welcome.html">Hewlett-Packard</a></td> <!--Wood 1,000-->
				<td><a target="_blank" href="http://www.wacom.com/">Wacom</a></td> <!--Plastic 500-->
				<td class="last"><a target="_blank" href="http://www.columbiaokura.com/">Columbia Okura</a></td> <!--Zip Tie 100-->
			</tr>
			<tr><!--3-->
				<td><a target="_blank" href="http://usdigital.com/">US Digital</a></td> <!--Titanium 5,000-->
				<td><a target="_blank" href="http://www.hocksd.org/">Hockinson School District</a></td> <!--Aluminum 2,500-->
				<td><a target="_blank" href="http://www.speea.org/">SPEEA</a></td> <!--Wood 1,000-->
				<td><a target="_blank" href="http://www.local1159.com/">Professional Firefighters Local 1159</a></td> <!--Plastic 500-->
				<td class="last"><a target="_blank" href="http://www.interstatebatteries.com/">Interstate Batteries</a></td> <!--Zip Tie 100-->
			</tr>
			<tr><!--4-->
				<td><a target="_blank" href="http://www.wafertech.com/en/index.html">Wafertech</a></td> <!--Titanium 5,000-->
				<td><a target="_blank" href="http://www.washougal.k12.wa.us/">Washougal School District</a></td> <!--Aluminum 2,500-->
				<td><a target="_blank" href="https://www.gp.com/">Georgia Pacific</a></td> <!--Wood 1,000-->
				<td><a target="_blank" href="http://www.retailimaging.com/">Retail Image Management Group</a></td> <!--Plastic 500-->
				<td class="last"><a>International Association of Machinists and Aerospace Workers</a></td> <!--Zip Tie 100-->
			</tr>
			<tr><!--5-->
				<td><a target="_blank" href="http://www.k12.wa.us/">OSPI</a></td> <!--Titanium 5,000-->
				<td><a target="_blank" href="http://www.linear.com">Linear Technology</a></td> <!--Aluminum 2,500-->
				<td><a target="_blank" href="https://www.riverviewbank.com/">Riverview Bank</a></td> <!--Wood 1,000-->
				<td><a target="_blank" href="http://www.seasonsfinancialonline.com/">Seasons Financial</a></td> <!--Plastic 500-->
				<td class="last"></td> <!--Zip Tie 100-->
			</tr>
			<tr><!--6-->
				<td><a target="_blank" href="http://www.tnb.com/">Thomas and Betts - A member of the ABB group</a></td> <!--Titanium 5,000-->
				<td><a>Lange Family</a></td> <!--Aluminum 2,500-->
				<td><a target="_blank" href="http://www.deltamotion.com/index.php">Delta Computer Systems</a></td> <!--Wood 1,000-->
				<td><a>Barsotti Family</a></td> <!--Plastic 500-->
				<td class="last"></td> <!--Zip Tie 100-->
			</tr>
			<tr><!--7-->
				<td></td> <!--Titanium 5,000-->
				<td></td> <!--Aluminum 2,500-->
				<td></td> <!--Wood 1,000-->
				<td><a target="_blank" href="http://www.industrialmachineservices.com/">Industrial Machine Services</a></td> <!--Plastic 500-->
				<td class="last"></td> <!--Zip Tie 100-->
			</tr>
			<tr><!--8-->
				<td></td> <!--Titanium 5,000-->
				<td></td> <!--Aluminum 2,500-->
				<td></td> <!--Wood 1,000-->
				<td><a target="_blank" href="http://www.gates.com/">Gates</a></td> <!--Plastic 500-->
				<td class="last"></td> <!--Zip Tie 100-->
			</tr>
			<tr><!--9-->
				<td></td> <!--Titanium 5,000-->
				<td></td> <!--Aluminum 2,500-->
				<td></td> <!--Wood 1,000-->
				<td><a target="_blank" href="http://www.protechcomposites.com/">Protech Composites</a></td> <!--Plastic 500-->
				<td class="last"></td> <!--Zip Tie 100-->
			</tr>
			<tr><!--10-->
				<td></td> <!--Titanium 5,000-->
				<td></td> <!--Aluminum 2,500-->
				<td></td> <!--Wood 1,000-->
				<td><a target="_blank" href="http://www.gencomnw.com/">Gencom Northwest</a></td> <!--Plastic 500-->
				<td class="last"></td> <!--Zip Tie 100-->
			</tr>
			</tr>
		</table>
	</div>
</div>
