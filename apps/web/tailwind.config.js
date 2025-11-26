/** @type {import('tailwindcss').Config} */
module.exports = {
  darkMode: "class", // <---- ATIVAR DARK MODE CONTROLADO POR CLASSE
  content: [
    "./src/**/*.{js,ts,jsx,tsx}",
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
