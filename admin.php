<?php
include('db.php');
$sql="select * from mysql1   order by id desc";
$mysqli_result=$mysqli->query($sql);
$rows=array();
while($row=$mysqli_result->fetch_array(MYSQL_ASSOC)){
	$rows[]=$row;
	}

?>


<!doctype html>
<html   lang =  "zh-cn">
	<head>
		<title>  留言板 </title>
        <meta charset=utf-8>
		<link href=liuyan.css  rel="stylesheet" type="text/css"   />


<style >

		

</style>


	</head>

	<body    id = contents >
						<div>
						<div id= font1	>管理员界面 </div >
						<div id =font2  >请删除违规留言
						</div >
					
						</div >


		<?PHP
foreach( $rows as $row ){
?>
		<div id =msg>

		<span >留言人: <?php echo $row['username'];?> </span>
		<span id=right> 
		<?PHP  echo $row['time'];?>
			<a  onclick= 'return 	confirm("删除是不可恢复的，你确认要删除吗？");' href=delete.php?id=<?php echo $row['id'];?>>删除</a>
		</span>
		<p>
		<?PHP echo $row['msg'];
		?>
		</p>
		</div >
<?php
		}
		?>
	</body>

</html>

