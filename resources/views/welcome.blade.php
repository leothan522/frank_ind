<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name') }}</title>

    <!-- Favicons -->
    <link rel="apple-touch-icon" sizes="57x57" href="{{ asset('favicons/apple-icon-57x57.png') }}">
    <link rel="apple-touch-icon" sizes="60x60" href="{{ asset('favicons/apple-icon-60x60.png') }}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('favicons/apple-icon-72x72.png') }}">
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('favicons/apple-icon-76x76.png') }}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('favicons/apple-icon-114x114.png') }}">
    <link rel="apple-touch-icon" sizes="120x120" href="{{ asset('favicons/apple-icon-120x120.png') }}">
    <link rel="apple-touch-icon" sizes="144x144" href="{{ asset('favicons/apple-icon-144x144.png') }}">
    <link rel="apple-touch-icon" sizes="152x152" href="{{ asset('favicons/apple-icon-152x152.png') }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('favicons/apple-icon-180x180.png') }}">
    <link rel="icon" type="image/png" sizes="192x192" href="{{ asset('favicons/android-icon-192x192.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('favicons/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="96x96" href="{{ asset('favicons/favicon-96x96.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('favicons/favicon-16x16.png') }}">
    <link rel="manifest" href="{{ asset('favicons/manifest.json') }}">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="{{ asset('favicons/ms-icon-144x144.png') }}">
    <meta name="theme-color" content="#ffffff">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet"/>

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <style>
        /* ! tailwindcss v3.2.4 | MIT License | https://tailwindcss.com */
        *, ::after, ::before {
            box-sizing: border-box;
            border-width: 0;
            border-style: solid;
            border-color: #e5e7eb
        }

        ::after, ::before {
            --tw-content: ''
        }

        html {
            line-height: 1.5;
            -webkit-text-size-adjust: 100%;
            -moz-tab-size: 4;
            tab-size: 4;
            font-family: Figtree, sans-serif;
            font-feature-settings: normal
        }

        body {
            margin: 0;
            line-height: inherit
        }

        hr {
            height: 0;
            color: inherit;
            border-top-width: 1px
        }

        abbr:where([title]) {
            -webkit-text-decoration: underline dotted;
            text-decoration: underline dotted
        }

        h1, h2, h3, h4, h5, h6 {
            font-size: inherit;
            font-weight: inherit
        }

        a {
            color: inherit;
            text-decoration: inherit
        }

        b, strong {
            font-weight: bolder
        }

        code, kbd, pre, samp {
            font-family: ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;
            font-size: 1em
        }

        small {
            font-size: 80%
        }

        sub, sup {
            font-size: 75%;
            line-height: 0;
            position: relative;
            vertical-align: baseline
        }

        sub {
            bottom: -.25em
        }

        sup {
            top: -.5em
        }

        table {
            text-indent: 0;
            border-color: inherit;
            border-collapse: collapse
        }

        button, input, optgroup, select, textarea {
            font-family: inherit;
            font-size: 100%;
            font-weight: inherit;
            line-height: inherit;
            color: inherit;
            margin: 0;
            padding: 0
        }

        button, select {
            text-transform: none
        }

        [type=button], [type=reset], [type=submit], button {
            -webkit-appearance: button;
            background-color: transparent;
            background-image: none
        }

        :-moz-focusring {
            outline: auto
        }

        :-moz-ui-invalid {
            box-shadow: none
        }

        progress {
            vertical-align: baseline
        }

        ::-webkit-inner-spin-button, ::-webkit-outer-spin-button {
            height: auto
        }

        [type=search] {
            -webkit-appearance: textfield;
            outline-offset: -2px
        }

        ::-webkit-search-decoration {
            -webkit-appearance: none
        }

        ::-webkit-file-upload-button {
            -webkit-appearance: button;
            font: inherit
        }

        summary {
            display: list-item
        }

        blockquote, dd, dl, figure, h1, h2, h3, h4, h5, h6, hr, p, pre {
            margin: 0
        }

        fieldset {
            margin: 0;
            padding: 0
        }

        legend {
            padding: 0
        }

        menu, ol, ul {
            list-style: none;
            margin: 0;
            padding: 0
        }

        textarea {
            resize: vertical
        }

        input::placeholder, textarea::placeholder {
            opacity: 1;
            color: #9ca3af
        }

        [role=button], button {
            cursor: pointer
        }

        :disabled {
            cursor: default
        }

        audio, canvas, embed, iframe, img, object, svg, video {
            display: block;
            vertical-align: middle
        }

        img, video {
            max-width: 100%;
            height: auto
        }

        [hidden] {
            display: none
        }

        *, ::before, ::after {
            --tw-border-spacing-x: 0;
            --tw-border-spacing-y: 0;
            --tw-translate-x: 0;
            --tw-translate-y: 0;
            --tw-rotate: 0;
            --tw-skew-x: 0;
            --tw-skew-y: 0;
            --tw-scale-x: 1;
            --tw-scale-y: 1;
            --tw-pan-x: ;
            --tw-pan-y: ;
            --tw-pinch-zoom: ;
            --tw-scroll-snap-strictness: proximity;
            --tw-ordinal: ;
            --tw-slashed-zero: ;
            --tw-numeric-figure: ;
            --tw-numeric-spacing: ;
            --tw-numeric-fraction: ;
            --tw-ring-inset: ;
            --tw-ring-offset-width: 0px;
            --tw-ring-offset-color: #fff;
            --tw-ring-color: rgb(59 130 246 / 0.5);
            --tw-ring-offset-shadow: 0 0 #0000;
            --tw-ring-shadow: 0 0 #0000;
            --tw-shadow: 0 0 #0000;
            --tw-shadow-colored: 0 0 #0000;
            --tw-blur: ;
            --tw-brightness: ;
            --tw-contrast: ;
            --tw-grayscale: ;
            --tw-hue-rotate: ;
            --tw-invert: ;
            --tw-saturate: ;
            --tw-sepia: ;
            --tw-drop-shadow: ;
            --tw-backdrop-blur: ;
            --tw-backdrop-brightness: ;
            --tw-backdrop-contrast: ;
            --tw-backdrop-grayscale: ;
            --tw-backdrop-hue-rotate: ;
            --tw-backdrop-invert: ;
            --tw-backdrop-opacity: ;
            --tw-backdrop-saturate: ;
            --tw-backdrop-sepia:
        }

        ::-webkit-backdrop {
            --tw-border-spacing-x: 0;
            --tw-border-spacing-y: 0;
            --tw-translate-x: 0;
            --tw-translate-y: 0;
            --tw-rotate: 0;
            --tw-skew-x: 0;
            --tw-skew-y: 0;
            --tw-scale-x: 1;
            --tw-scale-y: 1;
            --tw-pan-x: ;
            --tw-pan-y: ;
            --tw-pinch-zoom: ;
            --tw-scroll-snap-strictness: proximity;
            --tw-ordinal: ;
            --tw-slashed-zero: ;
            --tw-numeric-figure: ;
            --tw-numeric-spacing: ;
            --tw-numeric-fraction: ;
            --tw-ring-inset: ;
            --tw-ring-offset-width: 0px;
            --tw-ring-offset-color: #fff;
            --tw-ring-color: rgb(59 130 246 / 0.5);
            --tw-ring-offset-shadow: 0 0 #0000;
            --tw-ring-shadow: 0 0 #0000;
            --tw-shadow: 0 0 #0000;
            --tw-shadow-colored: 0 0 #0000;
            --tw-blur: ;
            --tw-brightness: ;
            --tw-contrast: ;
            --tw-grayscale: ;
            --tw-hue-rotate: ;
            --tw-invert: ;
            --tw-saturate: ;
            --tw-sepia: ;
            --tw-drop-shadow: ;
            --tw-backdrop-blur: ;
            --tw-backdrop-brightness: ;
            --tw-backdrop-contrast: ;
            --tw-backdrop-grayscale: ;
            --tw-backdrop-hue-rotate: ;
            --tw-backdrop-invert: ;
            --tw-backdrop-opacity: ;
            --tw-backdrop-saturate: ;
            --tw-backdrop-sepia:
        }

        ::backdrop {
            --tw-border-spacing-x: 0;
            --tw-border-spacing-y: 0;
            --tw-translate-x: 0;
            --tw-translate-y: 0;
            --tw-rotate: 0;
            --tw-skew-x: 0;
            --tw-skew-y: 0;
            --tw-scale-x: 1;
            --tw-scale-y: 1;
            --tw-pan-x: ;
            --tw-pan-y: ;
            --tw-pinch-zoom: ;
            --tw-scroll-snap-strictness: proximity;
            --tw-ordinal: ;
            --tw-slashed-zero: ;
            --tw-numeric-figure: ;
            --tw-numeric-spacing: ;
            --tw-numeric-fraction: ;
            --tw-ring-inset: ;
            --tw-ring-offset-width: 0px;
            --tw-ring-offset-color: #fff;
            --tw-ring-color: rgb(59 130 246 / 0.5);
            --tw-ring-offset-shadow: 0 0 #0000;
            --tw-ring-shadow: 0 0 #0000;
            --tw-shadow: 0 0 #0000;
            --tw-shadow-colored: 0 0 #0000;
            --tw-blur: ;
            --tw-brightness: ;
            --tw-contrast: ;
            --tw-grayscale: ;
            --tw-hue-rotate: ;
            --tw-invert: ;
            --tw-saturate: ;
            --tw-sepia: ;
            --tw-drop-shadow: ;
            --tw-backdrop-blur: ;
            --tw-backdrop-brightness: ;
            --tw-backdrop-contrast: ;
            --tw-backdrop-grayscale: ;
            --tw-backdrop-hue-rotate: ;
            --tw-backdrop-invert: ;
            --tw-backdrop-opacity: ;
            --tw-backdrop-saturate: ;
            --tw-backdrop-sepia:
        }

        .relative {
            position: relative
        }

        .mx-auto {
            margin-left: auto;
            margin-right: auto
        }

        .mx-6 {
            margin-left: 1.5rem;
            margin-right: 1.5rem
        }

        .ml-4 {
            margin-left: 1rem
        }

        .mt-16 {
            margin-top: 4rem
        }

        .mt-6 {
            margin-top: 1.5rem
        }

        .mt-4 {
            margin-top: 1rem
        }

        .-mt-px {
            margin-top: -1px
        }

        .mr-1 {
            margin-right: 0.25rem
        }

        .flex {
            display: flex
        }

        .inline-flex {
            display: inline-flex
        }

        .grid {
            display: grid
        }

        .h-16 {
            height: 4rem
        }

        .h-7 {
            height: 1.75rem
        }

        .h-6 {
            height: 1.5rem
        }

        .h-5 {
            height: 1.25rem
        }

        .min-h-screen {
            min-height: 100vh
        }

        .w-auto {
            width: auto
        }

        .w-16 {
            width: 4rem
        }

        .w-7 {
            width: 1.75rem
        }

        .w-6 {
            width: 1.5rem
        }

        .w-5 {
            width: 1.25rem
        }

        .max-w-7xl {
            max-width: 80rem
        }

        .shrink-0 {
            flex-shrink: 0
        }

        .scale-100 {
            --tw-scale-x: 1;
            --tw-scale-y: 1;
            transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))
        }

        .grid-cols-1 {
            grid-template-columns:repeat(1, minmax(0, 1fr))
        }

        .items-center {
            align-items: center
        }

        .justify-center {
            justify-content: center
        }

        .gap-6 {
            gap: 1.5rem
        }

        .gap-4 {
            gap: 1rem
        }

        .self-center {
            align-self: center
        }

        .rounded-lg {
            border-radius: 0.5rem
        }

        .rounded-full {
            border-radius: 9999px
        }

        .bg-gray-100 {
            --tw-bg-opacity: 1;
            background-color: rgb(243 244 246 / var(--tw-bg-opacity))
        }

        .bg-white {
            --tw-bg-opacity: 1;
            background-color: rgb(255 255 255 / var(--tw-bg-opacity))
        }

        .bg-red-50 {
            --tw-bg-opacity: 1;
            background-color: rgb(254 242 242 / var(--tw-bg-opacity))
        }

        .bg-dots-darker {
            background-image: url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(0,0,0,0.07)'/%3E%3C/svg%3E")
        }

        .from-gray-700\/50 {
            --tw-gradient-from: rgb(55 65 81 / 0.5);
            --tw-gradient-to: rgb(55 65 81 / 0);
            --tw-gradient-stops: var(--tw-gradient-from), var(--tw-gradient-to)
        }

        .via-transparent {
            --tw-gradient-to: rgb(0 0 0 / 0);
            --tw-gradient-stops: var(--tw-gradient-from), transparent, var(--tw-gradient-to)
        }

        .bg-center {
            background-position: center
        }

        .stroke-red-500 {
            stroke: #ef4444
        }

        .stroke-gray-400 {
            stroke: #9ca3af
        }

        .p-6 {
            padding: 1.5rem
        }

        .px-6 {
            padding-left: 1.5rem;
            padding-right: 1.5rem
        }

        .text-center {
            text-align: center
        }

        .text-right {
            text-align: right
        }

        .text-xl {
            font-size: 1.25rem;
            line-height: 1.75rem
        }

        .text-sm {
            font-size: 0.875rem;
            line-height: 1.25rem
        }

        .font-semibold {
            font-weight: 600
        }

        .leading-relaxed {
            line-height: 1.625
        }

        .text-gray-600 {
            --tw-text-opacity: 1;
            color: rgb(75 85 99 / var(--tw-text-opacity))
        }

        .text-gray-900 {
            --tw-text-opacity: 1;
            color: rgb(17 24 39 / var(--tw-text-opacity))
        }

        .text-gray-500 {
            --tw-text-opacity: 1;
            color: rgb(107 114 128 / var(--tw-text-opacity))
        }

        .underline {
            -webkit-text-decoration-line: underline;
            text-decoration-line: underline
        }

        .antialiased {
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale
        }

        .shadow-2xl {
            --tw-shadow: 0 25px 50px -12px rgb(0 0 0 / 0.25);
            --tw-shadow-colored: 0 25px 50px -12px var(--tw-shadow-color);
            box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)
        }

        .shadow-gray-500\/20 {
            --tw-shadow-color: rgb(107 114 128 / 0.2);
            --tw-shadow: var(--tw-shadow-colored)
        }

        .transition-all {
            transition-property: all;
            transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
            transition-duration: 150ms
        }

        .selection\:bg-red-500 *::selection {
            --tw-bg-opacity: 1;
            background-color: rgb(239 68 68 / var(--tw-bg-opacity))
        }

        .selection\:text-white *::selection {
            --tw-text-opacity: 1;
            color: rgb(255 255 255 / var(--tw-text-opacity))
        }

        .selection\:bg-red-500::selection {
            --tw-bg-opacity: 1;
            background-color: rgb(239 68 68 / var(--tw-bg-opacity))
        }

        .selection\:text-white::selection {
            --tw-text-opacity: 1;
            color: rgb(255 255 255 / var(--tw-text-opacity))
        }

        .hover\:text-gray-900:hover {
            --tw-text-opacity: 1;
            color: rgb(17 24 39 / var(--tw-text-opacity))
        }

        .hover\:text-gray-700:hover {
            --tw-text-opacity: 1;
            color: rgb(55 65 81 / var(--tw-text-opacity))
        }

        .focus\:rounded-sm:focus {
            border-radius: 0.125rem
        }

        .focus\:outline:focus {
            outline-style: solid
        }

        .focus\:outline-2:focus {
            outline-width: 2px
        }

        .focus\:outline-red-500:focus {
            outline-color: #ef4444
        }

        .group:hover .group-hover\:stroke-gray-600 {
            stroke: #4b5563
        }

        @media (prefers-reduced-motion: no-preference) {
            .motion-safe\:hover\:scale-\[1\.01\]:hover {
                --tw-scale-x: 1.01;
                --tw-scale-y: 1.01;
                transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))
            }
        }

        @media (prefers-color-scheme: dark) {
            .dark\:bg-gray-900 {
                --tw-bg-opacity: 1;
                background-color: rgb(17 24 39 / var(--tw-bg-opacity))
            }

            .dark\:bg-gray-800\/50 {
                background-color: rgb(31 41 55 / 0.5)
            }

            .dark\:bg-red-800\/20 {
                background-color: rgb(153 27 27 / 0.2)
            }

            .dark\:bg-dots-lighter {
                background-image: url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(255,255,255,0.07)'/%3E%3C/svg%3E")
            }

            .dark\:bg-gradient-to-bl {
                background-image: linear-gradient(to bottom left, var(--tw-gradient-stops))
            }

            .dark\:stroke-gray-600 {
                stroke: #4b5563
            }

            .dark\:text-gray-400 {
                --tw-text-opacity: 1;
                color: rgb(156 163 175 / var(--tw-text-opacity))
            }

            .dark\:text-white {
                --tw-text-opacity: 1;
                color: rgb(255 255 255 / var(--tw-text-opacity))
            }

            .dark\:shadow-none {
                --tw-shadow: 0 0 #0000;
                --tw-shadow-colored: 0 0 #0000;
                box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)
            }

            .dark\:ring-1 {
                --tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);
                --tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color);
                box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000)
            }

            .dark\:ring-inset {
                --tw-ring-inset: inset
            }

            .dark\:ring-white\/5 {
                --tw-ring-color: rgb(255 255 255 / 0.05)
            }

            .dark\:hover\:text-white:hover {
                --tw-text-opacity: 1;
                color: rgb(255 255 255 / var(--tw-text-opacity))
            }

            .group:hover .dark\:group-hover\:stroke-gray-400 {
                stroke: #9ca3af
            }
        }

        @media (min-width: 640px) {
            .sm\:fixed {
                position: fixed
            }

            .sm\:top-0 {
                top: 0px
            }

            .sm\:right-0 {
                right: 0px
            }

            .sm\:ml-0 {
                margin-left: 0px
            }

            .sm\:flex {
                display: flex
            }

            .sm\:items-center {
                align-items: center
            }

            .sm\:justify-center {
                justify-content: center
            }

            .sm\:justify-between {
                justify-content: space-between
            }

            .sm\:text-left {
                text-align: left
            }

            .sm\:text-right {
                text-align: right
            }
        }

        @media (min-width: 768px) {
            .md\:grid-cols-2 {
                grid-template-columns:repeat(2, minmax(0, 1fr))
            }
        }

        @media (min-width: 1024px) {
            .lg\:gap-8 {
                gap: 2rem
            }

            .lg\:p-8 {
                padding: 2rem
            }
        }
    </style>
    @livewireStyles
</head>
<body class="antialiased">
<div class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 selection:bg-red-500 selection:text-white">
    @if (Route::has('login'))
        <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right">
            @auth
                <a href="{{ url('/web') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Inicio</a>
                <a href="{{ route('web.perfil') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">{{ __('Profile') }}</a>
                {{--<a href="{{ route('chat.directo') }}"
                   class="ml-4 font-semibold text-gray-600 hover:text-gray-900 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500"
                   target="_blank">Chat Directo</a>--}}
                @if(auth()->user()->role)
                    <a href="{{ url('/dashboard') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</a>
                @endif
            @else
                <a href="{{ route('login') }}"
                   class="font-semibold text-gray-600 hover:text-gray-900 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500 mr-2">{{ __('Log in') }}</a>

                @if (Route::has('register'))
                    <a href="{{ route('register') }}"
                       class="ml-4 font-semibold text-gray-600 hover:text-gray-900 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">{{ __('Register') }}</a>
                @endif
            @endauth
        </div>
    @endif

    <div class="max-w-7xl mx-auto p-6 lg:p-8">
        <div class="flex justify-center">
            <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="250px" height="300px" viewBox="0 0 250 300" enable-background="new 0 0 250 300" xml:space="preserve">  <image id="image0" width="250" height="300" x="0" y="0"
                                                                                                                                                                                                                                                               href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAPoAAAEsCAMAAADdIl6JAAAABGdBTUEAALGPC/xhBQAAACBjSFJN
AAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAAC+lBMVEVHcEz9/f3+/v79/f3+
/v79/f3+/v77+/v8/Pz9/f39/f3+/v7+/v79/f35+fn+/v79/f3+/v7+/v79/f3+/v7+/v7+/v7+
/v7+/v79/f3+/v78/Pz+/v7+/v7+/v79/f3+/v78/Pz+/v7+/v79/f39/f3+/v7//////v7+///5
6+v78/PsZWnqT1P9/fz14eH8+PjsW2DhDRP1qazoQkf25ubvdHj619jzl5rwf4PiExnjGyPoLjTj
HiTkJizjGB7nNjv4yMr0nqHmLiHnOR7xjpL2t7nhECbubhXzkBDtZhf1nw3qUBviFyXlJSL5vwjp
RB33rwrtXxj92QP7zQX/8wDweRTgBijxgxLsWBn//wD+5AH/7QD/+AD/8AD//ADqHCPr8+/p6OjN
hITPHyT3+vl+fnknJiUpKCcrKiknHBs9PDvg399zc3IgHh2DhoVGRUTU09O4uLcSERAbGhkjIiHG
xcSen52mpqU0MzKWl5NVVVL//v9hYWCPjYrx9fTOzs1paGevr66zsbAhICt8dRm1qg7IugomKSne
zwY6OCbx4AJGQySYjxNcUTKz18ji8OvI4teq0sAAdkKPxK0KfEna7OUAbzgAYyg3lGs/mXIAbDR0
tZiXyLMAcjwBekTR590ahFUBdT9JnnkRgU+93M8kil1TpIFrr5EtKSSgzbktj2Rfqol9uqABZy4m
LToBRrWHv6cHQaEASMICSL0AQ7kMPo4AR7ocWsIWN22bt+QARbmFp94fMU8ANrQ4cMoAPrdtlde0
yetahtLM2vHt/vvnw8NdhWZ6QC3Ke3vaHiMQcUEwZDzyHCT9ER6+JyaZOC1sSjIbaj1JVjXcbW3C
amq/hHzGOTcyWzXsDhf1DRivODfBYmKrMS2bZ1iKPy8qeE59aFJKdVTVlZXBmJCYIyS4UVEeKyl1
JSanJSWFJCVkJidIKCjw29uqKyuUSDnYn5/cqKi9W1vHc3PfsbG1SUgASjzkvLyiGxuxPz/t1NTQ
jIzpycmeEREsBTjFAAAAJ3RSTlMAT5vEokLPEi0eSbqqYwf53fLran/klLLJdldbj9W/VIU6jIdc
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" />
</svg>


        </div>

        <div class="text-center texto_titulo">Registro Nacional de Promotores Deportivos</div>
        <div class="text-center texto_subtitulo">Instituto Nacional del Deporte</div>

        <div class="flex justify-center mt-16 px-0 sm:items-center sm:justify-center">
            <div class="ml-4 text-center text-sm text-gray-500 sm:text-right sm:ml-0">
                <a href="https://morros-devops.xyz/" target="_blank"
                   class="group inline-flex items-center hover:text-gray-700 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                         class="-mt-px mr-1 w-5 h-5 stroke-gray-400 group-hover:stroke-gray-600">
                        <path stroke-linecap="round" stroke-linejoin="round"
                              d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z"/>
                    </svg>
                    Desarrollado por Morros Devops
                </a>
            </div>
        </div>

    </div>
</div>
@livewireScripts
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<x-livewire-alert::scripts />
</body>
</html>
