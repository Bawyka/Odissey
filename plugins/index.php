<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>

<!-- jQuery CheckBox: http://widowmaker.kiev.ua/checkbox/ -->
<link type='text/css' rel='stylesheet' href='../plugins/checkbox/jquery.checkbox.css'/>
<link type='text/css' rel='stylesheet' href='../plugins/checkbox/jquery.safari-checkbox.css'/>
<!-- <script type='text/javascript' src='../plugins/checkbox/jquery.js'></script> -->
<script type='text/javascript' src='../plugins/checkbox/jquery.checkbox.min.js'></script>

<script type="text/javascript">
$(function(){

	$('input:checkbox:not([safari])').checkbox();

});
</script>

<link type="text/css" rel="stylesheet" href="plugins.css" media="all" />
<title>Admin set</title>
</head>
<body>

<?php

	if (isset($_POST["submit"])) {
	
		$post = $_POST;
		
		$cookie = "";
		
		foreach ($post as $key => $val) {
		
			if ($val=="on") {
			
				$cookie.= $key.",";
			
			}
		
		}
	
		$cookie = substr_replace($cookie ,"",-1);
		
		file_put_contents("plugins.ini",$cookie);
	
	}
	
	if (file_exists("plugins.ini"))
	{
	
		$plugins = file_get_contents("plugins.ini");
	
		$plugin = explode(",",$plugins);
	
	}
	
?>
	
    <div class="wrapper">
    <a href="/">root..</a>
        <div class="content">
        
            <table id="tplugins">
			
			<form action="/plugins/" method="post" />
			
				<!-- jQuery -->
                <tr><td><div class="h"><a href="http://jquery.com" class="l" target="_blank">jQuery</a><input type="checkbox" class="l" <?php echo (in_array("jquery",$plugin)) ? "checked='checked'" : ""; ?> name="jquery" /></div></div></td></tr>
								
				<!-- jQuery-UI -->
                <tr><td><div class="h"><a href="http://jqueryui.com" class="l" target="_blank">jQuery UI</a><input type="checkbox" class="l" <?php echo (in_array("jqueryui",$plugin)) ? "checked='checked'" : ""; ?> name="jqueryui" /></div></td></tr>
				
				<!-- jQuery Cookie -->
				<tr><td><div class="h"><a href="https://github.com/carhartl/jquery-cookie/" class="l" target="_blank">jQuery cookie</a><input type="checkbox" class="l" <?php echo (in_array("jqcookie",$plugin)) ? "checked='checked'" : ""; ?> name="jqcookie" /></div></td></tr>
				
				<!-- jQuery ScrollPane & Mouswheel -->
				<tr><td><div class="h"><a href="http://jscrollpane.kelvinluck.com" class="l" target="_blank">jScrollPane & Mousewheel</a><input type="checkbox" class="l" <?php echo (in_array("jscrollpane",$plugin)) ? "checked='checked'" : ""; ?> name="jscrollpane" /></div></td></tr>
				
				<!-- jQuery scrollTo -->
				<tr><td><div class="h"><a href="http://flesler.blogspot.com/2007/10/jqueryscrollto.html" class="l" target="_blank">scrollTo</a><input type="checkbox" class="l" <?php echo (in_array("scrollto",$plugin)) ? "checked='checked'" : ""; ?> name="scrollto" /></div></td></tr>
				
				<!-- jQuery mTip -->
				<tr><td><div class="h"><a href="http://dev.mauvm.nl/mTip/#manual" class="l" target="_blank">mTip</a><input type="checkbox" class="l" <?php echo (in_array("mtip",$plugin)) ? "checked='checked'" : ""; ?> name="mtip" /></div></td></tr>
				
				<!-- jQuery cusel -->
				<tr><td><div class="h"><a href="http://www.xiper.net/collect/html-and-css-tricks/verstka-form/nice-select-jquery.html" class="l" target="_blank">cuSel</a><input type="checkbox" class="l" <?php echo (in_array("cusel",$plugin)) ? "checked='checked'" : ""; ?> name="cusel" /></div></td></tr>
				
				<!-- StickyScrollMenu -->
				<tr><td><div class="h"><a href="http://blog.echoenduring.com/2010/11/15/freebie-contained-sticky-scroll-jquery-plugin/" class="l" target="_blank">StickyScroll Menu</a><input type="checkbox" class="l" <?php echo (in_array("stickyscrollmenu",$plugin)) ? "checked='checked'" : ""; ?> name="stickyscrollmenu" /></div></td></tr>
				
				<!-- CheckBox -->
				<tr><td><div class="h"><a href="http://widowmaker.kiev.ua/checkbox/" class="l" target="_blank">CheckBox</a><input type="checkbox" class="l" <?php echo (in_array("chkbox",$plugin)) ? "checked='checked'" : ""; ?> name="chkbox" /></div></td></tr>

				<!-- Kwicks -->
				<tr><td><div class="h"><a href="http://ruseller.com/adds/adds2276/example/" class="l" target="_blank">Kwicks</a><input type="checkbox" class="l" <?php echo (in_array("kwicks",$plugin)) ? "checked='checked'" : ""; ?> name="kwicks" /></div></td></tr>
				
				<!-- jQuery Image Cube -->
				<tr><td><div class="h"><a href="http://keith-wood.name/imageCube.html" class="l" target="_blank">jQuery Image Cube</a><input type="checkbox" class="l" <?php echo (in_array("cube",$plugin)) ? "checked='checked'" :""; ?> name="cube" /></div></td></tr>
				
				<!-- jQuery Form -->
				<tr><td><div class="h"><a href="https://github.com/malsup/form/" class="l" target="_blank">jQuery.Form.js</a><input type="checkbox" class="l" <?php echo (in_array("jform",$plugin)) ? "checked='checked'": ""; ?> name="jform" /></div></td></tr>
				
				<!-- jQuery tables -->
				<tr><td><div class="h"><a href="http://datatables.net/" class="l" target="_blank">jQuery tables </a><input type="checkbox" class="l" <?php echo (in_array("jtables",$plugin)) ? "checked='checked'":""; ?> name="jtables" /></div></td></tr>
				
				<!-- jQuery tools -->
				<tr><td><div class="h"><a href="http://jquerytools.org" class="l" target="_blank">jQuery tools</a><input type="checkbox" class="l" <?php echo (in_array("jtools",$plugin)) ? "checked='checked'" :""; ?> name="jtools" /></div></td></tr>

				<!-- jQuery redactor -->
				<tr><td><div class="h"><a href="http://redactorjs.com" class="l" target="_blank">jQuery redactor (WYSIWYG)</a><input type="checkbox" class="l" <?php echo (in_array("redactor",$plugin)) ? "checked='checked'" :""; ?> name="redactor" /></div></td></tr>
				
				<!-- jQuery TinyMCE -->
				<tr><td><div class="h"><a href="http://www.tinymce.com/" class="l" target="_blank">jQuery TinyMCE (WYSIWYG)</a><input type="checkbox" class="l" <?php echo (in_array("tinymce",$plugin)) ? "checked='checked'" :""; ?> name="tinymce" /></div></td></tr>
				
				<!-- jQuery Lightbox -->
				<tr><td><div class="h"><a href="http://lokeshdhakar.com/projects/lightbox2/" class="l" target="_blank">jQuery Lightbox2</a><input type="checkbox" class="l" <?php echo (in_array("lightbox",$plugin)) ? "checked='checked'" :""; ?> name="lightbox" /></div></td></tr>
				
				<!-- jQuery Files Upload -->
				<tr><td><div class="h"><a href="https://github.com/blueimp/jQuery-File-Upload/wiki/Basic-plugin" class="l" target="_blank">jQuery FilesUpload</a><input type="checkbox" class="l" <?php echo (in_array("filesupload",$plugin)) ? "checked='checked'" :""; ?> name="filesupload" /></div></td></tr>
				
				<!-- jQuery AjaxUpload -->
				<tr><td><div class="h"><a href="#" class="l" target="_blank">jQuery ajaxupload</a><input type="checkbox" class="l" <?php echo (in_array("ajaxupload",$plugin)) ? "checked='checked'" :""; ?> name="ajaxupload" /></div></td></tr>
				
				<!-- jQuery Carusel -->
				<tr><td><div class="h"><a href="http://www.thomaslanciaux.pro/jquery/jquery_carousel.htm" class="l" target="_blank">jQuery Carusel</a><input type="checkbox" class="l" <?php echo (in_array("carusel",$plugin)) ? "checked='checked'" :""; ?> name="carusel" /></div></td></tr>
				
				<tr><td><div class="h"><input align="left" type="submit" value="Применить плагины" class="sub" name="submit"/> </span></td><td><span>&nbsp;</div></td>
				
			</form>
				
            </table>
        
        </div>
    <a href="/">root..</a>
    
</body>
</html>