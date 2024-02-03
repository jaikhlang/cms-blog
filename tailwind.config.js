/** @type {import('tailwindcss').Config} */

const colors = require('tailwindcss/colors')

module.exports = {
  content: [
    './app/**/*.php',
    './config/**/*.php',
    './resources/**/*.{php,js}',
    './storage/framework/views/*.php',
  ],
  theme: {
    extend: {
      colors: {
        primary: colors.blue,
      },
      height: {
        'h-7': '1.75rem',
        'h-8': '2rem',
        'h-9': '2.25rem',
        'h-10': '2.5rem',
        'h-12': '3rem',
        'h-14': '3.5rem',
      },
    },
  },
  plugins: [require('@tailwindcss/forms'), require('@tailwindcss/typography')],
}
