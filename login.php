<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>로그인</title>
</head>
<body>
    <?php
        // 아이디와 비밀번호 전달받기
        // 로그인 페이지에서 입력한 아이디와 비밀번호를 post 방식으로 전달받아
        // 각각 저장
        $id = $_POST['id'];
        $pw = $_POST['pw'];        

        // Mysql 서버 접속
        //mysqli_connect() 함수로 mysql 서버에 접속
        $con = mysqli_connect("localhost","id","pass","debec");


        // 아이디 검색
        // 입력한 아이디인 $id를 mysqli_query() 함수로 memebers 테이블에서 검색,
        // 결과를 $result에 저장
        $sql = "select * from members where id='$id'";
        $result = mysqli_query($con,$sql);


        
        // $result레코드의 개수르 mysqli_num_rows() 함수로 세고
        // 그 결과를 $num_match에 반한
        $num_match = mysqli_num_rows($result);

        // 아이디 존재여부 판단
        // $num_match가 0이면 입력한 아이디가 members 테이블에 존재하지 않고,
        // $num_match가 값을 가지면 입력한 아이디가 members 테이블에 존재
         if(!$num_match) 
         {
             echo("
                 <script>
                     window.alert('등록되지 않은 아이디입니다!')
                     history.go(-1)
                 </script>
                
             ");//history.go(-1)은 전단계로 넘어가는 것
         }
         else 
         {
            //mysqli_fetch_array 함수는 mysqli_query 를 통해 얻은 
            //result set에서 레코드를 1개씩 리턴해주는 함수
            $row = mysqli_fetch_array($result);
            //배열식으로 전달
            $db_pass = $row["pw"];

            mysqli_close($con);

            if($pw != $db_pass)
            {
                // 비밀번호가 다른 경우
                // 입력 비밀번호와 DB 비밀번호가 다르면 '비밀번호가 틀립니다!'
                echo("
                    <script>
                        window.alert('비밀번호가 틀립니다!')
                        history.go(-1)
                    </script>
                ");
                exit;
            }
            else 
            {
                // 비밀번호가 같은 경우
                // 입력 비밀번호와 DB 비밀번호가 같으면 session_start()로 세션 시작.
                session_start();
                $_SESSION["userid"] = $row["id"];
                $_SESSION["username"] = $row["name"];

                echo ("
                    <script>
                        location.href='index.php';
                    </script>
                ");
            }
        }
    ?>
</body>
</html>