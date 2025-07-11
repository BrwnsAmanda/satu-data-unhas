/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
         colors: {
                primary: "#601616",
                secondary: "#C62E2E",
                cream: "#FAF5E9",
            },
            fontFamily: {
                poppins: ["Poppins", "sans-serif"],
            },
    },
  },
  plugins: [],
}
