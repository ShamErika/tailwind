/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./resources/views/**/*.blade.php",
        "./storage/framework/views/*.php",
        "./resources/js/**/*.js",
        "./resources/js/**/*.vue",
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
    ],
    theme: {
        extend: {
            fontFamily: {
                sans: ["Instrument Sans", "ui-sans-serif", "system-ui", "sans-serif"],
            },
        },
    },
    plugins: [],
};

