<!DOCTYPE html>
<html lang="ru-RU">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Ваучер | Лаборатория Онлайн Бизнеса 2017</title>
    <!-- SEO-->
    <meta property="og:title" content="Лаборатория Онлайн Бизнеса 2017">
    <meta property="og:description" content="Главное Ежегодное Событие Для Предпринимателей по Новым Тактикам и Стратегиям Привлечения Клиентов из Интернет">
    <meta property="og:image" content="http://geniusmarketing.me/pic.png">
    <meta property="og:url" content="http://gmsummit.me/">
    <meta property="fb:admins" content="1510615147">
    <meta property="fb:app_id" content="473200492729081">
    <meta name='viewport' content='width=device-width, initial-scale=1, maximum-scale=1'>
    <link rel="stylesheet" href="css/libs.min.css">
    <link rel="stylesheet" href="css/main.min.css">
    <link rel="stylesheet" href="../css/edit.css">
    <link rel="stylesheet" href="css/media-vaucher.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- VK-script -->
    <script src="//vk.com/js/api/openapi.js?116"></script>
    <script>
      VK.init(
      {
        apiId: 3786941,
        onlyWidgets: true
      });
    </script>
    <header>
      <div class="logo"></div>
    </header>
  </head>
  <body>
    <!-- Google Tag Manager -->
    <noscript>
      <iframe src="//www.googletagmanager.com/ns.html?id=GTM-TRNP8W" height="0" width="0" style="display:none;visibility:hidden"></iframe>
    </noscript>
    <script>
      (function(w, d, s, l, i)
      {
        w[l] = w[l] || [];
        w[l].push(
        {
          'gtm.start': new Date().getTime(),
          event: 'gtm.js'
        });
        var f = d.getElementsByTagName(s)[0],
          j = d.createElement(s),
          dl = l != 'dataLayer' ? '&l=' + l : '';
        j.async = true;
        j.src = '//www.googletagmanager.com/gtm.js?id=' + i + dl;
        f.parentNode.insertBefore(j, f);
      })(window, document, 'script', 'dataLayer', 'GTM-TRNP8W');
    </script>
    <!-- End Google Tag Manager -->
    <?php include '../header.php'; ?>
    <!-- SECTION 1-->
    <section class="sec1">
      <div class="container">
        <p class="text">Ваш Ваучер (ПромоКод) Находится Здесь</p>
        <div class="video">
          <!--<a href="#modal-video" data-src="_N5Mdo1t-kM" data-toggle="modal" class="videolink modal-btn">
            <span class="play"></span>
          </a>-->
          <iframe  width="100%" height="100%" src="https://player.vimeo.com/video/191772779?autoplay=1&title=0&byline=0&portrait=0&badge=0" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
        </div>
        <p class="text1">Вы можете сохранить себе его на компьютер, но мы также продублируем Ваш промокод 2 по цене 1 Вам на Email в день открытия предпродаж (23 Января).</p>
      </div>
    </section>
    <section class="sec2">
      <div class="container">
        <a href="#tip" data-clipboard-target="#promo" class="vaucher btn-clipboard"></a><pre id="promo">LOB2FOR1</pre>
        <p class="text" style='font-family:Tahomabd; text-align:center; color:#fff; font-size:30px;'>Чтобы скопировать промокод в буфер обмена - нажмите на него</p>
      </div>
    </section>
    <!-- <section class="sec3">
      <div class="container">
        <p class="text">Как Быть в курсе и смотреть «за кулисами» на нашу подготовку к Лаборатории:</p>
        <div class="block block1">
          <p class="number inl">1</p>
          <div class="texts inl">
            <p class="text1">Подпишитесь на наш Telegram-канал</p>
            <p class="text2">Туда лично я пишу, как и что у нас происходит.
              <br>
              <br>Вы также сможете общаться и с другими участниками события.</p>
            <p class="text3">Как это сделать:
              <br>
              <br>Поставьте приложение Telegram на Ваш телефон — это как Viber или WhatsApp (если уже есть, здорово).</p>
            <div class="screen"></div>
          </div>
        </div>
        <div class="block block2">
          <p class="number inl">2</p>
          <div class="texts inl">
            <p class="text1">Убедитесь, что Вы добавились на наше мероприятие, чтобы в живом режиме быть в курсе всего.</p>
          </div>
        </div>
        <div class="block block3">
          <p class="number inl">3</p>
          <div class="texts inl">
            <p class="text1">Читайте меня в Instagram: OlesTimofeev</p>
          </div>
        </div>
      </div>
    </section> -->
    <div id="tip" class="modal-overlay">
      <div class="modal-content">
        <div class="close-button">
          <div class="one"></div>
          <div class="two"></div>
        </div>
        <p class="text">Промокод скопирован в буфер обмена</p>
      </div>
    </div>
    <?php include '../footer.php'; ?>
    <!-- END HIDDEN ELEMENTS (MODALS) -->
    <script src="js/libs.min.js"></script>
    <script src="js/common.min.js"></script>
    <script src="js/burger.js"></script>
    <!--Validation script -->
    <script src="https://cdn.rawgit.com/zenorocha/clipboard.js/master/dist/clipboard.min.js"></script>
    <script>
      new Clipboard('.btn-clipboard');
    </script>
    <script>
      function validate(formid, idexport)
      {
        var output = false;
        var name, email, phone;
        form = $(formid); // указать ID формы !
        form.find('input.name').focus();
        form.find('input.email').focus();
        form.find('input.phone1').focus();
        form.find('input.phone2').focus();
        form.find('input.phone3').focus();
        form.find('.subm1').focus();
        name = form.find('.name').val();
        email = form.find('.email').val();
        phone = form.find('.phone1').val() + form.find('.phone2').val() + form.find('.phone3').val();
        $(".last1").val(phone);
        exp = 'crm/' + idexport;
        // После того, как мы нажали кнопку "Отправить", делаем проверку,
        // если кол-во полей с классов .not_error равно 5(так как у нас всего 5 полей), то есть все поля заполнены верно,
        if ($('.not_error').length == 5)
        {
          // после успешной проверки отправляем форму и ставим куки
          $.ajax(
          {
            type: "POST",
            url: '../crm/export.php',
            async: false,
            data:
            {
              name: name,
              email: email,
              phone: phone,
              idexport: idexport
            },
            success: function()
            {
              setCookie('name', form.find('.name').val(), 365);
              setCookie('email', form.find('.email').val(), 365);
              setCookie('last1', form.find('.last1').val(), 365);
              setCookie('phone1', form.find('.phone1').val(), 365);
              setCookie('phone2', form.find('.phone2').val(), 365);
              setCookie('phone3', form.find('.phone3').val(), 365);
              output = true;
            }
          });
        }
        else
        {
          form.find('input.error').first().focus();
        }
        return output;
      };
    </script>
    <!-- END Validation script -->
    <!--auto country code srcipt -->
    <script>
      $(window).load(function()
      {
        jQuery("#user-city").text(ymaps.geolocation.city);
        jQuery("#user-region").text(ymaps.geolocation.region);
        jQuery("#user-country").text(ymaps.geolocation.country);
        if (getCookie("phone1"))
        {
          $(".phone1").val(getCookie("phone1"));
        }
        else if (ymaps.geolocation.country === 'Украина')
        {
          $('.phone1').val('+38');
        }
        else if (ymaps.geolocation.country === "Россия")
        {
          $('.phone1').val('+7');
        }
        else
        {
          $('.phone1').val('+37');
        }
      });
    </script>
    <script src="//api-maps.yandex.ru/2.0-stable/?load=package.standard&amp;lang=ru-RU"></script>
    <!-- end auto country code script -->
  </body>
</html>
