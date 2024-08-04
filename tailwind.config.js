/** @type {import('tailwindcss').Config} */
export default {
    content: ["./resources/**/*.blade.php", "./resources/**/*.js", "./resources/**/*.vue",],
    theme: {
        extend: {
            colors: {
                customDark: {
                    100: '#212121',
                    200: '#171717',
                    300: '#121212',
                },
            },
        },
    },
    plugins: [],
};
