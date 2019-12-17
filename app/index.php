<?php require '_global.php'; ?>
<!doctype html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
		
		<title>Disclaimer Generator: Generate Your Disclaimer</title>
		<meta name="description" content="World's Easiest Disclaimer Generator: Generate your Disclaimer in just 10 seconds" />
		
		<link rel="apple-touch-icon-precomposed" sizes="57x57" href="/assets/images/apple-touch-icon-57x57.png" />
		<link rel="apple-touch-icon-precomposed" sizes="114x114" href="/assets/images/apple-touch-icon-114x114.png" />
		<link rel="apple-touch-icon-precomposed" sizes="72x72" href="/assets/images/apple-touch-icon-72x72.png" />
		<link rel="apple-touch-icon-precomposed" sizes="144x144" href="/assets/images/apple-touch-icon-144x144.png" />
		<link rel="apple-touch-icon-precomposed" sizes="60x60" href="/assets/images/apple-touch-icon-60x60.png" />
		<link rel="apple-touch-icon-precomposed" sizes="120x120" href="/assets/images/apple-touch-icon-120x120.png" />
		<link rel="apple-touch-icon-precomposed" sizes="76x76" href="/assets/images/apple-touch-icon-76x76.png" />
		<link rel="apple-touch-icon-precomposed" sizes="152x152" href="/assets/images/apple-touch-icon-152x152.png" />
		<link rel="icon" type="image/png" href="/assets/images/favicon-196x196.png" sizes="196x196" />
		<link rel="icon" type="image/png" href="/assets/images/favicon-96x96.png" sizes="96x96" />
		<link rel="icon" type="image/png" href="/assets/images/favicon-32x32.png" sizes="32x32" />
		<link rel="icon" type="image/png" href="/assets/images/favicon-16x16.png" sizes="16x16" />
		<link rel="icon" type="image/png" href="/assets/images/favicon-128.png" sizes="128x128" />
		<meta name="application-name" content="&nbsp;"/>
		<meta name="msapplication-TileColor" content="#FFFFFF" />
		<meta name="msapplication-TileImage" content="/assets/images/mstile-144x144.png" />
		<meta name="msapplication-square70x70logo" content="/assets/images/mstile-70x70.png" />
		<meta name="msapplication-square150x150logo" content="/assets/images/mstile-150x150.png" />
		<meta name="msapplication-wide310x150logo" content="/assets/images/mstile-310x150.png" />
		<meta name="msapplication-square310x310logo" content="/assets/images/mstile-310x310.png" />
		
		<!-- styles -->
		<link href="/assets/css/main.css" rel="stylesheet" />
		<link href="/assets/css/style.css" rel="stylesheet" />
	</head>
	<body>
		<div class="wrapper">
			
			<!-- header -->
			<?php include('_header.php'); ?>
			
			
			<!-- hero start -->
			<section class="hero">
				<div class="container">
					<div class="row d-flex align-items-center">
						<div class="col-lg-7">
							<h1 class="display-4">Welcome to Cookie <span class="text-primary">Consent</span></h1>
							<p class="mt-4">Welcome to AppPrivacyPolicy. Here you can generate your own Privacy Policy to comply with international laws on user data privacy (CCPA, CalOPPA, GDPR) and the requirements of leading Advertising and Affiliate Networks, such as Google AdSense or Commission Junction.<br><br>
							On our site you will find not only a generator for quickly and easily generating a Privacy Policy for your sites, but also find many other resources for complying with regulations and learning more about Privacy Policies.</p>
						</div>
						<div class="col-lg-5 text-center">
							<img src="/assets/images/img1.svg" class="img-fluid" alt="">
						</div>
					</div>
				</div>
			</section>
			<!-- hero end -->
			<div id="builder" class="builder">
				<section class="section-consent-configurator">
					<div class="container">
						<div class="row">
							<div class="col-12">
								<h2 class="text-center">Build your Cookie Consent</h2>
							</div>
						</div>
						<div class="row mt-5 row-eq-height">
							<div class="col-lg-6 demo_zone_pick">
								<div class="builder_zone shadow card">
									<a href="#" class="card-body text-decoration-none border-bottom d-flex justify-content-between align-items-center" aria-expanded="true" data-toggle="collapse" data-target="#card1">
										<span>
											<span class="card-title mb-1 h5 d-block">Step 1</span>
											<span class="card-title mb-0 h6 d-block">Choose your compliance preference</span>
										</span>
										<span class="mb-0 h5"><i class="d-inline-block pp-chevron-down"></i></span>
									</a>
									<div class="card-body collapse show" id="card1">
										<div class="d-flex flex-column flex-sm-row">
											<div class="selectable d-flex flex-grow-1 flex-basis-auto flex-sm-basis-0 mr-sm-2 mr-0 ">
												<input type="radio" name="consent_type" id="consent_implied" value="implied" checked="" class="custom-control-input">
												<label class="card flex-grow-1" for="consent_implied">
													<span class="card-body d-flex flex-row flex-sm-column align-items-center text-left text-sm-center">
														<!-- <span class="icon icon-comp-1"></span> -->
														<span class="flex-shrink-0 ppicon ppicon-cookie-consent eprivacy-directive"></span>
														<div class="d-flex flex-column ml-3 ml-sm-0">
															<span class="h6 mb-0 mb-sm-1 mt-2 ml-0 ml-sm-3 ml-sm-0">ePrivacy Directive</span>
															<small class="d-block">Your JavaScript scripts will be loaded automatically.</small>
														</div>
													</span>
												</label>
											</div>
											<div class="selectable d-flex flex-grow-1 flex-basis-auto flex-sm-basis-0">
												<input type="radio" name="consent_type" id="consent_express" value="express" class="custom-control-input">
												<label class="card flex-grow-1" for="consent_express">
													<span class="card-body d-flex flex-row flex-sm-column align-items-center text-left text-sm-center">
														<!-- <span class="icon icon-comp-2"></span> -->
														<span class="flex-shrink-0 ppicon ppicon-cookie-consent gdpr-directive"></span>
														<div class="d-flex flex-column ml-3 ml-sm-0">
															<span class="h6 mb-0 mb-sm-1 mt-2 ml-0 ml-sm-3 ml-sm-0">GDPR + ePrivacy Directive</span>
															<small class="d-block">Your JavaScript scripts will be loaded only after the user clicks "I agree".</small>
														</div>
													</span>
												</label>
											</div>
										</div>
									</div>
								</div>
								<div class="builder_zone shadow card mt-4" id="customize_cookie_consent">
									<a href="#" class="card-body text-decoration-none border-bottom d-flex justify-content-between align-items-center" aria-expanded="true" data-toggle="collapse" data-target="#card2">
										<span>
											<span class="card-title mb-1 h5 d-block">Step 2</span>
											<span class="card-title mb-0 h6 d-block">Customize your Cookie Consent</span>
										</span>
										<span class="mb-0 h5"><i class="d-inline-block pp-chevron-down"></i></span>
									</a>
									<div class="card-body collapse show" id="card2">
										<div class="form-group sub_selector">
											<label for="website_name">Enter website name to customize Preferences Center</label>
											<input type="text" class="form-control" id="website_name" name="website_name" aria-describedby="website_name">
										</div>
										<div class="form-group sub_selector">
											<label>Choose your notice banner</label>
											<div class="d-flex flex-column flex-sm-row">
												<div class="selectable flex-grow-1 flex-basis-0 mr-sm-2 mr-0">
													<input type="radio" id="notice_banner" name="notice_banner" class="custom-control-input" value="simple">
													<label class="card text-center" for="notice_banner">
														<span class="card-body d-flex flex-row flex-sm-column align-items-center">
															<i class="flex-shrink-0 ppicon ppicon-cookie-consent simple-dialog"></i>
															<span class="h6 mt-2 ml-3 ml-sm-0">Simple dialog</span>
														</span>
													</label>
												</div>
												<div class="selectable flex-grow-1 flex-basis-0">
													<input type="radio" id="notice_banner_2" name="notice_banner" class="custom-control-input" value="headline">
													<label class="card text-center" for="notice_banner_2">
														<span class="card-body d-flex flex-row flex-sm-column align-items-center">
															<i class="flex-shrink-0 ppicon ppicon-cookie-consent headline-dialog"></i>
															<span class="h6 mt-2 ml-3 ml-sm-0">Headline dialog</span>
														</span>
													</label>
												</div>
											</div>
											<div class="d-flex flex-column flex-sm-row ">
												<div class="selectable flex-grow-1 flex-basis-0 mr-sm-2 mr-0">
													<input type="radio" id="notice_banner_3" name="notice_banner" class="custom-control-input" value="interstitial">
													<label class="card text-center" for="notice_banner_3">
														<span class="card-body d-flex flex-row flex-sm-column align-items-center">
															<i class="flex-shrink-0 ppicon ppicon-cookie-consent interstitial-dialog"></i>
															<span class="h6 mt-2 ml-3 ml-sm-0">Interstitial dialog</span>
														</span>
													</label>
												</div>
												<div class="selectable flex-grow-1 flex-basis-0 ">
													<input type="radio" id="notice_banner_4" name="notice_banner" class="custom-control-input" value="standalone">
													<label class="card text-center" for="notice_banner_4">
														<span class="card-body d-flex flex-row flex-sm-column align-items-center">
															<i class="flex-shrink-0 ppicon ppicon-cookie-consent interstitial-standalone"></i>
															<span class="h6 mt-2 ml-3 ml-sm-0">Interstitial standalone</span>
														</span>
													</label>
												</div>
											</div>
										</div>
										<div class="form-group sub_selector">
											<label>Pick a color palette</label>
											<div class="d-flex flex-row">
												<div class="selectable flex-grow-1 flex-basis-0 ">
													<input type="radio" id="palette_light" name="palette" class="custom-control-input" value="light">
													<label class="card" for="palette_light">
														<span class="card-body d-flex align-items-center">
															<i class="flex-shrink-0 ppicon ppicon-cookie-consent palette-light"></i>
															<span class="h6 mb-0 ml-2">Light</span>
														</span>
													</label>
												</div>
												<div class="selectable flex-grow-1 flex-basis-0 ml-2">
													<input type="radio" id="palette_dark" name="palette" class="custom-control-input" value="dark">
													<label class="card" for="palette_dark">
														<span class="card-body d-flex align-items-center">
															<i class="flex-shrink-0 ppicon ppicon-cookie-consent palette-dark"></i>
															<span class="h6 mb-0 ml-2">Dark</span>
														</span>
													</label>
												</div>
											</div>
										</div>
										<div class="form-group sub_selector">
											<label>Choose your default language
												<small class="d-block">Language missing? We accept user submissions! Contact us.</small>
											</label>
											<select class="form-control" id="language" name="language">
												<option value="en" selected="">English</option>
												<option value="de">German</option>
												<option value="fr">French</option>
												<option value="es">Spanish</option>
												<option value="it">Italian</option>
												<option value="pt">Portugese</option>
												<option value="hu">Hungarian</option>
												<option value="hr">Croatian</option>
												<option value="da">Danish</option>
												<option value="sl">Slovenian</option>
												<option value="pl">Polish</option>
												<option value="ro">Romanian</option>
												<option value="sr">Serbian</option>
												<option value="cy">Welsh</option>
											</select>
										</div>
										<div class="form-group sub_selector">
											<label for="change_settings_button">Enter the button to open the Preference Center (DOM Selector)
												<a href="#" data-toggle="tooltip" title="IDs, classes, tag names can be used as a DOM selector: #changePreferences"><i class="ppicon pp-question-circle "></i>?</a>
												<small class="d-block">Users should be able to change their preferences. Include a link/button anywhere on your page so that users can open the Cookies Preferences Center:</small>
											</label>
											<input type="text" class="form-control" id="change_settings_button" aria-describedby="change_settings_button" placeholder="#changePreferences">
										</div>
										<div class="form-group sub_selector">
											<label>Include a link to Cookies Policy
												<small class="d-block">A Cookies Policy, or a Privacy Policy with a Cookies section, can include more information about your website usage of cookies.</small>
											</label>
											<div class="custom-control custom-checkbox">
												<input type="checkbox" class="custom-control-input" id="include_cookies_policy" name="include_cookies_policy" value="yes">
												<label class="custom-control-label" for="include_cookies_policy">Yes, include a link to my Cookies Policy</label>
											</div>
											<div id="cookies_policy_link" class="form-group mt-3">
												<label>Enter a valid link to your Cookies Policy:
													<small class="d-block">Please enter a valid URL. Example of a valid URL: <code>https://example.com/cookies-policy</code></small>
												</label>
												<input type="text" class="form-control" id="cookies_policy_link_input" value="">
											</div>
										</div>
									</div>
								</div>
								
								<div class="builder_zone shadow card mt-4" id="add_js_scripts">
									<a href="#" class="card-body text-decoration-none border-bottom d-flex justify-content-between align-items-center" aria-expanded="false" data-toggle="collapse" data-target="#card3">
										<span>
											<span class="card-title mb-1 h5 d-block">Step 3</span>
											<span class="card-title mb-0 h6 d-block">Add your JavaScript scripts</span>
										</span>
										<span class="mb-0 h5"><i class="d-inline-block pp-chevron-down"></i></span>
									</a>
									<div class="card-body collapse show sub_selector" id="card3">
										<p>Enter a name for the script (ie. Google Analytics), select the cookie consent level (ie. Tracking) and copy-paste the script code.</p>
										<div class="form-group">
											<label for="script_name">Name</label>
											<input type="text" class="form-control" name="script_name" id="script_name" aria-describedby="script_name" placeholder="A name for this script (ie. Google Analytics)">
										</div>
										<div class="form-group">
											<label for="script_type">Type</label>
											<div class="d-flex flex-column flex-sm-row">
												<div class="selectable d-flex flex-grow-1 flex-basis-auto flex-sm-basis-0">
													<input type="radio" id="script_type" name="script_type" class="custom-control-input" value="strictly-necessary">
													<label class="card flex-grow-1" for="script_type">
														<span class="card-body">
															<span class="mb-0 d-block">Strictly necessary</span>
															<small class="">(ie. account login related cookies)</small>
														</span>
													</label>
												</div>
												<div class="selectable d-flex flex-grow-1 flex-basis-auto flex-sm-basis-0 ml-sm-2 ml-0">
													<input type="radio" id="script_type_2" name="script_type" class="custom-control-input" value="functionality">
													<label class="card flex-grow-1" for="script_type_2">
														<span class="card-body">
															<span class="mb-0 d-block">Functionality</span>
															<small class="">(ie. remembering users choices)</small>
														</span>
													</label>
												</div>
											</div>
											<div class="d-flex flex-column flex-sm-row">
												<div class="selectable d-flex flex-grow-1 flex-basis-auto flex-sm-basis-0">
													<input type="radio" id="script_type_3" name="script_type" class="custom-control-input" value="tracking">
													<label class="card flex-grow-1" for="script_type_3">
														<span class="card-body">
															<span class="mb-0 d-block">Tracking and Performance</span>
															<small class="">(ie. Google Analytics)</small>
														</span>
													</label>
												</div>
												<div class="selectable d-flex flex-grow-1 flex-basis-auto flex-sm-basis-0 ml-sm-2 ml-0">
													<input type="radio" id="script_type_4" name="script_type" class="custom-control-input" value="targeting">
													<label class="card flex-grow-1" for="script_type_4">
														<span class="card-body">
															<span class="mb-0 d-block">Targeting and Advertising</span>
															<small class="">(ie. Google AdSense)</small>
														</span>
													</label>
												</div>
											</div>
										</div>
										<div class="form-group">
											<label for="script_code">{{ _t('cookie_consent.copy_paste_script') }}</label>
											<textarea class="form-control" name="script_code" id="script_code" rows="6" placeholder="&#x3C;script async src=&#x22;https://www.googletagmanager.com/gtag/js?id=ID&#x22;&#x3E;&#x3C;/script&#x3E;&#x3C;script&#x3E;window.dataLayer = window.dataLayer || [];function gtag(){dataLayer.push(arguments);}gtag(&#x22;js&#x22;, new Date());gtag(&#x22;config&#x22;, &#x22;ID&#x22;);&#x3C;/script&#x3E;"></textarea>
											<button class="mt-2 d-block d-sm-inline-block btn btn-outline-primary" id="addUserScript">Add this script</button>
											<span class=" mt-2 text-danger d-block" id="code_invalid_error"></span>
											<div class="sub_selector user_scripts" id="scripts_display"></div>
										</div>
									</div>
								</div>
								
								<div class="builder_zone shadow card mt-4">
									<a href="#" class="card-body text-decoration-none border-bottom d-flex justify-content-between align-items-center" aria-expanded="true" data-toggle="collapse" data-target="#card4">
										<span>
											<span class="card-title mb-1 h5 d-block">Step 4</span>
											<span class="card-title mb-0 h6 d-block">Copy your Cookie Consent code</span>
										</span>
										<span class="mb-0 h5"><i class="d-inline-block pp-chevron-down"></i></span>
									</a>
									<div class="card-body collapse show" id="card4">
										<p>You're done. Copy your Cookie Consent code below.</p>
										<div class="form-group">
											<textarea disabled name="user_code" id="user_code" rows="15" cols="90" class="form-control"></textarea>
											<button id="user-code-copy-button" class="btn btn-outline-primary mt-2 copy-button" data-clipboard-target><i class="icon-copy"></i>Copy Cookie Consent code</button>
										</div>
									</div>
								</div>
							</div>
							<div class="limiter-top"></div>
							<div class="col-lg-6 demo_zone_outer">
								<div class="demo_zone d-none d-lg-flex">
									<div class="card w-100 shadow">
										<div class="card-header">
											<img src="/assets/images/browser-control.svg" class="browser-controls" alt="">
										</div>
										<!-- <div class="browser-top-bar"></div> -->
										<div class="card-body px-0 pt-0">
											<div id="demo_zone">
												<iframe frameborder="0" width="100%" height="500"></iframe>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="limiter-bottom"></div>
				</section>
				<section class="section-demo-zone py-3 fixed-bottom shadow-md-reverse d-block d-lg-none">
					<div class="container">
						<div class="row">
							<div class="col-12">
								<a href="#" class="btn btn-primary btn-lg btn-block" data-toggle="modal" data-target="#previewConsent">Preview Consent Bar</a>
							</div>
						</div>
					</div>
				</section>
				<!-- Modal -->
				<div class="modal fade" id="previewConsent" tabindex="-1" role="dialog" aria-labelledby="previewConsent" aria-hidden="true">
					<div class="modal-dialog modal-xl modal-lg" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title" id="exampleModalLabel">{{ _t('cookie_consent.preview_cookie_consent') }}</h5>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
								</button>
							</div>
							<div class="modal-body">
								<div id="demo_zone">
									<iframe frameborder="0" width="100%" height="500"></iframe>
								</div>
							</div>
						</div>
					</div>
				</div>
				<section class="section-consent-levels bg-white">
					<div class="container">
						<div class="builder_zone">
							<div class="row">
								<div class="col-12">
									<h3 class="mb-2">Cookie Consent Levels</h3>
									<p>The following levels are available in Cookie Consent:</p>
								</div>
							</div>
							<br />
							<div class="row">
								<div class="col-12">
									<div class="form-group">
										<p class="mb-0"><strong>Strictly necessary</strong></p>
										<p class="mb-4">For example, account login related cookies.</p>
										<div class="alert alert-primary border-left-3 mb-5">
											<code class="font-weight-bolder d-flex flex-column flex-md-row justify-content-between">&#x3C;script type=&#x22;text/plain&#x22; cookie-consent=&#x22;strictly-necessary&#x22;&#x3E;&#x3C;/script&#x3E;
											</code>
										</div>
									</div>
									<div class="form-group">
										<p class="mb-0"><strong>Functionality</strong></p>
										<p class="mb-4">For example, remember users language preferences or remembering various choices.</p>
										<div class="alert alert-primary border-left-3 mb-5">
											<code class="font-weight-bolder d-flex flex-column flex-md-row justify-content-between">&#x3C;script type=&#x22;text/plain&#x22; cookie-consent=&#x22;functionality&#x22;&#x3E;&#x3C;/script&#x3E;
											</code>
										</div>
									</div>
									<div class="form-group">
										<p class="mb-0"><strong>Tracking and Performance</strong></p>
										<p class="mb-4">For example, analytics such as Google Analytics.</p>
										<div class="alert alert-primary border-left-3 mb-5">
											<code class="font-weight-bolder d-flex flex-column flex-md-row justify-content-between">&#x3C;script type=&#x22;text/plain&#x22; cookie-consent=&#x22;tracking&#x22;&#x3E;&#x3C;/script&#x3E;
											</code>
										</div>
									</div>
									<div class="form-group">
										<p class="mb-0"><strong>Targeting and Advertising</strong></p>
										<p class="mb-4">For example, Google AdSense/AdWords remarketing.</p>
										<div class="alert alert-primary border-left-3 mb-5">
											<code class="font-weight-bolder d-flex flex-column flex-md-row justify-content-between">&#x3C;script type=&#x22;text/plain&#x22; cookie-consent=&#x22;targeting&#x22;&#x3E;&#x3C;/script&#x3E;
											</code>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>
				<section class="section-disclaimer pt-0">
					<div class="container">
						<div class="row">
							<div class="col-12">
								<h3>Disclaimer</h3>
								<p class="mt-4">It is the responsibility of the website developer using this plug-in to check that cookies are being set at the correct times.<br><br>
									This site and its owner accept no responsibility for integration or behaviour on any other website.
									<br><br>
									By using this plug-in you agree to these terms.
								</p>
							</div>
						</div>
					</div>
				</section>
			</div>
			
			
			<!-- footer -->
			<?php include('_footer.php'); ?>
		</div>
		
		
		
	</body>
</html>