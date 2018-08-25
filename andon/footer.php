			<!-- footer -->
			<footer class="footer" role="contentinfo">
				<div>
					<address>
						<div>
							<h3>
								and on YAMAGATA OFFICE
							</h3>
							<p>
								〒990-0039 山形県山形市香澄町2丁目3-31　馬かもん2F<br>tel / fax 023-674-6277
							</p>
						</div>
						<div>
							<h3>
								and on SAKATA OFFICE
							</h3>
							<p>
								〒998-0103 山形県山形市酒田市錦町４丁目2-22<br>tel / fax 023-606-5927
							</p>
						</div>
					</address>
					<!-- copyright -->
					<p class="copyright">
						&copy; <?php echo date('Y'); ?> Copyright <?php bloginfo('name'); ?>.
					</p>
					<!-- /copyright -->
				</div>
				<div id="map"></div>
				<script src="//maps.googleapis.com/maps/api/js?key=AIzaSyDfyvJ-7xTEemHN0W_bHE0aGkDI-DqIYq8"></script>
				<script src="<?php echo get_template_directory_uri(); ?>/js/map.js"></script>
			</footer>
			<!-- /footer -->
		
			<script>
			var demo = new Vue({
				el: '#header',
				data: {
					isActive: false,
				}
			});
			</script>
		</div>
		<!-- /wrapper -->

		<?php wp_footer(); ?>

	</body>
</html>
