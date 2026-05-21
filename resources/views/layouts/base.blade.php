<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="google-site-verification" content="YI1qHQLqb3Zb5gUi9zIJLM3tP2jW81Vu7pd_0GzUbOs" />

    <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-NW4654RH');
    </script>
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NW4654RH" height="0" width="0"
            style="display:none;visibility:hidden"></iframe></noscript>


    {!! seo($article ?? null) !!}

    @vite(['resources/css/app.css', 'resources/js/calc.js', 'resources/js/app.js'])
    <link rel="canonical" href="{{ url()->current() }}">
    <style>
        #loader {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: #ffffff;
            display: flex;
            justify-content: center;
            align-items: center;
            z-index: 1000000;
            transition: opacity 0.5s ease, visibility 0.5s;
        }

        .loader-spinner {
            position: relative;
            width: 100px;
            height: 100px;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .loader-spinner::before,
        .loader-spinner::after {
            content: '';
            position: absolute;
            border: 4px solid transparent;
            border-radius: 50%;
        }

        /* Зовнішнє синє кільце */
        .loader-spinner::before {
            width: 100px;
            height: 100px;
            border-top-color: #1e40af;
            /* blue-800 */
            border-bottom-color: #1e40af;
            animation: rotation 2s linear infinite;
        }

        /* Внутрішнє жовте кільце */
        .loader-spinner::after {
            width: 75px;
            height: 75px;
            border-left-color: #fbbf24;
            /* amber-400 */
            border-right-color: #fbbf24;
            animation: rotation 1.5s linear reverse infinite;
        }

        .loader-icon {
            color: #1e40af;
            animation: pulse 2s ease-in-out infinite;
        }

        @keyframes rotation {
            0% {
                transform: rotate(0deg);
            }

            100% {
                transform: rotate(360deg);
            }
        }

        @keyframes pulse {

            0%,
            100% {
                transform: scale(1);
                opacity: 1;
            }

            50% {
                transform: scale(1.15);
                opacity: 0.7;
            }
        }

        #loader.hidden {
            opacity: 0;
            visibility: hidden;
        }

        html,
        body {
            overflow-x: hidden;
            max-width: 100vw;
        }
    </style>
</head>
<script async src="https://www.googletagmanager.com/gtag/js?id=G-7WSPMVQ2DB"></script>
<script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'G-7WSPMVQ2DB');
</script>

<body>
    <div id="loader">
        <div class="loader-spinner">
            <x-lucide-settings class="loader-icon size-10" />
        </div>
    </div>
    @include('partials.header')

    <main>
        @yield('content')

        <x-section class="mb-0 bg-gray-200">
            <livewire:subscribe />
        </x-section>
    </main>

    @include('partials.footer')

    <script>
        if (typeof hideLoader === 'undefined') {
            window.hideLoader = () => {
                const loader = document.getElementById('loader');
                if (loader) loader.classList.add('hidden');
            };
        }

        if (typeof showLoader === 'undefined') {
            window.showLoader = () => {
                const loader = document.getElementById('loader');
                if (loader) loader.classList.remove('hidden');
            };
        }

        window.addEventListener('load', hideLoader);

        document.addEventListener('livewire:navigating', showLoader);
        document.addEventListener('livewire:navigated', hideLoader);
    </script>
</body>

</html>
