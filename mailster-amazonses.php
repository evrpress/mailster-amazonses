<?php
/*
Plugin Name: Mailster AmazonSES Integration
Plugin URI: https://mailster.co/?utm_campaign=wporg&utm_source=Mailster+AmazonSES+integration&utm_medium=plugin
Description: Uses Amazon's Simple Email Service (SES) to deliver emails for the Mailster Newsletter Plugin for WordPress.
Version: 2.7
Author: EverPress
Author URI: https://mailster.co
Text Domain: mailster-amazonses
License: GPLv2 or later
*/


define( 'MAILSTER_AMAZONSES_VERSION', '2.7' );
define( 'MAILSTER_AMAZONSES_REQUIRED_VERSION', '2.4' );
define( 'MAILSTER_AMAZONSES_FILE', __FILE__ );

require_once dirname( __FILE__ ) . '/classes/amazonses.class.php';
new MailsterAmazonSES();
