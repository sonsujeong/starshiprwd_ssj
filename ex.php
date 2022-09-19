<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
      tr,td{text-align:center;border:none;}
      table{padding:20px;box-sizing:border-box;}
      .tb{border:none;}

    </style>
    
    
</head>
<body>
 <h3>데이터 입력하기</h3>
 <form action="insert.php" method='post'>
 <table width="720" border="1">
  <tr>
    <td>
      ID : <input type="text" size="6" name="id">
      이름 : <input type="text" size="6" name="name">
      주소 : <input type="text" size="20" name="addr">
    </td>
    <td>
      <input type="submit" value="입력하기">
    </td>
  </tr>
  </table>
</form>

  
<table width="720" border="1">
  <tr>
    <td>ID</td>
    <td>이름</td>
    <td>주소</td>
  </tr>

  <?
   include "dbconn.php";
   $sql="select * from ex";
   $result=mysqli_query($connect,$sql);
   while ($row=mysqli_fetch_array($result)){
    echo "<tr>
      <td>$row[id]</td>
      <td>$row[name]</td>
      <td>$row[addr]</td>
    </tr>";
   }
   mysqli_close($connect);
  ?>

</table>
</body>
</html>