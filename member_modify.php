<?php
    //사용자가 입력한 값을 가져옴
    //$id   = $_POST["id"]; //name에 해당하는 값을 php변수에 저장
    $id   = $_GET["id"];
    $pw = $_POST["pw"];
    $name = $_POST["name"];
    $nick = $_POST["nick"];
    $email  = $_POST["email"];
    $address  = $_POST["address"];

              
    $con = mysqli_connect("localhost", "user2", "12345", "debec"); // 데이터베이스 접속정보
    //user2라는 계정으로 데이터 베이스 접속, 최고 관리자가 아니므로 보안
    

    // 기존의 레코드 값을 수정하는 sql 명령어 update 명령어 작성
    
    $sql = "update members set pw='$pw', name='$name', email='$email', nick='$nick', address='$address'";
    $sql .= "where id='$id'";



	mysqli_query($con, $sql);  // $sql 에 저장된 명령 실행
    mysqli_close($con); //서버에 부하를 넣지 않게 하기 위한 명령문    

    
    session_start();
    //$_SESSION["username"] = $name;
    unset($_SESSION["userid"]);
    unset($_SESSION["username"]);

    echo "
	      <script>
              alert('수정이 완료되었습니다. 다시 로그인해주세요.');    
	          location.href = 'index.php';
	      </script>
	  ";
      // 수정이 완료되면 페이지 연결하는 명령어를 사용
?>