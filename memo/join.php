<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>

    </style>
    <script>
        function chkFrm(){
            var a = document.getElementById("name").value;
            if(a==""){
                alert('이름을 입력해주세요');
                document.getElementById("name").focus();
                return false;
            }

            return true;


        }
    </script>
</head>
<body>
    <form action="joinProc.php" method="post" onsubmit="return chkFrm()">
        <div>
            id:<input type="text" name="user_id" placeholder="아이디">
        </div>
        <div>
            pw:<input type="text" name="pwd" placeholder="비밀번호">
        </div>
        <div>
            이름:<input type="text" name="name" id="name" placeholder="이름">
        </div>
        <div>
            email:<input type="text" name="email" placeholder="이메일">
        </div>

        <!-- <input type="submit" value="회원가입"> -->
        <button type="submit">회원가입</button>
    </form>

</body>
</html>