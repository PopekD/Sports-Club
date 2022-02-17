<!-- created this function in a separate js file but somehow i was not able to call it from that file, 
though it worked when defined here in script tag
<script src="privacypolicy.js"></script> 
below is working when called from privacy policy tag: -->
<script type="text/javascript">
	function pp(){
    window.alert("Privacy Policy: Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam harum eaque reiciendis, atque labore dolorem, officia laborum modi debitis similique minima assumenda dolor necessitatibus totam ipsa a exercitationem porro, obcaecati repellat explicabo voluptates possimus! Ipsa repellendus eum, ut molestiae itaque temporibus quas porro quam ex vitae quisquam est doloribus qui sunt officiis similique aliquid tempore asperiores consectetur voluptates ea praesentium dolor voluptatum laboriosam! Deserunt eos corrupti temporibus expedita iste. Tempora optio rerum molestias impedit nam non distinctio qui aspernatur commodi cum cupiditate maxime voluptates laboriosam reiciendis ipsa iure, ipsum ipsam architecto ea autem? Delectus, dolor dicta quis porro asperiores minus.");
    }
	</script>
<?php
echo "<footer>
			<div class=\"mini\"><img src=\"../images/mini.png\" alt=\"miniaturelogo\" /></div>
			<p>Hämeenlinna, Puusepänkatu 5</p>
			<div class=\"last\">
				<a href=\"#\">Terms of Use </a>".
				// <a href=\"#\">Privacy Policy</a>
				"<a href=\"#\" onclick=\"javascript:pp();return false;\">Privacy Policy</a>
				<a href=\"#\">Help</a>
			</div>
</footer>"
?>
