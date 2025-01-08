/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    './header.php',
    './home.php',
    './single.php',
    './page.php',
    './index.php',
    './footer.php',
    './404.php',
    './inc/*.php',
    './page-templates/**/*.php',
    './template-parts/**/*.php',
  ],
  theme: {
    fontFamily: {
      monumentExtend: ['PP Monument Extended', 'sans-serif'],
      neueMachina: ['PP Neue Machina Inktrap', 'sans-serif'],
    },
    extend: {
      colors: {
        'light': '#E6E6E6',
        'dark': '#0D0D0D',
        'red': '#EC302E',
      },
    },
  },
  plugins: [
  ],
}
