<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
/**
* Name:			Social Igniter : Config
* Author: 		Brennan Novak
* 		  		contact@social-igniter.com
*         		@brennannovak
*          
* Created:		Brennan Novak
*
* Project:		http://social-igniter.com/
* Source: 		http://github.com/socialigniter/
*
* Description: 	social_ingiter.php config file for site settings for Social Igniter
*/
// Site Settings
$config['site_type']					= "default";
$config['site_id']						= 1;
$config['default_group']       			= 'user';
$config['admin_group']         			= 'admin';

// Settings
$config['core_modules']					= array('users', 'home', 'pages', 'messages', 'comments','locations');
$config['ignore_modules']				= array('index.html');
$config['site_modules']					= array('site','themes','widgets','services');
$config['home_greeting']				= array("There is no place like home","Welcome home buddy","Good news, you are home","Sweet home, Interwebs","Home again, home again, jigity jog");
$config['mobile_verify']				= array("borogoves","gyre","jabberwocky","jubjub","frumious","bandersnatch","vorpal","tumtum","tulgey","burbled","snicker","snack","galumph","callooh","brillig","slithy","gimble"); //dont use the word verified
$config['status_length']				= "140";
$config['languages']					= array('' => '--select--','en' => 'English','fr' => 'French','de' => 'German','es' => 'Spanish','it' => 'Italian');
$config['languages_default']			= 'en';
$config['social_connections']			= array();
$config['social_logins']				= array();
$config['social_post']					= array();
$config['social_checkins']				= array();

// Columns in your meta table, id not required.
$config['columns']             			= array('name','company','phone','phone_verify','phone_active','phone_search','location','url','bio','image','home_base','language','time_zone','geo_enabled','privacy','utc_offset','consumer_key','consumer_secret','token','token_secret');
$config['columns_allowed']				= array('name','image','location','language','time_zone','geo_enabled','privacy');
$config['user_data']					= array('user_id','username','user_level_id','consumer_key','consumer_secret','token','token_secret','name','image','location','language','time_zone','geo_enabled','privacy');	
$config['identity']            			= 'email';				// A database column which is used to login with.		 
$config['super_admin_group']         	= 'superadmin';			// Super administrators group, use name
$config['default_group']       			= 'user';				// Default group, use name
$config['comments_group']       		= 'user';				// Comments group, use name
$config['admin_group']         			= 'admin';				// Default administrators group, use name
$config['min_username_length'] 			= 3;					// Minimum Required Length of Username
$config['max_username_length'] 			= 20;					// Maximum Allowed Length of Username
$config['min_password_length'] 			= 8;					// Minimum Required Length of Password
$config['max_password_length'] 			= 20;					// Maximum Allowed Length of Password
$config['password_strength'] 			= 3;					// Maximum Allowed Length of Password
$config['email_activation']    			= FALSE;				// Checks password strength for numbers. Current max score is 3 ADD MORE
$config['remember_users']      			= TRUE;					// Allow users to be remembered and enable auto-login
$config['user_expire']          		= 150000;				// How long to remember the user (seconds)
$config['user_extend_on_login'] 		= TRUE;					// Extend the users cookies everytime they auto-login
$config['salt_length'] 					= 10;					// Salt Length
$config['store_salt'] 					= true;					// Should the salt be stored in the database	
$config['message_start_delimiter'] 		= '';					// Message Start Delimiter	
$config['message_end_delimiter'] 		= '';					// Message End Delimiter	
$config['error_start_delimiter'] 		= '';					// Error Start Delimiter	
$config['error_end_delimiter'] 			= '';					// Error End Delimiter

// Email Templates
$config['email_templates']     			= 'emails/';			// Folder where email templates are stored. Default : emails/
$config['email_launch']  				= 'launch.php';			// Activate Account Email Template Default : activate.php
$config['email_signup']					= 'signup.php';			// New user signup
$config['email_activate']   			= 'activate.php';		// Activate Account Email Template Default : activate.php
$config['email_forgot_password']   		= 'forgot_password.php';	// Forgot Password Email Template Default : forgot_password.php
$config['email_forgot_password_complete']= 'new_password.php'; 	// Forgot Password Complete Email Template Default : new_password.php
$config['email_send']  					= 'send.php';			// Template for a message being sent as an email

// Image Options
$config['uploads_folder']				= "./uploads/";
$config['profile_nopicture']			= "nopicture.png";