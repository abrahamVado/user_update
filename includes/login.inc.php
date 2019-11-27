<?php

if (isset($_POST['login-submit']))
{
    
    require 'dbh.inc.php';
    
    $mailuid = $_POST['mailuid'];
    $password = $_POST['pwd'];
    
    if (empty($mailuid) || empty($password))
    {
        header("Location: ../login?error=emptyfields");
        exit();
    }
    else
    {
        $sql = "SELECT * FROM users WHERE uidUsers=?;";
        $stmt = mysqli_stmt_init($con);
        
        if (!mysqli_stmt_prepare($stmt, $sql))
        {
            header("Location: ../login?error=sqlerror");
            exit();
        }
        else
        {
            mysqli_stmt_bind_param($stmt, "s", $mailuid);
            mysqli_stmt_execute($stmt);
            
            $result = mysqli_stmt_get_result($stmt);
            
            if($row = mysqli_fetch_assoc($result))
            {  
                
                $pwdCheck = password_verify($password, $row['pwdUsers']);
                if ($pwdCheck == false)
                {
                    header("Location: ../login?error=wrongpwd");
                    exit();
                }
                else if($pwdCheck == true)
                {
                    session_start();
                    $_SESSION['userId'] = $row['idUsers'];
                    $_SESSION['userUid'] = $row['uidUsers'];
                    $_SESSION['userLevel'] = $row['userLevel'];
                    $_SESSION['emailUsers'] = $row['emailUsers'];
                    $_SESSION['f_name'] = $row['f_name'];
                    $_SESSION['l_name'] = $row['l_name'];
                    $_SESSION['gender'] = $row['gender'];
                    $_SESSION['headline'] = $row['headline'];
                    $_SESSION['bio'] = $row['bio'];
                    $_SESSION['joined'] = $row['joined'];
                    $_SESSION['birthday'] = $row['birthday'];
                    $_SESSION['birthplace'] = $row['birthplace'];
                    $_SESSION['livesin'] = $row['livesin'];
                    $_SESSION['phone'] = $row['phone'];
                    $_SESSION['userImg'] = $row['userImg'];
                    $_SESSION['coverImg'] = $row['coverImg'];
                    $_SESSION['hobbies'] = $row['hobbies'];

                    
                    header("Location: ../index?login=success");
                    exit();
                }
                else
                {
                    header("Location: ../login?error=wrongpwd");
                    exit();
                }
            }
            else
            {
                header("Location: ../login?error=nouser");
                exit();
            }
        }
    }
    
}
 else 
{
    header("Location: ../login");
    exit();
}