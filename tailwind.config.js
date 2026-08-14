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
                sans: ['DM Sans', ...defaultTheme.fontFamily.sans],
            },
            colors: {
                brand: {
                    primary: '#f53003',
                    'primary-dark': '#e02b02',
                    'primary-light': '#FF4433',
                },
                surface: {
                    light: '#FDFDFC',
                    dark: '#0a0a0a',
                    card: '#ffffff',
                    'card-dark': '#161615',
                    border: '#e3e3e0',
                    'border-dark': '#3E3E3A',
                },
                text: {
                    primary: '#1b1b18',
                    'primary-dark': '#EDEDEC',
                    secondary: '#706f6c',
                    'secondary-dark': '#A1A09A',
                },
            },
            borderRadius: {
                sm: '4px',
                DEFAULT: '8px',
                lg: '12px',
                xl: '16px',
            },
            boxShadow: {
                'card': '0 1px 2px 0 rgba(0, 0, 0, 0.03), 0 1px 4px 0 rgba(0, 0, 0, 0.06)',
                'card-hover': '0 4px 12px -2px rgba(0, 0, 0, 0.1), 0 2px 4px -2px rgba(0, 0, 0, 0.06)',
            },
        },
    },

    plugins: [forms],
};
