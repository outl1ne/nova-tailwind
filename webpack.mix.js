const mix = require('laravel-mix');
const tailwindcss = require('tailwindcss');

mix.setPublicPath('dist').postCss('resources/css/tailwind.css', '', [tailwindcss('tailwind.config.js')]);
