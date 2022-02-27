<!-- adding js script function to link privacy policy and terms of use to windows alert.
i (imran) tried to make a separate js file and called function from there but it did not work for me. -->
<script>
    function pp(){
    window.alert("Privacy Policy: Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam harum eaque reiciendis, atque labore dolorem, officia laborum modi debitis similique minima assumenda dolor necessitatibus totam ipsa a exercitationem porro, obcaecati repellat explicabo voluptates possimus! Ipsa repellendus eum, ut molestiae itaque temporibus quas porro quam ex vitae quisquam est doloribus qui sunt officiis similique aliquid tempore asperiores consectetur voluptates ea praesentium dolor voluptatum laboriosam! Deserunt eos corrupti temporibus expedita iste. Tempora optio rerum molestias impedit nam non distinctio qui aspernatur commodi cum cupiditate maxime voluptates laboriosam reiciendis ipsa iure, ipsum ipsam architecto ea autem? Delectus, dolor dicta quis porro asperiores minus.");
    }
	function tu(){
    window.alert("Terms of Use: Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam harum eaque reiciendis, atque labore dolorem, officia laborum modi debitis similique minima assumenda dolor necessitatibus totam ipsa a exercitationem porro, obcaecati repellat explicabo voluptates possimus! Ipsa repellendus eum, ut molestiae itaque temporibus quas porro quam ex vitae quisquam est doloribus qui sunt officiis similique aliquid tempore asperiores consectetur voluptates ea praesentium dolor voluptatum laboriosam! Deserunt eos corrupti temporibus expedita iste. Tempora optio rerum molestias impedit nam non distinctio qui aspernatur commodi cum cupiditate maxime voluptates laboriosam reiciendis ipsa iure, ipsum ipsam architecto ea autem? Delectus, dolor dicta quis porro asperiores minus.");
    }
    </script>


<footer>
			<div class="mini"><img src="../images/mini.png" alt="miniaturelogo" /></div>
			<p>Hämeenlinna, Puusepänkatu 5</p>
			<div class="last">
			<!-- <script src="privacypolicy.js"></script>  -->
				<a href="javascript:tu()">Terms of Use </a>
				<a href="javascript:pp()">Privacy Policy</a>
				<a href= "contact.php">Help</a>
			</div>
</footer>
