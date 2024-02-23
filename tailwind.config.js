/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/**/*.blade.php",
    "./src/**/*.{html,js}",
    "./node_modules/tw-elements/dist/js/**/*.js",
    "./vendor/wire-elements/modal/resources/views/*.blade.php",
    "./storage/framework/views/*.php",
  ],
  safelist: [
    {
      pattern: /max-w-(sm|md|lg|xl|2xl|3xl|4xl|5xl|6xl|7xl)/,
      variants: ['sm', 'md', 'lg', 'xl', '2xl'],
    },
  ],
  theme: {
    extend: {
      screens: {
        '3xl' : '2000px',
        '4xl' : '3000px',
      },
      fontFamily: {
        'presentation' : ['Anton', 'sans-serif'],
        'personalWords' : ['Dancing Script', 'cursive']
      }
    },
  },
  plugins: [require("tw-elements/dist/plugin.cjs")],
  darkMode: "class",
};
