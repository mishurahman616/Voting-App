/** @type {import('tailwindcss').Config} */
const defaultTheme = require('tailwindcss/defaultTheme');
const colors=require('tailwindcss/colors');
module.exports = {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {

        extend: {
            color:{
                inherit: colors.inherit,
                current: colors.current,
                transparent: colors.transparent,
                black: colors.black,
                white: colors.white,
                slate: colors.slate,
                gray: colors.gray,
                zinc: colors.zinc,
                neutral: colors.neutral,
                stone: colors.stone,
                red: colors.red,
                orange: colors.orange,
                amber: colors.amber,
                yellow: colors.yellow,
                lime: colors.lime,
                green: colors.green,
                emerald: colors.emerald,
                teal: colors.teal,
                cyan: colors.cyan,
                sky: colors.sky,
                blue: colors.blue,
                indigo: colors.indigo,
                violet: colors.violet,
                purple: colors.purple,
                fuchsia: colors.fuchsia,
                pink: colors.pink,
                rose: colors.rose,
            },
            spacing:{
                70:'17.5rem',
                175:'43.75rem',
            },
            maxWidth:{
                custom:'62.5rem',
            },
            fontFamily: {
                sans: ['Open Sans', ...defaultTheme.fontFamily.sans],
            },
        },
    },

    plugins: [require('@tailwindcss/forms')],
};
