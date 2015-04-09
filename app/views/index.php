
<!DOCTYPE html lang="zh-cn">
<html>
  	<head>
	    <meta http-equiv="Content-type" content="text/html; charset=utf-8">
	    <meta name="keywords" content="最小物联网,物联网系统设计,物联网系统,最小物联网系统设计,开源IOT">
	    <meta name="description" content="一个最小物联网系统的设计及源码，这是一个开源的最小物联网系统，本页面用于展示最小系统的传感器部分，开源IOT">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	    <link rel="canonical" href="http://b.phodal.com" />
	    <title>最小物联网系统设计</title>
		<link rel="stylesheet" type="text/css" href="<?= url('css/jquery.mobile-1.4.0.min.css') ?>" />
		<link rel="stylesheet" type="text/css" href="<?= url('css/jquery.mobile.structure-1.4.0.min.css') ?>" />
	</head>
<body>

<body>
	<div data-role="page">

		<div data-role="header" class="ui-bar ui-bar-b" class="jqm-header">
			<h1>基础控制</h1>
		</div>

		<div data-role="collapsible" data-collapsed="false">
			<h3>查看温度情况</h3>
		<div>
		<div id="Tchart" style="min-width:800px;width:100%;height:300px"></div>
		</div>
	</div>
	<div data-role="footer" class="ui-bar ui-bar-b" data-position="fixed">
		<h4><a href="http://www.phodal.com">Power by Phodal</a></h4>
	</div>
</body>

<script type="text/javascript" src="<?= url('js/jquery-2.0.3.min.js
')?>"></script>
<script type="text/javascript" src="<?= url('js/jquery.mobile-1.4.0.min.js')?>"></script>
<script type="text/javascript" src="http://code.highcharts.com/highcharts.js"></script>
<script type="text/javascript" src="<?= url('js/log.js') ?>"></script>
<script type="text/javascript" src="http://code.highcharts.com/modules/exporting.js"></script>
<script type="text/javascript" src="<?= url('js/app.js')?>"></script>

</body>
</html>
