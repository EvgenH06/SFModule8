<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Визитка</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class = "header">
      <?php include 'logo.inc.php' ?>
      <?php include 'menu.inc.php' ?>
    </div>
    <div class = "about_me">
        <h1>  <?php  echo $p1  ?> </h1>
        <h2> <?php  echo $p2  ?> </h2>
        
        <div class = "data">
            <div class = "myImg">
                    <?php echo '<img src="img/picture.jpg" alt="Картинка">';?>
            </div>
            <div class="fullname">
                    <p> Меня зовут 
                    <?php echo $name, ' ', $surname . '<br>'; 
                          echo 'город:', ' ', $city; ?>                                      
                    </p> 
           
                    <p> Мне
                    <?php  echo $age;   ?>          
                    лет </p>
                    <p> Мы научились что-то создавать. Мы создали простейшую страницу-визитку с использованием полученных знаний и вывели получившийся результат в браузере. </p>
                    <p> Тут что-то происходит 8) </p>
                    
            </div>
        </div> 
        <div class="knowledge">
                    <?php  include 'knowledge.inc.php'; ?>
                    <?php   echo $a, ' ', $b, ' ', $c; ?> <br>
                    <?php
                        $start = microtime(true);
                        $a = $b = 10;
                        echo 'Присваиваем значения переменным a и b:', $a, ' и ', $b, '<br>';
                        echo 'Прозводим простейшие операции.', '<br>';
                        $a +=5;
                        $b--;
                        $c = $a + $b;
                        echo 'Сумма: ', $c, '<br>';
                        const HOME_WORK = 25;
                        echo 'Задаём константу.', '<br>';
                        echo 'Время выполнения скрипта: ' . (microtime(true) - $start) . ' sec.';
                    ?>   <br>                
                     <?php  echo $d; ?> 

        </div>
         
    </div>
    
    <div>
        <?php include 'footer.inc.php' ?>
    </div>
</body>
</html>