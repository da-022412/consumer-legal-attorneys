<?php
	// Start session.
	session_start();
	
	// Set a key, checked in mailer, prevents against spammers trying to hijack the mailer.
	$security_token = $_SESSION['security_token'] = uniqid(rand());
	
	if ( ! isset($_SESSION['formMessage'])) {
		$_SESSION['formMessage'] = 'Submit the information below for a free case review, and an attorney will contact you shortly to discuss your options.  ';	
	}
	
	if ( ! isset($_SESSION['formFooter'])) {
		$_SESSION['formFooter'] = ' ';
	}
	
	if ( ! isset($_SESSION['form'])) {
		$_SESSION['form'] = array();
	}
	
	function check($field, $type = '', $value = '') {
		$string = "";
		if (isset($_SESSION['form'][$field])) {
			switch($type) {
				case 'checkbox':
					$string = 'checked="checked"';
					break;
				case 'radio':
					if($_SESSION['form'][$field] === $value) {
						$string = 'checked="checked"';
					}
					break;
				case 'select':
					if($_SESSION['form'][$field] === $value) {
						$string = 'selected="selected"';
					}
					break;
				default:
					$string = $_SESSION['form'][$field];
			}
		}
		return $string;
	}
?><!DOCTYPE html>
<html>
<head>
  
<!-- Facebook Pixel Code -->
<script>
  !function(f,b,e,v,n,t,s)
  {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
  n.callMethod.apply(n,arguments):n.queue.push(arguments)};
  if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
  n.queue=[];t=b.createElement(e);t.async=!0;
  t.src=v;s=b.getElementsByTagName(e)[0];
  s.parentNode.insertBefore(t,s)}(window, document,'script',
  'https://connect.facebook.net/en_US/fbevents.js');
  fbq('init', '1642651549124653');
  fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
  src="https://www.facebook.com/tr?id=1642651549124653&ev=PageView&noscript=1"
/></noscript>
<!-- End Facebook Pixel Code -->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="robots" content="noindex, nofollow" />
		
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width">
  <meta name="baseurl" content="http://www.unsolicitedtextmessages.com/">

  <title>UnsolicitedTextMessages.com | Has a company sent a text message to your cellular telephone without your permission?</title>

  <link rel="stylesheet" type="text/css" media="all" href="rw_common/themes/offroad/consolidated-0.css?rwcache=534803433" />
		
  
  <link href="https://fonts.googleapis.com/css?family=Istok+Web:400,700" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Lora:400,400italic,700,700italic" rel="stylesheet">

  <!--[if lt IE 9]>
    <script src="rw_common/themes/offroad/assets/javascript/html5shiv.js"></script>
    <script src="rw_common/themes/offroad/assets/javascript/respond.js"></script>
  <![endif]-->

  
  
  
</head>

<body>
  <div id="page" class="site">
    <a class="sr-only sr-only-focusable" href="#content">Skip to main content</a>

    <nav class="site-navigation" role="navigation">
      <div class="row">
        <div class="col-xs-12">
          <div class="site-navigation-inner">
            
          </div>
        </div>
      </div>
    </nav><!-- .site-navigation -->

    <header id="masthead" class="site-header" role="banner">
      <div class="container">
        <div class="site-branding">
          <div class="site-title">
            <a href="http://www.unsolicitedtextmessages.com/">Has a company sent a text message to your cellular telephone without your permission?</a>
          </div>

          <div class="site-logo">
            <a href="http://www.unsolicitedtextmessages.com/" class="site-logo"><img src="rw_common/images/spam_text.png" width="225" height="300" alt="Has a company sent a text message to your cellular telephone without your permission?"/></a>
          </div>

          <div class="site-description">
            If so, you may be entitled to a cash award of $1,500.00 PER TEXT under the federal Telephone Consumer Protection Act (TCPA), and possibly more as a service award if you participate in a class action lawsuit.
          </div>
        </div><!-- .site-branding -->
      </div><!-- .container -->
    </header><!-- .site-header -->

    <div class="container container-main">
      <div class="row">
        <main id="content" class="site-content col-xs-12 col-md-9" role="main">
          <div class="site-content-inner">
            
<div class="message-text"><?php echo $_SESSION['formMessage']; unset($_SESSION['formMessage']); ?></div><br />

<form class="rw-contact-form" action="./files/mailer.php" method="post" enctype="multipart/form-data">
	 <div>
		<label>Name</label> *<br />
		<input class="form-input-field" type="text" value="<?php echo check('element0'); ?>" name="form[element0]" size="40"/><br /><br />

		<label>Email</label> *<br />
		<input class="form-input-field" type="text" value="<?php echo check('element1'); ?>" name="form[element1]" size="40"/><br /><br />

		<label>Phone Number</label> <br />
		<input class="form-input-field" type="text" value="<?php echo check('element2'); ?>" name="form[element2]" size="40"/><br /><br />

		<label>Company that sent you text(s)</label> *<br />
		<input class="form-input-field" type="text" value="<?php echo check('element3'); ?>" name="form[element3]" size="40"/><br /><br />

		<label>Additional information regarding your experience</label> <br />
		<textarea class="form-input-field" name="form[element4]" rows="8" cols="38"><?php echo check('element4'); ?></textarea><br /><br />

		<div style="display: none;">
			<label>Spam Protection: Please don't fill this in:</label>
			<textarea name="comment" rows="1" cols="1"></textarea>
		</div>
		<input type="hidden" name="form_token" value="<?php echo $security_token; ?>" />
		<input class="form-input-button" type="reset" name="resetButton" value="Reset" />
		<input class="form-input-button" type="submit" name="submitButton" value="Submit" />
	</div>
</form>

<br />
<div class="form-footer"><?php echo $_SESSION['formFooter']; unset($_SESSION['formFooter']); ?></div><br />

<?php unset($_SESSION['form']); ?>

          </div>
        </main>

        <aside class="site-sidebar col-xs-12 col-md-3">
          <div class="sidebar">
            
          </div>

          <div class="plugin-sidebar">
            
          </div>
        </aside>
      </div>
    </div>

    <footer id="footer" class="site-footer" role="contentinfo">
      <div class="row">
        <div class="col-xs-12">
          ATTORNEY ADVERTISING
        </div>
      </div>
    </footer>
  </div>

  <div class="body-overlay"></div>

  <!-- Javascript includes -->
  <script src="rw_common/themes/offroad/javascript.js?rwcache=534803433"></script>
  <script type="text/javascript" src="rw_common/themes/offroad/assets/javascript/background-blur.js?rwcache=534803433"></script>
		<script type="text/javascript" src="rw_common/themes/offroad/assets/javascript/sidebar-hidden.js?rwcache=534803433"></script>
		
  
</body>
</html>
