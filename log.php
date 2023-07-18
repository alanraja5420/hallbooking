<!DOCTYPE html>
<html>
    <head>
        <title>
            
        </title>
        <style type="text/css">
        *{
            margin: 0;
            padding: 0;

        }
        body{
            background-image:url(images/sjc3.jpeg);
            background-position: center;
            background-size: cover;
            font-family: sans-serif;
            margin-top: 40px;
            height: 700px;
            

        }
        .regform{
            width: 550px;
            background-color: rgb(0,0,0,0.8);
            margin: auto;
            color:#FFFFFF;
            padding: 10px 0px 10px 0px;
            text-align: center;
            border-radius: 15px 15px 0px 0px;


        }
        .main{
            background-color: rgb(0,0,0,0.7);
            width: 550px;
            height: 470px;

            margin: auto;
            

        }
        form{
            padding: 10px;

        }

    #name{
        width: 100px;
        height: 100px;

    }
    .name1{
        margin-left: 70px;
        margin-top: 100px;
        width: 125px;
        color:#FFFFFF;
        font-size: 20px;
        font-weight: 700;
    }

    .name{
        margin-left: 70px;
        margin-top: -10px;
        width: 125px;
        color:#FFFFFF;
        font-size: 20px;
        font-weight: 700;

    }
    .username{
        position: relative;
        margin-top: 50px;
        left: 250px;
        top:-80px;
        line-height: 37px;
        width: 175px;
        border-radius: 14px;
        padding: 0 22px;
        font-size: 16px;
        color:#555;
    }
    .password{
        position: relative;
        margin-top: 50px;
        left: 250px;
        top:-80px;
        line-height: 37px;
        width: 175px;
        border-radius: 14px;
        padding: 0 22px;
        font-size: 16px;
        color:#555;
    }
    button{
        background-color: #3BAF9F;
        display: block;
        margin: 20px 0px 0px 20px;
        margin-left: 150px;
        margin-top: -19px;
        text-align: center;
        border-radius: 19px;
        line-height: 10px;
        width: 175px;
        font-size: 17px;
        border: 2px solid #366473;
        padding: 14px 110px;
        outline: none;
        color: white;
        cursor: pointer;
        transition: 0.25px;

    }
    button:hover{
        background-color: #5390F5;


    }
    @media (max-width: 767px) {
  .container {
    width: 100%;
    padding: 10px;
  }
}


        </style>


    </head>
    <body>
        <div class="regform"><h1>Login Page</h1></div>
        <div class="main">

        <form>
        <div id="name">
            <h2 class="name1">UserName</h2>
            <input class="username" type="text" name="user_name"><br>
            <h2 class="name">Password</h2>
            <input class="password" type="text" name="pass_word"><br>
            <br>
            
            <button type="submit">login</button><br>
        </div>


        </form>
        </div>
    </body>
</html>