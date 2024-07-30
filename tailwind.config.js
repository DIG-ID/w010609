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
        'light': '#F2F2F2',
        'dark': '#050505',
        'red': '#EC302E',
      },
    },
  },
  plugins: [
  ],
}
