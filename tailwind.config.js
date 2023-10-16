const defaultTheme = require('tailwindcss/defaultTheme');
const colors = require('tailwindcss/colors')

/** @type {import('tailwindcss').Config} */
module.exports = {
    mode: 'jit',
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        './resources/js/**/*.jsx',
    ],

    theme: {
        extend: {
            colors: {
                'kuning': '#fabf03',
                'merah': '#fe3252',
                'biru': '#6ed7ce',
                'putih': '#f5f5fa',
                'hitam': '#101014'
            },
            fontFamily: {
                colors: {
                    primary: '#ffffff',
                    secondary: '#000000',
                },
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
        },
    },

    plugins: [require('@tailwindcss/forms')],
};
