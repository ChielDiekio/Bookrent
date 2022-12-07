/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {},
  },
  plugins: [],
  colors: {
    transparent: 'transparent',
    current: 'currentColor',
    'blue': '#007bb1',
    'pink': '#e2007a',
    'midnight': '#121063',
    'metal': '#565584',
    'tahiti': '#3ab7bf',
    'silver': '#ecebff',
    'bubble-gum': '#ff77e9',
    'bermuda': '#78dcca',
  },
}
