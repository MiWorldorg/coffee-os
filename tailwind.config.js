/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.svelte",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            fontFamily: {
                peyda: ["Peyda", "sans-serif"],
            },
            colors: {
                coffee: {
                    50: "#f7f4ef",
                    100: "#eee7dc",
                    700: "#684b3b",
                    800: "#4a3429",
                    900: "#30231d",
                },
                sage: {
                    100: "#e7eee7",
                    500: "#718b72",
                    600: "#58735a",
                },
            },
        },
    },
    plugins: [],
};
