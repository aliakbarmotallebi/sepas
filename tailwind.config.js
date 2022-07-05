/** @type {import('tailwindcss').Config} */
module.exports = {
 content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
  ],
  theme: {
    extend: {
        screens: {
          'print': { 'raw': 'print' },
        },
        fontFamily: {
            'iran': ['IRANSansX'],
        },
    },
  },
  plugins: [],
}
