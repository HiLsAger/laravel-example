<h1 style="text-align: center">Инструкция</h1>
<h2 style="text-align: center">Запуск приложения</h2>
<p>Для локального запуска приложения необходимо:</p>
<ol>
  <li>
    Необходимо подтянуть зависимости через composer:<br />
    <code>composer update</code>
  </li>
  <li>
    Необходимо подтянуть зависимости через npm:<br />
    <code>npm update</code>
  </li>
  <li>Создать копию файла .env.example и переименовать в .env</li>
  <li>В созданном файле .env необходимо указать базу данных</li>
  <li>
    После подключении бд к проекту необходимо мигрировать базу данных, для этого
    используйте команду:<br />
    <code>php artisane migrate</code>
  </li>
  <li>
    Для локального запуска приложения используйте команду:<br />
    <code> # Запуск laravel: php artisan serve # Запуск vue: npm run dev </code>
  </li>
</ol>

<h2 style="text-align: center">Именование прав доступа(permissions)</h2>
<h3 style="text-align: center">Имя прав доступа(ПД)</h3>
<p>
  Каждое имя <b>ПД</b> составляется из 2х элементов, рассмотрим на примере
  s_home. В этом примере видно что в начале указывается буква, а в конце слово.
  Первая буква в названии отображает род деятельности <b>ПД</b>, s как в нашем
  случае расшифровывается как show, это значит что правило используется для
  предоставления права показа страницы пользователю. После нижнего подчёркивания
  видно слово home как не трудно догадаться, оно обозначает на какой элемент
  приложения оно ссылается в данном случае на домашнюю страницы.
</p>
<table style="border: 1px solid; border-collapse: collapse;">
  <thead>
    <tr>
      <td style="border: 1px solid; text-align: center; ">Название</td style="border: 1px solid">
      <td style="border: 1px solid; text-align: center;">Обозначение</td style="border: 1px solid">
    </tr>
  </thead>
  <tbody>
    <tr>
      <td colspan="2" style="text-align: center;">Род деятельности</td style="border: 1px solid">
    </tr>
    <tr>
      <td style="border: 1px solid">s (show)</td style="border: 1px solid">
      <td style="border: 1px solid">
        Показать, отобразить элемент или страницу, правила с данным суффиксом
        представляют возможность увидеть содержимое.
      </td style="border: 1px solid">
    </tr>
    <tr>
      <td style="border: 1px solid">e (edit)</td style="border: 1px solid">
      <td style="border: 1px solid">
        Изменить настройки или содержимое элемента, или страницы, правила с
        данным суффиксом представляют возможность изменения содержимого.
      </td style="border: 1px solid">
    </tr>
    <tr>
      <td style="border: 1px solid">d (delete)</td style="border: 1px solid">
      <td style="border: 1px solid">
        Удалить элемент или страницу, правила с данным суффиксом представляют
        возможность удалить содержимое или целый отдельный элемент.
      </td style="border: 1px solid">
    </tr>
    <tr>
      <td colspan="2" style="text-align: center;">Существующие имена</td style="border: 1px solid">
    </tr>
    <tr>
      <td style="border: 1px solid">home</td style="border: 1px solid">
      <td style="border: 1px solid">Взаимодействие с домашней страницей</td style="border: 1px solid">
    </tr>
    <tr>
      <td style="border: 1px solid">group</td style="border: 1px solid">
      <td style="border: 1px solid">Взаимодействие с домашней страницей</td style="border: 1px solid">
    </tr>
    <tr>
      <td style="border: 1px solid">group-property</td style="border: 1px solid">
      <td style="border: 1px solid">Взаимодействие со свойствами группы</td style="border: 1px solid">
    </tr>
  </tbody>
</table>
