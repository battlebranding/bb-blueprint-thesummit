<?php get_header(); ?>

<header class="is-large is-red">
	<div class="section-header has-no-padding">
		<div class="wrapper">
			<h1 class="is-logo is-floating-left"><img src="<?php echo get_stylesheet_directory_uri() . '/assets/images/the-summit-logo-2017-web
			.png'; ?>" height="70" /></h1>
			<?php /* wp_nav_menu( array(
				'theme_location' 	=> 'primary',
				'container'			=> 'nav',
				'container_class'	=> 'is-floating-right',
				'menu_class'		=> 'is-main-nav is-horizontal',
			) ); */ ?>
			<nav class="is-floating-right">
				<ul class="is-main-nav is-horizontal">
					<li><a href="#winter-retreat-hero">Winter Retreat</a></li>
					<li><a href="#small-groups-hero">Small Groups</a></li>
					<li><a href="#events">Events</a></li>
					<li><a href="#campus-shuttle">Campus Shuttle</a></li>
					<li><a href="#about">About</a></li>
					<li><a href="#contact">Contact</a></li>
				</ul>
			</nav>
		</div>
	</div>
	<div class="section-body has-space-on-top">
		<div class="wrapper">
			<h2><?php echo get_bloginfo( 'description' ); ?></h2>
			<h3>Be the light. Light the world.</h3>
		</div>
	</div>
</header>

<section id="winter-retreat-hero" class="is-medium">
	<div class="section-body has-text-centered has-space-on-top has-space-on-bottom">
		<div class="wrapper">
			<h2>Winter Retreat 2018</h2>
			<p>Skiing, snowboarding and life changing discussions around camp fires are just a few of the things you can expect on this trip. A great opportunity to connect with God through nature, you don't want to miss this chance to start the New Year off with God; fully charged. Only 20 spots are available so don't delay. Dates are January 3-6, 2017.</p>
			<p>Registration begins Sunday, August 20th.</p>
			<!-- <a class="button is-outlined">Learn More</a> -->
		</div>
	</div>
</section>

<section id="small-groups-hero">
	<div class="section-body">
		<div class="wrapper">
			<div class="columns">
				<div class="column">
					<h2 class="special">Small Groups.<br />Big Impact.</h2>
					<!-- <h3>Smaller shorter header</h3> -->
					<p>God never intended for you to go through life by yourself. Small groups give young adults the opportunity to develop a closer relationship with God and each other. Groups meet bi-weekly, allowing you to study God's word, fellowship and serve the community; together.</p>
					<!-- <a href="<?php echo home_url('/life-groups'); ?>" class="button is-outlined">Learn More</a> -->
				</div>
				<div class="column has-left-margin">
					<h4>Upcoming Small Groups</h4>
					<ul class="list events-list is-outlined">
						<li>
							<div class="event-date-wrapper">
								<span class="event-date">
									<span class="label event-day-of-week">12</span>
									<span class="label event-month">September</span>
								</span>
								<div class="event-details">
									<span class="label event-title">Rissa's Group</span>
									<span class="label event-location">Location: Chipotle (Tate St.)</span>
									<span class="label event-time">6:30 PM (Tuesday)</span>
								</div>
							</div>
						</li>
						<li>
							<div class="event-date-wrapper is-minimized">
								<span class="event-date">
									<span class="label event-day-of-week">15</span>
									<span class="label event-month">September</span>
								</span>
								<div class="event-details">
									<span class="label event-title">Love's Progeny (Justin's Group)</span>
									<span class="label event-location">Location: The Green Bean Coffee</span>
									<span class="label event-time">7:00 PM (Friday)</span>
								</div>
							</div>
						</li>
						<li>
							<div class="event-date-wrapper is-minimized">
								<span class="event-date">
									<span class="label event-day-of-week">16</span>
									<span class="label event-month">September</span>
								</span>
								<div class="event-details">
									<span class="label event-title">The Finishers (Duke's Group)</span>
									<span class="label event-location">Location: Sweet Frog's (Wendover Ave.)</span>
									<span class="label event-time">2:00 PM (Saturday)</span>
								</div>
							</div>
						</li>
						<li>
							<div class="event-date-wrapper">
								<span class="event-date">
									<span class="label event-day-of-week">20</span>
									<span class="label event-month">September</span>
								</span>
								<div class="event-details">
									<span class="label event-title">CJ's Group</span>
									<span class="label event-location">Location: Starbucks (Battleground Ave.)</span>
									<span class="label event-time">6:00 PM (Wednesday)</span>
								</div>
							</div>
						</li>
					</ul>
					<!-- <a href="<?php echo home_url('life-groups'); ?>">View More Times ></a> -->
				</div>
			</div>
		</div>
	</div>
</section>

<section class="is-gallery" style="display: none;">
	<div class="section-body">
		<div class="wrapper">
			<div class="post"></div>
			<div class="post"></div>
			<div class="post"></div>
			<div class="post"></div>
		</div>
	</div>
</section>

<<section style="display: none;">
	<div class="container">
		<div class="columns">
			<div class="column">
				<h3>Featured Service Two</h3>
				<p>Here are 2-4 sentences about featured service #1.</p>
				<a class="button is-outlined" href="#">Learn More</a>
			</div>
			<div class="column">
				<h3>Summit Arts</h3>
				<p>Here are 2-4 sentences about featured service #2.</p>
				<a class="button is-outlined" href="#">Learn More</a>
			</div>
		</div>
	</div>
</section>

<section id="events">
	<div class="section-body">
		<div class="wrapper">
			<h2 class="has-text-centered">Upcoming Events</h2>
			<div class="columns is-fullwidth-on-mobile" style="margin: -10px;">
				<div class="column is-fullwidth-on-mobile">
					<div class="event-card is-outlined">
						<div class="event-header">
							<h3>Summit Live</h3>
						</div>
						<div class="event-date"><strong>September 29th</strong> at 7:30PM</div>
						<div class="event-body">
							<p>Imagine over 100 young adults gathered together for a night of encountering God. Yep. That's Summit Live.</p>
							<!-- <a class="button is-outlined">View Details</a> -->
						</div>
					</div>
				</div>
				<div class="column is-fullwidth-on-mobile">
					<div class="event-card is-outlined">
						<div class="event-header">
							<h3>Campus Revival</h3>
						</div>
						<div class="event-date"><strong>October 25th-27th</strong> at 7:30PM</div>
						<div class="event-body">
							<p>3-nights of revival on the campuses of Bennett, UNCG and NCA&amp;T! </p>
							<!-- <a class="button is-outlined">View Details</a> -->
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section id="campus-shuttle">
	<div class="section-body has-text-centered">
		<div class="wrapper">
			<h2 class="is-red">Need a Ride To Church?</h2>
			<p>On campus with no car? No problem. Every Sunday the shuttle comes to pickup students at UNCG, NCA&amp;T and Bennett. <span class="notice">Campus pickups begin <strong>Sunday, August 20th, 2017</strong></span></p>
			<p>UNCG 10:20AM (EUC Library Bus Stop) | NCA&amp;T 10:30AM (Campus Rec. Bus Stop) | Bennett 10:35AM (Gorrell St. Bus Stop)</p>
		</div>
	</div>
</section>

<section id="about">
	<div class="section-body">
		<div class="wrapper">
			<div class="columns is-fullwidth-on-mobile has-padded-columns">
				<div class="column is-fullwidth-on-mobile">
					<h3>About The Summit</h3>
					<p>The Summit is the college and young adult ministry of New Jerusalem Cathedral in Greensboro, NC. We exist to challenge all young adults in the Triad to be the light and drive out darkness in their communities.</p>
				</div>
				<div class="column is-fullwidth-on-mobile">
					<h3>About New Jerusalem Cathedral</h3>
					<p>New Jerusalem Cathedral is the parent church of The Summit. With over 35 years of ministry in the city of Greensboro, NC, NJC exists to resolve homelessness in Guilford County and surrounding areas. <a href="http://newjc.org">Learn More.</a></p>
				</div>
			</div>
		</div>
	</div>
</section>

<footer class="contact">
	<div class="section-body">
		<div class="wrapper">
			<p>Need Prayer? Want to volunteer? or just have questions? Email us at <a href="mailto:thesummit@newjc.org">thesummit@newjc.org</a> or call (336) 645-9271 (Sun-Fri 10AM-5PM).</p>
		</div>
	</div>
</footer>

<?php get_footer(); ?>
