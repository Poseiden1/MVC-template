<html>
	
<head>
	<meta charset="utf-8"/>
	<link type="text/css" rel="stylesheet" href="<?php if (file_exists(dirname(__DIR__).'/'.$file_css)) echo $file_css; ?>" >
	<link type="text/css" rel="stylesheet" href="<?php if (file_exists(dirname(__DIR__).'/'.$file_css_add)) echo $file_css_add; ?>" >
	<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <?php if (file_exists(dirname(__DIR__).'/'.$file_js.'_before.js')) echo '<script src="'.$file_js.'_before.js"></script>' ?>
</head>

<body>