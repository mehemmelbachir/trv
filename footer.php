			

		</div>
		<!-- /Container -->


		<?php if(!is_home()){ ?>
		
		<!-- footer -->
		<footer class="footer" role="contentinfo">

		<?php }else{  ?>

		<!-- INDEX FOOTER -->
		<footer class="footer-index" role="contentinfo">

		<?php } ?>


			<div style="float:left;">
				<!-- copyright -->
				<p class="copyright">
					&copy; <?php echo date('Y'); ?> Copyright SPA TRAVOCOVIA.			
				</p>
				<!-- /copyright -->	
			</div>
			<div style="float:right;">
				<p>GROUPE BENHAMADI</p>
			</div>
			<div style="clear: both;"></div>
		</footer>
		<!-- /footer -->
		



		


		<?php wp_footer(); ?>


		<!-- analytics -->
		<script>
		/*
		(function(f,i,r,e,s,h,l){i['GoogleAnalyticsObject']=s;f[s]=f[s]||function(){
		(f[s].q=f[s].q||[]).push(arguments)},f[s].l=1*new Date();h=i.createElement(r),
		l=i.getElementsByTagName(r)[0];h.async=1;h.src=e;l.parentNode.insertBefore(h,l)
		})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
		ga('create', 'UA-XXXXXXXX-XX', 'yourdomain.com');
		ga('send', 'pageview');
		*/
		</script>

		

	</body>






</html>
