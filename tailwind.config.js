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
        colors: {
            transparent: 'transparent',
            current: 'currentColor',
            'yellow': {
                100: '#fff9e6',
                200: '#fdecae',
                300: '#fcdd75',
                400: '#fbce3c',
                500: '#fabf03',
                600: '#c19403',
                700: '#896902',
                800: '#513e01',
                900: '#191300',
            },
            'rose': {
                100: '#ffe6e9',
                200: '#feb9c4',
                300: '#fe8c9e',
                400: '#fe5f78',
                500: '#fe3252',
                600: '#c42740',
                700: '#8b1a2c',
                800: '#520d18',
                900: '#190004',
            },
            'teal': {
                100: '#ebfaf8',
                200: '#cbf2ef',
                300: '#ace9e4',
                400: '#8de0d9',
                500: '#6ed7ce',
                600: '#53a7a0',
                700: '#397671',
                800: '#1f4542',
                900: '#051413',
            },
            'white': '#f5f5fa',
            'black': '#101014',
        },
        extend: {
            colors: {
                kuning: {
                    100: '#fff9e6',
                    200: '#fdecae',
                    300: '#fcdd75',
                    400: '#fbce3c',
                    500: '#fabf03',
                    600: '#c19403',
                    700: '#896902',
                    800: '#513e01',
                    900: '#191300',
                },
                merah: {
                    100: '#ffe6e9',
                    200: '#feb9c4',
                    300: '#fe8c9e',
                    400: '#fe5f78',
                    500: '#fe3252',
                    600: '#c42740',
                    700: '#8b1a2c',
                    800: '#520d18',
                    900: '#190004',
                },
                biru: {
                    100: '#ebfaf8',
                    200: '#cbf2ef',
                    300: '#ace9e4',
                    400: '#8de0d9',
                    500: '#6ed7ce',
                    600: '#53a7a0',
                    700: '#397671',
                    800: '#1f4542',
                    900: '#051413',
                },
                putih: '#f5f5fa',
                hitam: '#101014'
            },
            fontFamily: {
                plusjakarta: ['Plus Jakarta Sans'],
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
