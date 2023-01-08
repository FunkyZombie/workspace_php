<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<header class="header">
    <div class="wrap header-wrap">
        <h1 class="header-title"><?= $pageHeader ?></h1>
        <?php include "menu.php" ?>
    </div>
</header>
<main>
    <div class="wrap tasks-wrap">
        <?php if($tasks !== null) : ?>
            <?php foreach ($tasks as $task):?>
                <div class="tasks-item">
                    <div><p class="task-title"><?=$task->getDescription()?></p></div>
                    <div>
                        <a href="#" class="task-link delete">Delete</a>
                        <a href="#" class="task-link isdone">Готово</a>
                    </div>
                </div>
            <?php endforeach;?>
        <?php else :?>
            <div><p>Здесь ничего нет :(</p></div>
        <?php endif;?>
        <form method="post" class="task-form">
            <input type="text" name="task" placeholder="Задача" class="task-input">
            <input type="submit" value="Add Task" class="addtask">
        </form>
    </div>
</main>
</body>
</html>