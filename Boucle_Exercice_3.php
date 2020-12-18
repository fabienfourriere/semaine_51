<html>  
<body>
<table border=1>
  <?php 
$max=12;
echo "<tr><th></th>";
for($i=0;$i<=$max;$i++)
  echo "<th>$i</th>";
echo "</tr>\n";
for($j=0;$j<=$max;$j++)
{
  echo "<tr><th>$j</th>";
  for($i=0;$i<=$max;$i++)
  {
    echo "<td>".($j*$i)."</td>";
  }
  echo "</tr>\n";
}  
  ?> 
</table>
</body>
</html>