# CLAUDE.md

This file provides guidance to Claude Code (claude.ai/code) when working with code in this repository.

## Что это

Репозиторий — это **сама тема WordPress** для сайта trainersforgames.com (каталог трейнеров
к играм). Корень репозитория = корень темы: файлы лежат ровно там, где их ждёт WordPress
(`wp-content/themes/<тема>/`). Стек: PHP-шаблоны WordPress, HTML5, CSS3, именование классов
по BEM. Ядро WordPress, плагины, аплоады и база в репозиторий не входят.

## Сборка, тесты, запуск

Их нет — и это осознанно. Нет `package.json`, `composer.json`, сборщика, линтера, тестов и CI.
Файлы отдаются браузеру как есть. Не добавляй шаг сборки и не предлагай команды, которых
в репозитории не существует.

Проверка изменений — только чтением кода: PHP в окружении агентов не установлен, поднять
сайт или отрендерить шаблон нельзя.

## Деплой

Автодеплоя нет. Результат работы — коммит и пуш в `master`. `.git-ftp-ignore` остался от
выкладки через `git-ftp` и перечисляет то, что не должно попасть на хостинг (`.git`,
`.github`, `readme.md`).

## Архитектура

Плоский набор стандартных шаблонов WordPress без `template-parts`, без своих классов
и неймспейсов:

- `index.php` — лента постов + пагинация через `paginate_links()`.
- `single.php` — пост, блок ссылки на сейв, подключение `comments.php`.
- `header.php` / `footer.php` / `sidebar.php` — общие части, подключаются через
  `get_header()` / `get_footer()` / `get_sidebar()`.
- `404.php` — **самостоятельная страница**, см. ниже.
- `functions.php` — только хуки и фильтры.
- `style.css` — исключительно WordPress-заголовок темы (Theme Name и т.п.). **Стилей в нём нет.**

### Где живут стили

Весь CSS сайта — один инлайновый `<style>` внутри `header.php`. Отдельных css-файлов и
`wp_enqueue_style()` для темы нет; правки внешнего вида делаются именно там. Палитра задана
CSS-переменными в `:root` (`--bg-main`, `--link`, `--text-main`, `--accent` и т.д.), тёмные
значения переопределяются в `@media (prefers-color-scheme: dark)` и в `:root[data-theme-name='dark']`.
Брейкпоинты — `min-width: 576px` и `min-width: 992px`, mobile-first.

### Переключатель темы (light / dark / auto)

Логика размазана по трём местам, менять надо согласованно:

1. `header.php`, инлайн-скрипт в `<head>` — читает `localStorage['theme-name']` (по умолчанию
   `auto`) и ставит атрибут `data-theme-name` на `<html>` до отрисовки, чтобы не было мигания.
2. `header.php`, CSS — `:root[data-theme-name='dark']` и `:root:not([data-theme-name='light'])`
   внутри `prefers-color-scheme: dark`.
3. `footer.php` — кнопки `.theme-switcher` с `data-theme-name`, делегированный обработчик клика,
   запись в `localStorage` и простановка `aria-current`.

### 404.php — намеренный дубль

`404.php` не использует `get_header()`/`get_footer()`: у него собственные `<head>`, шапка,
счётчик аналитики и **свой устаревший CSS** (хардкод цветов вместо переменных, нет тёмной темы,
классы шапки `search-form__input` / `search-form__button` вместо общих `input_type_search` /
`submit_type_search`). Правка стилей в `header.php` на 404-ю не распространяется — при изменении
шапки или палитры проверяй оба файла.

### Связь с savesforgames.com

Сайт-компаньон, ссылки на него зашиты в разметку:
- `single.php` читает post meta с ключом `'1'` — если оно задано, выводит ссылку на сейв
  `//savesforgames.com<meta>`. Ключ именно `'1'`, это не опечатка.
- `sidebar.php` — захардкоженный список «Most Popular Savegames»; блок обёрнут в `<!--noindex-->`,
  условие `if( !$user_ID )` закомментировано.

### functions.php

Плоский список независимых сниппетов, каждый со своим комментарием: чистка `wp_head`
(RSD, generator, feeds, oembed/REST, emoji, resource hints), собственный `rel="canonical"`
(`rel_canonical_nabtron`), метаданные для AMP-плагина, снятие стилей Post Views Counter
и dashicons, перенос jQuery в футер, разрешение загрузки `.rar`, правки формы комментариев
(убраны поля url и email, поле comment сдвинуто вниз, дата в формате «N ago»).

Имена функций разнородные и без префикса темы (`wpse_173601_enqueue_scripts`,
`wpb_move_comment_field_to_bottom`, `xyz_amp_modify_json_metadata`) — это следы источников,
откуда сниппеты взяты. Новые функции добавляй в том же стиле: одна задача, комментарий сверху,
`add_action`/`add_filter` рядом с определением. Функция `remove_admin_bar()` объявлена,
но ни на что не повешена.

## Конвенции разметки

- BEM в записи Яндекса: блок `header`, элемент `header__content`, модификатор через одно
  подчёркивание — `link_size_big`, `link_color_white`, `footer__content_align_right`,
  `input_type_search`.
- Часть классов приходит от WordPress и меняться не может (`comment-list`, `page-numbers`,
  `logged-in-as`, `post-views-count`) — они стилизуются как есть, под BEM не переименовываются.
- Шаблоны используют HTML5-теги с `role` (`role="banner"`, `role="main"`, `role="contentinfo"`,
  `role="search"`), у иконок и полей проставлены `aria-label` / `aria-hidden` — при правках
  сохраняй.
- Внешние ссылки — `target="_blank" rel="nofollow noopener"`.
- Отступы в PHP-шаблонах: пробелы (2 в `index.php`/`single.php`/`footer.php`), в `functions.php`
  и `comments.php` — табы. Следуй файлу, который правишь.
- В `comments.php` текстовый домен переводов — `'twentyseventeen'` (наследие); тема свой домен
  не регистрирует и `load_theme_textdomain()` не вызывает.

## Язык

Комментарии в коде и сообщения коммитов — на русском. Текст на страницах — на английском.
