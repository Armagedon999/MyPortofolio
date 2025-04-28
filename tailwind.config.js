const { fontFamily } = require('tailwindcss/defaultTheme')

module.exports = {
  darkMode: 'class',
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      colors: {
        primary: '#6366F1', // warna utama
      },
      fontFamily: {
        sans: ['Poppins', ...fontFamily.sans],
      },
      boxShadow: {
        neon: '0 0 10px #8B5CF6, 0 0 20px #8B5CF6',
      }
    },
  },
  plugins: [require('daisyui')],
}
