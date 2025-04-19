/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
    "./app/**/*.{js,ts,jsx,tsx}", // include Next.js app directory
    "./components/**/*.{js,ts,jsx,tsx}", // include components directory
    "./pages/**/*.{js,ts,jsx,tsx}", // include pages directory
    "./public/index.html", // optional: if you have an HTML file here
  ],
  theme: {
    extend: {},
  },
  plugins: [],
}
