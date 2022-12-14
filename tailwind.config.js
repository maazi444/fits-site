/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./src/**/*.{php,js}"],
  theme: {
    extend: {
      width: {
        97: "35rem",
      },
      height: {
        100: "80vh"
      },
      colors: {
        redPink: "#ff2957"
      },
      fontFamily: {
        raleway: ['raleway', 'cursive']
      }
    },
  },
  plugins: [],
}
