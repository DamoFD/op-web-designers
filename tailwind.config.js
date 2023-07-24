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
                inter: ['Inter', ...defaultTheme.fontFamily.sans],
            },
            colors: {
                'brand-gray-800': '#100C19',
                'brand-gray-400': '#9C9C9C',
                'brand-gray-200': '#D1D1D1',
                'brand-white': '#F8F8F8',
                'brand-primary-600': '#B02244',
                'brand-primary-500': '#FF3565',
                'brand-primary-400': '#FF7293',
                'brand-primary-300': '#FFAEC1',
            }
        },
    },

    plugins: [forms],
};
