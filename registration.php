
<?php
?>

<body>
  <div class="wrapper container">
    <header class="reg-header">
      <a class="reg-header__back" href="index.html"><img src="img/arrow-left.svg" alt="arrow"><span>Вернуться
          назад</span></a>
      <a href="mailto:info@prexit.ru" class="reg-header__email">info@prexit.ru</a>
    </header>
    <h1 class="register__title">Регистрация</h1>
    <form id="reg-form">
      <div class="register__form form col-lg-6 offset-lg-3">
        <input type="text" name="name" id="name" placeholder="Имя">
        <input type="text" name="email" id="email" placeholder="Email">
        <input type="tel" name="phone" id="phone" placeholder="Телефон">
        <input type="textarea" name="comment" id="comment" placeholder="Комментарий">
        <input type="submit" name="submit" id="submit" value="Зарегистрироваться">
      </div>
    </form>
  </div>
  <div class="popup">
    <div class="container">
      <a href="mailto:info@prexit.ru" class="popup__email text-right">info@prexit.ru</a>
      <h2 class="popup__title">Спасибо, Ваше место<br>забронировано!</h2>
      <button class="popup__to-main">На главную</button>
      <div class="popup__ball"></div>
    </div>
  </div>
</body>
