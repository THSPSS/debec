
<?php
   
   $id = $_GET['id'];


   $con = mysqli_connect("localhost", "id", "pass", "debec");

   $sql = "select * from members where id='$id'";
   $result = mysqli_query($con, $sql);

   $num_record = mysqli_num_rows($result);

   if ($num_record)//레코드 수가 0이 아님. 즉 true 일때
   {
      echo "<script>localStorage.setItem('check_id','recheck')</script>";
   }
   else
   {
      echo "<script>localStorage.setItem('check_id','confirm')</script>";
   }
   
   mysqli_close($con);

   echo ("
   <script>
      close();
   </script>   

   ");
   //history.back(-1)
   // echo "<script>localStorage.setItem('uinput','$id')</script>";

?>
</p>
</body>
</html>

