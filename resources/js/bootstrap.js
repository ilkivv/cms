window._ = require('lodash');

/**
 * Мы загрузим jQuery и плагин Bootstrap jQuery, который обеспечивает поддержку
 * для функций начальной загрузки на основе JavaScript, таких как модалы и вкладки. Этот
 * код может быть изменен в соответствии с конкретными потребностями вашего приложения.
 */

try {
    window.Popper = require('popper.js').default;
    window.$ = window.jQuery = require('jquery');

    require('bootstrap');
} catch (e) {}

/**
 * Мы загружаем библиотеку Аксиос http, которая позволяет легко оформить запросы
 * в наш бэк-энд Laravel. Эта библиотека автоматически обрабатывает отправку
 * Токен CSRF в качестве заголовка, основанного на значении файла cookie токена "XSRF".
 */

window.axios = require('axios');

window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

/**
 * Echo предоставляет выразительный API для подписки на каналы и прослушивания
 * для событий, транслируемых Laravel. Эхо и вещание событий
 * позволяет вашей команде легко создавать надежные веб-приложения в реальном времени.
 */

// import Echo from 'laravel-echo';

// window.Pusher = require('pusher-js');

// window.Echo = new Echo({
//     broadcaster: 'pusher',
//     key: process.env.MIX_PUSHER_APP_KEY,
//     cluster: process.env.MIX_PUSHER_APP_CLUSTER,
//     forceTLS: true
// });
