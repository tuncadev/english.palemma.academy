import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        "./node_modules/flowbite/**/*.js",
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
            backgroundImage: {
                'btn_purple' : 'linear-gradient(180deg, rgba(184, 152, 253, 1) 0%, rgba(137, 91, 235, 1) 100%)',
            },
            width: {
                'btn_purple' : '300px'
            },
            height: {
                'btn_purple' : '75px'
            },
        },
        colors: {

            's_card-blue' : '#3b71ca',
            's_card-gray' : '#9fa6b2',
            's_card-green' : '#14a44d',
            's_card-rose' : '#dc4c64',
            's_card-yellow' : '#E4A11B',
            's_card-sky' : '#54b4d3',
            's_card-white' : '#332D2D',
            'top_bar' : '#eff5ff',
            'bermuda': '#78dcca',
            'deeppink' : '#FF1493',

          },
    },

    plugins: [
        forms,
        require('flowbite/plugin'),
    ],
};
