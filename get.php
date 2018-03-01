<?php
include ("db.php");
$msg=posts('msg');
$users=posts('users');

if($msg==''	)
{
echo "留言内容不能为空";
exit;
}

if($users=="")
{
echo "用户名不能为空";
exit;
}


   
    $time=date('Y-m-d H:i:s', time()); 
   

   $count=0;


$input="INSERT  INTO  mysql1 VALUES(0,'{$users}','{$msg}','{$time}')" ;
$mysqli->query("$input");
	$sql="select * from mysql1   order by id desc";
	$mysqli_result=$mysqli->query($sql);
	$rows=array();
	while($row=$mysqli_result->fetch_array(MYSQL_ASSOC)){
		$rows[]=$row;   
$count++;
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
						<div id= font1	>欢迎来到杜云箫的留言板 </div >
						<div id =font2  >您的非法内容将被删除</div >
					
						</div >

<hr/><br/>






			<div  id=main>
				<form		action="get.php"  method= "post">					
							<span    id=font3>	留言内容: </span>
							<textarea  name=msg > </textarea>			
							<span id=font3   >	留言人:	</span>
							<input  id=users type=text      name=users >		
							<input id=right type=reset value=重置>
							<input  id =right type=submit  value=发表 >
			   </form>
			</div>



<div  id=center>
<?PHP
echo '留言数'.$count;
?>
</div>
<br/>
		<?PHP
foreach( $rows as $row ){
?>
		<div id =msg>

		<span >留言人: <?php echo $row['username'];?> </span>
		<span id=right> 
		<?PHP  echo $row['time'];?>
			<a href=a.html>删除</a>
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

