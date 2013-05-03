<?php
	if(isset($_GET['page'])) {
		$page = $_GET['page'];
	} else {
		$page = "";
	}
	if(isset($_GET['id'])) {
		$id = $_GET['id'];
	} else {
		$id = 1;
	}
	$moreup = false;
	$moredown = false;
	$xmlpath = "pages/" . $page . "/desc.xml";
	if(!file_exists($xmlpath)) {
		$xmlpath = "pages/404/desc.xml";
		$id = 1;
	}
	$content = file_get_contents($xmlpath);
	$xmldoc = simplexml_load_string($content);
	foreach ($xmldoc->bubbles[0] as $bubble) {
		$bubbles[] = '{text:"' . $bubble['text'] . '",link:"' . $bubble['link'] . '",pic:"' . $bubble['pic'] . '"}';
	}
	$i = 0;
	foreach ($xmldoc->content[0] as $onepage) {
		if($onepage['id'] == $id) {
			foreach ($onepage->bubbles[0] as $bubble) {
				$bubbles[$i] = '{text:"' . $bubble['text'] . '",link:"' . $bubble['link'] . '",pic:"' . $bubble['pic'] . '"}';
				$i++;
			}
			$head = $onepage->head;
			//$body = $onepage->body . "\n";
			$body = $onepage->body->asXML()  . "\n";
		} elseif ($onepage['id'] > $id) {
			$moreup = true;
		} else {
			$moredown = true;
		}
	}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width = 800">
	<title>Dr. Good Tooth</title>
	<link rel="stylesheet" type="text/css" href="common/style.css" />
	<link rel="stylesheet" type="text/css" href="common/sitewide.css" />
	<script type="text/javascript" src="common/js/jquery-1.8.3.min.js"></script>
	<script type="text/javascript" src="common/js/jquery-center.1.1.js"></script>
	<script type="text/javascript" src="common/js/jquery-wander.1.1.js"></script>
	<script type="text/javascript" src="common/js/jquery-me.2.0.js"></script>
	<script type="text/javascript" src="common/js/excanvas.compiled.js"></script>
	<script type="text/javascript" src="common/js/main.js"></script>
	<script type="text/javascript" src="common/js/modernizr.touch.js"></script>
	<script type="text/javascript">
		$(function() {
			var i, navLinks;
			PALETTE.splice(2,1);
			availableColors = PALETTE.slice(0);
			$("#content").css("background-image","url('common/img/oval77d1f3.png')");
			$("#nav #navbar div").hoverOrClick(function(event) {
				event.preventDefault();
				$(event.currentTarget).addClass("navhover");
			}, function(event) {
				event.preventDefault();
				$(event.currentTarget).removeClass("navhover");
			}, function(event) {
				//event.preventDefault();
			});
			loadBubbles([
				<?php
					echo implode(",",$bubbles);
				?>
			]);
			$("#title").center({vertical:false});
		});
	</script>
</head>

<body>
	<?php include('nav.php'); ?>
	<div id="content">
		<?php if($moredown){ ?><a id="linkback" href="<?php echo ($id - 1);?>"><img src="common/img/icons/arrowleft.png" /></a><?php } ?>
		<h1><?php echo $head; ?></h1>
		<?php if($moreup){ ?><a id="linkfwd" href="<?php echo ($id + 1);?>"><img src="common/img/icons/arrowright.png" /></a><?php } ?>
		<pre><?php echo $body; ?></pre>
	</div>
	<?php include('footer.php'); ?>
	<div id="bubblebox">
	</div>
</body>
</html>

