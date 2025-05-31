<!DOCTYPE html>
<html lang="ru">
<body>

<h1>Laravel Shop Application</h1>
<p>Простое приложение на Laravel для управления товарами и заказами.</p>

<h2>Оглавление</h2>
<ul>
  <li><a href="#opisanie">Описание</a></li>
  <li><a href="#ustanovka">Установка</a></li>
  <li><a href="#nastroyka">Настройка</a></li>
  <li><a href="#zapusk">Запуск</a></li>
  <li><a href="#funkcional">Функционал</a></li>
  <li><a href="#tehnologii">Технологии</a></li>
  <li><a href="#kontakty">Контакты</a></li>
</ul>

<h2 id="opisanie">Описание</h2>
<p>Это учебное приложение для практики с Laravel. Позволяет создавать, редактировать, удалять товары и заказы, просматривать списки и детали.</p>

<h2 id="ustanovka">Установка</h2>
<ol>
  <li>Клонировать репозиторий:
    <pre><code>git clone &lt;url-репозитория&gt;
cd &lt;папка-проекта&gt;</code></pre>
  </li>
  <li>Установить зависимости:
    <pre><code>composer install
npm install
npm run dev</code></pre>
  </li>
  <li>Создать <code>.env</code> файл, скопировав шаблон:
    <pre><code>cp .env.example .env</code></pre>
  </li>
  <li>Сгенерировать ключ приложения:
    <pre><code>php artisan key:generate</code></pre>
  </li>
  <li>Настроить подключение к базе данных в <code>.env</code></li>
  <li>Выполнить миграции и сиды:
    <pre><code>php artisan migrate --seed</code></pre>
  </li>
</ol>

<h2 id="nastroyka">Настройка</h2>
<ul>
  <li>В <code>.env</code> укажи параметры базы данных (<code>DB_DATABASE</code>, <code>DB_USERNAME</code>, <code>DB_PASSWORD</code>)</li>
  <li>Другие настройки по необходимости</li>
</ul>

<h2 id="zapusk">Запуск</h2>
<p>Запустить локальный сервер:</p>
<pre><code>php artisan serve</code></pre>
<p>Открыть в браузере:</p>
<pre><code>http://localhost:8000</code></pre>

<h2 id="funkcional">Функционал</h2>
<ul>
  <li>CRUD для товаров:
    <ul>
      <li>Добавление, редактирование, удаление</li>
      <li>Просмотр списка с названием, ценой, категорией</li>
      <li>Просмотр полной информации</li>
    </ul>
  </li>
  <li>CRUD для заказов:
    <ul>
      <li>Добавление, редактирование, удаление</li>
      <li>Просмотр списка заказов с датой, ФИО покупателя, статусом, итоговой ценой</li>
      <li>Просмотр полной информации о заказе</li>
    </ul>
  </li>
  <li>Связь товаров с категориями (Легкий, Хрупкий, Тяжелый)</li>
  <li>Валидация данных и обработка ошибок</li>
</ul>

<h2 id="tehnologii">Технологии</h2>
<ul>
  <li>PHP 8.x</li>
  <li>Laravel 9.x</li>
  <li>MySQL</li>
  <li>Blade (шаблоны)</li>
  <li>Bootstrap (если используешь)</li>
  <li>Docker (если используется)</li>
</ul>

<h2 id="kontakty">Контакты</h2>
<p>Если есть вопросы — пиши: <a href="mailto:your-email@example.com">your-email@example.com</a></p>

</body>
</html>
