<div class="nav">
    <ul class="nav-list">
        <li class="nav-item"><a class="nav-link" href="/">Главная</a></li>
        <?php if (!$username) : ?>
            <li class="nav-item"><a class="nav-link" href="/?controller=security">Авторизации</a></li>
            <li class="nav-item"><a class="nav-link" href="/?controller=signup">Регистрация</a></li>
        <?php endif;?>
        <?php if (!!$username) : ?>
            <li class="nav-item"><a class="nav-link" href="/?controller=tasks">Задачи</a></li>
        <?php endif;?>
    </ul>
</div>
<div class="greetings">
    <?php if ($username !== null) : ?>
        <p>Рады вас приветствовать, <?= $username ?>. <a href="/?controller=security&action=logout">[Выход]</a></p>
    <?php endif;?>
</div>    
    