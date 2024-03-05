<?php
    if (isset($_POST['post'])) 
    {
        require_once($_SERVER['DOCUMENT_ROOT'].'/tsu/user19/Passion/core/connection_php_mysql.php');

        $title = $_POST['title'];
        $created = $_POST['created'];
        $article = $_POST['article'];

        if (!empty($title) and !empty($created) and !empty($article)) 
        {
            $query = "
        INSERT INTO NOTES (TITLE, CREATED, ARTICLE) 
        VALUES ('$title', '$created', '$article')
        ";

        mysqli_query($link,$query);
        mysqli_query($link,"SET NAMES 'UTF8'");

        echo '<script>setTimeout(function(){ window.location.href = "https://tsulab.ru/tsu/user19/Passion/index.php"; }, 3000);</script>';
        echo "Запись успешно добавлена. Вы будете перенаправлены через 3 секунды...";
        exit();
        }
        else
        {
            echo '<br>', 'Для публикации статьи необходимо ввести все данные!', '<br>',
            'Повторите попытку, перейдя в раздел ...';
        }
    }

    
?>

<body>
    <form id="newnote" name="newnote" method="post">
        <caption>Добавить новую заметку: </caption>         
            <p>Заголовок статьи: </p>
            <input type="text" name="title" id="title" size="25" maxlength="24">        
            <p>Текст статьи: </p>           
            <textarea name="article" id="article" cols="100" rows="15"></textarea>      
            <input type="hidden" name="created" id="created" value ="<?php echo
date("Y-m-d");?>"/>
            <p><input type="submit" name="post" value="Отправить статью!"></p>
    </form>
</body>