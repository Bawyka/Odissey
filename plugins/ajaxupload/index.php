<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>

<head>
	<meta http-equiv="Content-type" content="text/html; charset=windows-1251" />
	<title>�������� ������ �� ������ ��� ������������ ��������</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<script type="text/javascript" src="jquery-1.4.2.min.js"></script>
	<script type="text/javascript" src="ajaxupload.js"></script>
	<script type="text/javascript">
	$(document).ready(function(){
		var button = $('#butUpload > span'), interval;
		
		new AjaxUpload(butUpload, {
			action: 'upload.php', 
			onSubmit : function(file, ext){
			if (ext && /^(rar|zip|gzip)$/.test(ext)) {
				button.text('��������');
				this.disable();
				$("#imgLoad").show();
				
				interval = window.setInterval(function(){
					var text = button.text();
					
					if (text.length < 13){
						button.text(text + '.');					
					} else {
						button.text('��������');				
					}
				}, 200);
				} else {
					$("<li></li>").appendTo("#files").text("����� ��� ������ �� ��������������");
					return false;
				}
			},
			onComplete: function(file, response){
				$("#imgLoad").hide();
				button.text('���������, ���?');
				window.clearInterval(interval);
				this.enable();
				$('<li></li>').appendTo('#files').text(file);						
			}
		});
	});
	</script>
</head>

<body>

<div id="main">
	<div id="header">�������� ������ �� ������ ��� ������������ ��������</div> <!--end header-->
	<div id="wrapper">
		<div id="content">
			
			<div id="butUpload"><span>������� ����</span><img src="loading.gif" id="imgLoad" align="right" /></div>
			<ol id="files"></ol>
		
		</div> <!--end content-->
	</div> <!--end wrapper-->
	<div id="footer"> &copy; Copyright by Maksim Petrenko <a href="http://www.maksimpetrenko.com">[http://www.maksimpetrenko.com]</a></div> <!--end footer-->
</div> <!--end main-->

</body>
</html>