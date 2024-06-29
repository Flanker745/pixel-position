/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      fontFamily:{
        "Hanken-Grotesk": ["Hanken Grotesk", "sans-serif"]
      },
      fontSize:{
        "2xs": ['10px']
      }
    },
  },
  plugins: [],
}

