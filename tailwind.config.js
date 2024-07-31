import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
            colors:{
                'primary':{
                    '100': '#feb1dd',
                    '200':'#ff79c5',
                    '300':'#fd32a9',
                    '400':'#f80091',
                    '500':'#f60077',
                },
                'secondary':{
                    '100': '#c5ffc0',
                    '200': '#a8fca3',
                    '300': '#7afa78',
                    '400': '#47f652',
                    '500': '#05f138',
                    '600': '#00b226',
                    '700': '#1c682b',
                },
                'tertiary':{
                    '700': '#272935',
                    '800': '#1c1e26',
                    '850': '#14161b',
                    '900': '#000000',
                },
            }
        },
    },

    plugins: [forms],
};
