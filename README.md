<!DOCTYPE html>
<html lang="ru">
<body>

<h1>Laravel Shop Application</h1>
<p>Тестовое задание для программиста PHP.</p>

<h2>Оглавление</h2>
<ul>
  <li><a href="#opisanie">Описание</a></li>
  <li><a href="#ustanovka">Установка</a></li>
  <li><a href="#nastroyka">Настройка</a></li>
  <li><a href="#zapusk">Запуск</a></li>
</ul>

<h2 id="opisanie">Описание</h2>
<p>Тестовое задание для программиста PHP</p>

<h2 id="ustanovka">Установка</h2>
<ol>
  <li>Клонировать репозиторий:
    <pre><code>git clone &lt;url-репозитория&gt;
cd &lt;папка-проекта&gt;</code></pre>
  </li>
  <li>Установить зависимости:
    <pre><code>composer install</code></pre>
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
  <li>В <code>.env</code> укажите параметры базы данных (<code>DB_DATABASE</code>, <code>DB_USERNAME</code>, <code>DB_PASSWORD</code>)</li>
  <li>Другие настройки по необходимости</li>
</ul>

<h2 id="zapusk">Запуск</h2>
<p>Запустить локальный сервер:</p>
<pre><code>php artisan serve</code></pre>
<p>Открыть в браузере:</p>
<pre><code>http://localhost:8000</code></pre>


</body>
</html>
