/** @type {import('tailwindcss').Config} */
module.exports = {
  darkMode: "class",
  content: [
    "./src/**/*.php",
    "./public/**/*.php",
  ],
  theme: {
    extend: {
      colors: {
        impaBlue: "#1e4fa8",
      },
    },
  },
  plugins: [],
};