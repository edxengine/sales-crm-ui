<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!doctype html>
<html lang="en">
	<head>
      <!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- Bootstrap CSS -->
		<link href="<?php echo base_url(); ?>css/bootstrap.min.css"  rel="stylesheet">
		<link href="<?php echo base_url(); ?>css/owl.carousel.min.css"  rel="stylesheet" type="text/css">      
		<link href="<?php echo base_url(); ?>css/font-awesome.min.css" rel="stylesheet" type="text/css">
		<link href="<?php echo base_url(); ?>css/owl.theme.default.min.css"  rel="stylesheet" type="text/css" >
		<link href="<?php echo base_url(); ?>css/slick.min.css" rel="stylesheet" type="text/css">
      
		<!-- Custom CSS Minify -->
		<link href="<?php echo base_url(); ?>css/style.css?<?php echo assetsversion(); ?>" rel="stylesheet" type="text/css">
		<link href="<?php echo base_url(); ?>css/media.css?<?php echo assetsversion(); ?>" rel="stylesheet" type="text/css">
		
		
		
		<!-- Favicon -->
		<link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url(); ?>images/favicon.ico">
		<link rel="icon" type="image/x-icon" href="<?php echo base_url(); ?>images/favicon.ico">
		<link rel="apple-touch-icon-precomposed apple-touch-icon" href="<?php echo base_url(); ?>images/favicon.ico" type="image/x-icon">

		<title><?php echo $default->title; ?> : Skill-Lync</title>
		
		<!-- Meta -->	
		<meta name="description" content="<?php echo $default->seo_desc; ?>">
		<link rel="author" href="<?php echo base_url(); ?>aboutus" title="Team Skill-Lync">
		<meta name="author" content="Skill-Lync">
		
		<meta name="robots" content="<?php echo getRobots(); ?>" />
		
		<link rel="canonical" href="<?php echo $urlRef; ?>">
		
		<meta property="og:title" content="<?php echo $default->title; ?>">
		<meta property="og:description" content="<?php echo $default->seo_desc; ?>">
		<meta property="og:url" content="<?php echo $urlRef; ?>">
		<meta property="og:site_name" content="<?php echo ogSitename(); ?>">
		<meta property="og:image" content="<?php echo $default->thumbnail; ?>">
		<meta property="og:image:alt" content="<?php echo $default->title; ?>">
		<meta property="og:type" content="website">
		<meta property="fb:app_id" content="<?php echo ogFbAppId(); ?>">
		
		<meta name="twitter:card" content="summary_large_image">
		<meta name="twitter:site" content="<?php echo ogTwitterSite(); ?>">
		<meta name="twitter:title" content="<?php echo $default->title; ?>">
		<meta name="twitter:description" content="<?php echo $default->seo_desc; ?>">
		<meta name="twitter:url" content="<?php echo $urlRef; ?>">
		<meta name="twitter:image" content="<?php echo $default->thumbnail; ?>">
		
	</head>
	<body data-spy="scroll" data-target="#myScrollspy" data-offset="80">
	
	<style>
		.text-box p{
			color: #a19d9d !important;
		}
		
		.text-box font{
			color: #a19d9d !important;
		}
		
		.text-box span{
			color: #a19d9d !important;
		}
		
		.course-ul-details li{
			font-size:1.125rem;
			margin-top:20px;
		}
	</style>