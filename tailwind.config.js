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
                primary: {
                    DEFAULT: '#1A1F36',  // Navy Blue (primary)
                    dark: '#0D1B2A',     // Darker variant
                },
                action: {
                    DEFAULT: '#00C896',  // Electric Green (secondary)
                    light: '#1EFFBC',    // Lighter variant
                },
                critical: {
                    DEFAULT: '#FF3B30',  // Crimson Red (tertiary)
                    light: '#FF4C61',    // Lighter variant
                },
            },
        },
    },
    plugins: [],
};
