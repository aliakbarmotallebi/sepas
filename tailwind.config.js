/** @type {import('tailwindcss').Config} */
module.exports = {
//  prefix: 'tw-',
//  separator: '_',
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
