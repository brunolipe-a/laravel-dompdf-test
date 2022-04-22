module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            fontSize: {
                xss: ".6rem",
            },
        },
    },
    plugins: [require("@tailwindcss/typography")],
};
