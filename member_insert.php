<?php
    //사용자가 입력한 값을 가져옴
    $id = $_POST["id"]; //name에 해당하는 값을 php변수에 저장
    $pw = $_POST["pw"];
    
    $email  = $_POST["email"];
    $name = $_POST["name"];

    $nick = $_POST["nick"];
    $address= $_POST["address"];
              
    $con = mysqli_connect("localhost", "id", "pass", "debec"); // 데이터베이스 접속정보
 //user 2라는 계정으로 데이터 베이스 접속, 최고 관리자가 아니므로 보안이 조금더 좋음
	$sql = "insert into members(id, pw, email,name , nick , address)";
	$sql .= "values('$id', '$pw', '$email', '$name', '$nick','$address')"; // 내가 실행할 명령어 추가

	mysqli_query($con, $sql);  // $sql 에 저장된 명령 실행
    mysqli_close($con); //서버에 부하를 넣지 않게 하기 위한 명령문    

    echo "
	      <script>
	          location.href = 'login_form.php';
	      </script>
	  ";
      // 페이지 연결하는 명령어를 사용하여 멤버 폼으로 넘어갈수 있게 함
?>
