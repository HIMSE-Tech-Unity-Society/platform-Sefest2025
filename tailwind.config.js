import defaultTheme from 'tailwindcss/defaultTheme';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/**/*.blade.php',
        './resources/**/*.js',
        './resources/**/*.vue',
    ],
    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
            colors: {
                'weserve-purple' : "#640EF1",
                'weserve-navy' : '#080C2E',
                'weserve-grey' : '#5D5D7C',
                'weserve-yellow' : '#FFD15A',
                'weserve-light' : '#8D90A8'
              },
              display: ["group-hover"],
        },
    },
    plugins: [],
};
