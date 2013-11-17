<script src="http://tjs.sjs.sinajs.cn/t35/apps/opent/js/frames/client.js" language="JavaScript"></script>
<html xmlns:wb="http://open.weibo.com/wb">
<head>
    <script src="http://tjs.sjs.sinajs.cn/open/api/js/wb.js" type="text/javascript" charset="utf-8"></script>
    <meta property="wb:webmaster" content="74c05220531b98cc" charset=utf-8 />
	<title><?=$title?></title>
</head>
<body>

<div id="header">
	<h1><?='众筹网'?></h1>
</div>

<div id="menu">
	&bull;
	<?=anchor('', "主页")?>&bull;
	<?=anchor('login_controller', "登录")?>&bull;
	<?=anchor('mywish_controller', "我的心愿单")?>&bull;
	<?=anchor('other_controller', "去看看别人吧")?>&bull;
</div>

<wb:publish action="pubilish" type="web" language="zh_cn" button_type="red" button_size="middle" button_text="我要告诉小伙伴们" uid="1625566022" default_text="#来自众筹网by抱不着大腿好伤心team#" refer="y" default_image="" appkey="53ApY4" ></wb:publish>