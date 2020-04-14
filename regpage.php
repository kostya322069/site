<html>
<head>
<meta charset="UTF-8">
<title>Регистрация</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body class="body" vlink="black">


<nav>
	<div class="pages">
    
  
	<div class="nav"> 
       <a href="index.html">Главная</a>
	</div>
	<div class="nav"> 
       <a href="page2.html">О себе</a>
	</div>

	<div class="here nav">
		Регистрация
	</div>
	
	<div class="nav"> 
       <a href="page4.html">Игра</a>   
	</div>
  <div class="nav"> 
       <a href="page5.html">Галлерея</a>   
  </div>
    </div>
</nav>
 


<section>
	<div class="section">
       
       <h1>Регистриция</h1><br>
      <form action="signup.php" method="post" enctype="multipart/form-data">

      <p><label>Введите Имя:</p><br>
       <input name="full_name" size="20" type="text"></label></p><br>
    
      <p><label>Введите логин:</p><br>
       <input name="login" size="20" type="text"></label></p><br>
    
      <p><label>Введите пароль:</p><br>
      <input name="password" size="20" type="password"></label></p><br>

      <p><label>Повторите пароль:</p><br>
      <input name="password_confirm" size="20" type="password"></label></p><br>

    
     
        <p> <input name="1234" type= "submit" value="Зарегистрироваться"></p><br>
       
    
       </form>
      <p>Уже зарегистрирован?</p><br>
      <p class="message">
     <a href=page3.php> Вход на сайт </a><br>
     <a href="index.html"><br> Вернуться на главную страницу </a>
     <br>
     <p class="message">
        <?= $_SESSION['message'] ?>
     </p> 
    </div>





    </div>




</section>





</body>



</html>