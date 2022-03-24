<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!doctype html>
<html lang="en">
	<head>
      <!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- Bootstrap CSS -->
		<link href="<?php echo base_url(); ?>css/bootstrap.min.css"  rel="stylesheet">
		<link href="<?php echo base_url(); ?>css/owl.carousel.min.css?<?php echo assetsversion(); ?>=<?php echo time(); ?>"  rel="stylesheet" type="text/css">      
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

		<title><?php echo $actdept; ?> : Courses : Skill-Lync</title>
		
		<?php 
		
			$title = !empty($dept->seo_title) ? $dept->seo_title : $actdept.' Programs, '.ogTitle();
			
			$description = !empty($dept->seo_description) ? $dept->seo_description : $actdept.' Programs, '.ogDesc();
			
		?>
		
		<!-- Meta -->	
		<meta name="description" content="<?php echo $description; ?>">
		<link rel="author" href="<?php echo base_url(); ?>aboutus" title="Team Skill-Lync">
		<meta name="author" content="Skill-Lync">
		
		<meta name="robots" content="<?php echo getRobots(); ?>" />
		
		<link rel="canonical" href="<?php echo base_url(); ?><?php echo $actdeptcode; ?>-engineering-courses">
		
		<meta property="og:title" content="<?php echo $title; ?>">
		<meta property="og:description" content="<?php echo $description; ?>">
		<meta property="og:url" content="<?php echo base_url(); ?>courses/<?php echo $actdeptcode; ?>">
		<meta property="og:site_name" content="<?php echo ogSitename(); ?>">
		<meta property="og:image" content="<?php echo ogImage(); ?>">
		<meta property="og:image:alt" content="<?php echo ogSitename(); ?>">
		<meta property="og:type" content="website">
		<meta property="fb:app_id" content="<?php echo ogFbAppId(); ?>">
		
		<meta name="twitter:card" content="summary_large_image">
		<meta name="twitter:site" content="<?php echo ogTwitterSite(); ?>">
		<meta name="twitter:title" content="<?php echo $title; ?>">
		<meta name="twitter:description" content="<?php echo $description; ?>">
		<meta name="twitter:url" content="<?php echo base_url(); ?>courses/<?php echo $actdeptcode; ?>">
		<meta name="twitter:image" content="<?php echo ogImage(); ?>">
		
		<style>
			.loader-data{
				flex-wrap: wrap;
			}
			
			.loader-data a .card {
				border: 1px solid rgba(222,222,222, 0);
				margin-bottom: 8px;
			}
			
			.loader-data a .card:hover {
				border-color: #d3d5df;
				box-shadow: 0px -1px 7px 6px rgba(218,220,230,.6);
			}
			
			body{
				background: rgb(196, 196, 196, 0.15);
			}

			.loader-data .image {
				display: flex;
				justify-content: center;
				height: 169px;
				width: 100%;
				overflow: hidden;
				background-repeat: no-repeat;
				background-size: cover;
				margin-bottom:1rem!important;
			}
			
			.loader-data p{
				height:20px;
				margin-bottom:0px;
			}
		
			@-webkit-keyframes placeHolderShimmer {
			  0% {
				background-position: -468px 0;
			  }
			  100% {
				background-position: 468px 0;
			  }
			}

			@keyframes placeHolderShimmer {
			  0% {
				background-position: -468px 0;
			  }
			  100% {
				background-position: 468px 0;
			  }
			}

			.content-placeholder {
			  display: inline-block;
			  -webkit-animation-duration: 1s;
			  animation-duration: 1s;
			  -webkit-animation-fill-mode: forwards;
			  animation-fill-mode: forwards;
			  -webkit-animation-iteration-count: infinite;
			  animation-iteration-count: infinite;
			  -webkit-animation-name: placeHolderShimmer;
			  animation-name: placeHolderShimmer;
			  -webkit-animation-timing-function: linear;
			  animation-timing-function: linear;
			  background: #f6f7f8;
			  background: -webkit-gradient(linear, left top, right top, color-stop(8%, #eeeeee), color-stop(18%, #dddddd), color-stop(33%, #eeeeee));
			  background: -webkit-linear-gradient(left, #eeeeee 8%, #dddddd 18%, #eeeeee 33%);
			  background: linear-gradient(to right, #eeeeee 8%, #dddddd 18%, #eeeeee 33%);
			  -webkit-background-size: 800px 104px;
			  background-size: 800px 104px;
			  height: inherit;
			  position: relative;
			  border: 1px solid #eeeeee;
			  width:100%;
			}

		</style>
	</head>
	<body data-spy="scroll" data-target="#myScrollspy" data-offset="80">