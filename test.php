<?php  
// ������������� ���������� � ����� ������  
include "include/mysql.php";  
// ���������� ������ ����� ��������� ��������� �� �������  
$num = 25;  
// ��������� �� URL ������� ��������  
$page = $_GET['page'];  
// ���������� ����� ����� ��������� � ���� ������  
$result = mysql_query("SELECT COUNT(*) FROM post");  
$posts = mysql_result($result, 0);  
// ������� ����� ����� �������  
$total = intval(($posts - 1) / $num) + 1;  
// ���������� ������ ��������� ��� ������� ��������  
$page = intval($page);  
// ���� �������� $page ������ ������� ��� ������������  
// ��������� �� ������ ��������  
// � ���� ������� �������, �� ��������� �� ���������  
if(empty($page) or $page < 0) $page = 1;  
  if($page > $total) $page = $total;  
// ��������� ������� � ������ ������  
// ������� �������� ���������  
$start = $page * $num - $num;  
// �������� $num ��������� ������� � ������ $start  
$result = mysql_query("SELECT * FROM post LIMIT $start, $num");  
// � ����� ��������� ���������� ������� � ������ $postrow  
while ( $postrow[] = mysql_fetch_array($result))  

echo "<table>";  
for($i = 0; $i < $num; $i++)  
{  
 echo "<tr> 
         <td>".$postrow[$i]['name']."</td> 
         <td>".$postrow[$i]['time']."</td></tr> 
       <tr><td colspan=\"2\">".$postrow[$i]['text']."</td></tr>";  
}  
echo "</table>";  


 
// ��������� ����� �� ������� �����  
if ($page != 1) $pervpage = '<a href= ./page?page=1><<</a>  
                               <a href= ./page?page='. ($page - 1) .'><</a> ';  
// ��������� ����� �� ������� ������  
if ($page != $total) $nextpage = ' <a href= ./page?page='. ($page + 1) .'>></a>  
                                   <a href= ./page?page=' .$total. '>>></a>';  

// ������� ��� ��������� ������� � ����� �����, ���� ��� ����  
if($page - 2 > 0) $page2left = ' <a href= ./page?page='. ($page - 2) .'>'. ($page - 2) .'</a> | ';  
if($page - 1 > 0) $page1left = '<a href= ./page?page='. ($page - 1) .'>'. ($page - 1) .'</a> | ';  
if($page + 2 <= $total) $page2right = ' | <a href= ./page?page='. ($page + 2) .'>'. ($page + 2) .'</a>';  
if($page + 1 <= $total) $page1right = ' | <a href= ./page?page='. ($page + 1) .'>'. ($page + 1) .'</a>'; 

// ����� ����  
echo $pervpage.$page2left.$page1left.'<b>'.$page.'</b>'.$page1right.$page2right.$nextpage;  

?>