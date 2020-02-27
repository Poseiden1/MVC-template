<?php

	spl_autoload_register(function ($className) {
		$classParts = explode('_', $className);
		$classPath = '';
		foreach ($classParts as $part)
			$classPath .= DIRECTORY_SEPARATOR . $part;
		include dirname(__FILE__) . DIRECTORY_SEPARATOR . 'app' . 
			$classPath . '.php';
	});
	
	$p = 'home';
	$s = '1';
	if (isset($_GET['p']))
		$p = $_GET['p'];
	if (isset($_GET['s']))
		$s = $_GET['s'];
	
	$dir_sep = DIRECTORY_SEPARATOR;
	
	$path_web = 'web' . $dir_sep;
	$file_css = $path_web . 'css' . $dir_sep . $p . '.css';
	$file_css_add = $path_web . 'css' . $dir_sep . $p . '_' . $s . '.css';
	$file_js = $path_web . 'js' . $dir_sep . $p;
	
	$path_app = dirname(__FILE__) . $dir_sep . 'app' . $dir_sep;
	$dir_ctrl = $path_app . 'C' . $dir_sep . $p . $dir_sep;
	$dir_view = $path_app . 'V' . $dir_sep . $p . $dir_sep;
	$file_ctrl = $dir_ctrl . 'c_' . $p . '_' . $s . '.php';
    $file_view = $dir_view . 'v_' . $p . '_' . $s . '.php';
    
	if (file_exists($file_ctrl) && file_exists($file_view))
	{
        require_once $file_ctrl;
		require_once $path_app . 'header.php';
        require_once $file_view;
        require_once $path_app . 'footer.php';
	}
	else
	{
		echo 'CTRL AND/OR VIEW DOES NOT EXIST';
	}
	
?>