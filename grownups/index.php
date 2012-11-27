<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Dr. Good Tooth</title>
    <link rel="stylesheet" type="text/css" href="../common/style.css" />
	<script type="text/javascript" src="../common/js/jquery-1.8.3.min.js"></script>
	<script type="text/javascript" src="../common/js/jquery-center.1.1.js"></script>
	<script type="text/javascript" src="../common/js/jquery-wander.1.0.js"></script>
	<script type="text/javascript" src="../common/js/main.js"></script>
    <script type="text/javascript">
        $(function() {
            alert($('#content').wander(50,77).attr("id"));
        });
    </script>
</head>

<body>
    <?php include('nav.php'); ?>
    <div id="content">
    </div>
    <?php include('footer.php'); ?>
</body>
</html>

