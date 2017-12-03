
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" id="font-awesome-style-css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css" type="text/css" media="all">
<!-- jQuery -->
<script type="text/javascript" charset="utf8" src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.8.2.min.js"></script>
<style>
body {
    font-size: 16px !important;
    line-height: 25px !important;
}
</style>
<title>phpflow.com : Demo of simple pagination with php</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
    font-size: 16px !important;
    line-height: 25px !important;
}
</style>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-25916786-1', 'phpflow.com');
  ga('send', 'pageview');

</script>

</head>
<body class="">
<div role="navigation" class="navbar navbar-default navbar-static-top">
      <div class="container">
        <div class="navbar-header">
          <button data-target=".navbar-collapse" data-toggle="collapse" class="navbar-toggle" type="button">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a href="#" class="navbar-brand">Phpflow.com</a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#">Home</a></li>
           
          </ul>
         
        </div><!--/.nav-collapse -->
      </div>
    </div>
	
	<div class="container" style="min-height:500px;">
	<div style='margin-bottom:100px'>
	<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- responsive-header -->
<ins class="adsbygoogle"
     style="display:block"
     data-ad-client="ca-pub-5044208028083716"
     data-ad-slot="8330817881"
     data-ad-format="auto"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>

	</div><div><a href="https://www.phpflow.com/php/simple-tutorial-of-pagination-in-php/" target="_blank"><h2>Demo : PHP simple pagination with PHP</h2></a></div>
<div> 
  
<table class="table table-bordered table-striped">  
<thead>  
<tr>  
<th>Name</th>
<th>Status</th>  
<th>Priority</th>  
</tr>  
</thead>  
<tbody> 
<?php  
$dbhost = 'localhost';  
$dbuser = 'root';  
$dbpass = "";  
$conn = mysql_connect($dbhost, $dbuser, $dbpass) or die ('Error connecting to mysql');  
$dbname = 'test_test';  
$connection = mysql_select_db($dbname); 
  
$limit = 2;  
if (isset($_GET["page"])) { 
		$page  = $_GET["page"]; 
	} else { 
		$page=1; 
	}  
$start_from = ($page-1) * $limit;  
  
$sql = "SELECT * FROM posts ORDER BY title ASC LIMIT $start_from, $limit"; 
$rs_result = mysql_query($sql);  
?> 
<?php  
		while ($row = mysql_fetch_assoc($rs_result)) {   
?>  
            <tr>  
            <td><?php echo $row["title"]; ?></td> 
			<td><?php echo $row["status"]; ?></td> 			
            <td><?php echo $row["body"]; ?></td>  
            </tr>  
<?php  
} 
?>  
</tbody>  
</table>  
<?php  
$sql = "SELECT COUNT(id) FROM posts";  
$rs_result = mysql_query($sql);  
$row = mysql_fetch_row($rs_result);  
$total_records = $row[0];  
$total_pages = ceil($total_records / $limit);

?>  
<?php for ($i=1; $i<=$total_pages; $i++) {  ?>
<ul class='pagination'> 
	<?php echo "<li><a href='pagination.php?page=".$i."'>".$i."</a></li>" ?>
</ul>  
<?php }?>
</div>

<div class="insert-post-ads1" style="margin-top:100px;">
<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- 336-responsive -->
<ins class="adsbygoogle"
     style="display:block"
     data-ad-client="ca-pub-5044208028083716"
     data-ad-slot="6174270289"
     data-ad-format="auto"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
</div>
</div>
</body>
</html>

<script>
	jQuery(document).ready(function() {
		;
    });
</script>
