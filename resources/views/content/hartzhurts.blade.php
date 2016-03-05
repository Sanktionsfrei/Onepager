<script type='text/javascript'>//<![CDATA[
$(window).load(function(){
$(function() {
    $("#btnSave").click(function() {
        html2canvas($("#img2share"), {
            onrendered: function(canvas) {
                theCanvas = canvas;
                document.body.appendChild(canvas);

                // Convert and download as image
                Canvas2Image.saveAsPNG(canvas);
                $("#img-out").append(canvas);
                // Clean up
                //document.body.removeChild(canvas);
            }
        });
    });
});

});

</script>



<h2 class="dark-text">#HartzHurts</h2>
	<div class="colored-line"></div>
		<div class="section-description">Teile dein Erlebnis im Jobcenter und lasse die Welt vom Unrecht wissen.</div>
	<div class="colored-line"></div>


	<!-- Card Layout -->
	<div id="img2share" style="background-color: #1FACB6;padding: 20px;width: 600px;text-align: center;margin-left: auto;margin-right: auto;margin-top: 35px;">
	  <div style="
	    background: white;
	    width: 100px;
	    height: 100px;
	    border-radius: 50px;
	    border: 1px solid white;
	    overflow: hidden;
	    /* margin-left: auto; */
	    /* margin-right: auto; */
	    float: left;
	    margin-top: 11px;
	"><img src="https://pbs.twimg.com/profile_images/700757334000214016/mgGPsM-G_400x400.jpg" style="
	    height: 100px;
	"></div>
	  <h2 contenteditable="true" style="
	    font-family: 'Open Sans', Sans-serif;
	    font-weight: bold;
	    color: white;
	    padding-left: 130px;
	    text-align: left;
	">Name&nbsp;</h2>
	  <div style="
	    /* width: 100%; */
	    height: 5px;
	    background: white;
	    margin-left: 122px;
	    "></div>
	  <div style="
	    padding-left: 130px;
	    padding-right: 50px;
	    padding-top: 20px;
	    margin-bottom: 30px;
	    text-align: left;
	"><p contenteditable="true" style="
	    text-align: left;
	    color: white;
	    line-height: 140%;
	    font-size: 18px;
	">Dein Text hier</p></div>
	  <div style="
	    text-align: left;
	    border-top: 1px solid white;
	    padding-top: 12px;
	    color: white;
	    text-align: center;
	    line-height: 121%;
	    /* border-bottom: 1px solid white; */
	    /* padding-bottom: 8px; */
	">
	  <span style="
	    font-weight: bold;
	    /* font-size: 18px; */
	    font-family: 'Oswald',sans-serif;
	    ">Und was hast du erlebt? </span><span style="
	    font-family: 'Oswald',sans-serif;
	">Erzähl' es auf</span> <span style="
	    font-family: 'Oswald',sans-serif;
	">sanktionsfrei.de/HartzHurts</span>
	  </div>

	</div>

	</div>
	<input type="button" id="btnSave" value="Save PNG"/>
	<hr>
	<div id="img-out"></div>