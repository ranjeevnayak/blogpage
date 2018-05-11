<?php
$conn=mysql_connect("localhost","root","");
$db=mysql_select_db('intern',$conn);
if(isset($_POST['submit']))
{
	// we can check by using echo before
	// veriable wether it print or not
	  $title=$_POST['TitleofBlog'];
	  $paraa1=$_POST['Blogparagraph1'];
	  $paraa2=$_POST['Blogparagraph2'];
	  $paraa3=$_POST['Blogparagraph3'];
	  $authorn=$_POST['BlogAuthorName'];
	
	if($title=='')
	{echo
		"<script>
		window.open('blog1.php?Title=title is required','_self')
		</script>";
		exit();
		
	}
	
	if($paraa1=='')
	{
		echo
		"<script>
		window.open('blog1.php?Para1=paragraph1 is required','_self')
		</script>";
		exit();
	}
	
	if($paraa2=='')
	{
		echo 
		"<script>
		window.open('blog1.php?Para2=paragraph2 is required','_self')
		</script>";
		exit();
	}
	
	if($paraa3=='')
	{
		echo 
		"<script>
		window.open('blog1.php?Para3=paragraph3 no is required','_self')
		</script>";
		exit();
	}
	
	if($authorn=='')
	{
		echo 
		"<script>
		window.open('blog1.php?Author=author name is required','_self')
		</script>";
		exit();
	}
	
	
$query="insert into u_tern(u_title,u_paraa1,u_paraa2,u_paraa3,u_authorn) values 
('$title','$paraa1','$paraa2','$paraa3','$authorn')";

if(mysql_query($query)) //query will execute
{
	echo "<font color=black size='6pt' align='center'> data has been inserted </font>";
	
	//data insert in same page in table form
	echo "<table bordercolor='black' align='center' border='6'>
	<tr>
		<td><font color=black size='6pt'>$title</font></td>
		<td><font color=black size='6pt'>$paraa1</font></td>
		<td><font color=black size='6pt'>$paraa2</font></td>
		<td><font color=black size='6pt'>$paraa3</font></td>
		<td><font color=black size='6pt'>$authorn</font></td>
	</tr>
		 </table>";
	
}	
	
}
	 
	
	

	
?>