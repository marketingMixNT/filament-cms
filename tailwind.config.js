/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
    './app/Filament/**/*.php',
    './resources/views/filament/**/*.blade.php',
    './vendor/filament/**/*.blade.php',
    './vendor/awcodes/filament-curator/resources/**/*.blade.php',
  ],
  theme: {
    extend: {
      screens: {
          'xs': "390px",
          '3xl':'1920px',
          'max': "2200px",
      },
      colors: {
          primary: {
              400: "#bf9b30",
              // 600:'#8c6842'
          },
          // secondary: {
          //     400: "#202e20",
          //     600:'#172117'
          // },
          // bgPrimary: "#fffcf4",
          // bgSecondary: "#202e20",
          // bgThird: "#fdf0e2",
          // bgFourth:'#f1cfc3',

          fontWhite:"#ffffff",
          fontPrimary:"#bf9b30",
          // fontSecondary:"#fab6ae",
          // fontThird:"#676e5c"
      },
      fontFamily:{
        text:[ "Questrial", "sans-serif"],
        heading:[  "Lora", "serif"],
       handwritting:[  "Mrs Saint Delafield", "cursive"],
      }
  },
  },
  plugins: [
    require('@tailwindcss/typography'),
    require('@tailwindcss/forms'),

  ],
}

