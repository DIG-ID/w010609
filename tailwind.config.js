/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    './header.php',
    './index.php',
    './footer.php',
    './404.php',
    './inc/*.php',
    './page-templates/**/*.php',
    './template-parts/**/*.php',
  ],
  theme: {
    fontFamily: {
      transducer: ['transducer', 'sans-serif'],
      transducerCondensed: ['transducer-condensed', 'sans-serif'],
      transducerExtended: ['transducer-extended', 'sans-serif'],
    },
    extend: {
      colors: {
        'red': '#14A5BB',
      },
    },
  },
  plugins: [
  ],
}
