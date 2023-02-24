
<form method="post">
    <h1 id="loguj">Zaloguj się </h1>
<label id="logint" for="login" Login> Login</label>  <input id="Login" type="text" name ="login"> <br>
<label for="password" id="haslo1"> <br> Haslo</label> <br> <input id="haslo" type="text" name ="haslo">
<input id="sub" type="submit" value ="zaloguj">
</form>

<style>
    #loguj {
        opacity:50%;
        padding-left: 15px;
        color:darkkhaki
    }
    form  {
        background-color: wheat;
        width: 500px;
        height: 300px;
        border: 2px solid black;

        
        
    }
    #sub {
        width: 60px;
        height: 20px;
        float: left;
        margin-top: 40px;
        margin-left: 5px
        ;
    }
    #logint {
     text-align: center;
     margin-left: 260px;
    }
    #login  {
        float:right;
        
    }
    #haslo {
        float: right;
       
    }
    #haslo1{
        text-align: center;
     margin-right: 260px;
    }
</style>