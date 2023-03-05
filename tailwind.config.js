/** @type {import('tailwindcss').Config} */
module.exports = {
    content: ['*.{html,js,php}'],
    theme: {
        extend: {},
    },
    daisyui: {
        themes: ['garden', 'winer', 'cupcake', 'fantasy', 'light'],
    },
    plugins: [require('daisyui')],
};
