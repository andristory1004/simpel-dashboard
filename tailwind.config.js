/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      fontFamily: {
        'lobster': ['Lobster'],
        'oswald': ['Oswald'],
        'kalam': ['Kalam'],
        'acme': ['Acme'],
        'satisfy': ['Satisfy']
      },
      colors: {
        'blue': '#0000ff',
        'green': '#00CBFF',
        'red': '#ff0000'
      },
      width: {
        '250': '250px'
      },
      height: {
        '400': '400px',
        '320': '320px',
        '80': '80px'
      }

    },
  },
  plugins: [],
}
