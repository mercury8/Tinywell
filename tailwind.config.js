/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./*.{php,html,js}",
    "./template-parts/*.{php,html,js}",
    "./template-parts/blocks/*.{php,html,js}",
  ],
  theme: {
    extend: {
      colors: {
        purple: "",
        tinyblue: "#2F3690",
      },
      animation: {
        fade: "fadeOut 10s ease-in-out",
      },
      keyframes: (theme) => ({
        fadeOut: {
          "0%": { backgroundColor: theme("colors.white.300") },
          "100%": { backgroundColor: theme("colors.transparent") },
        },
      }),
    },
    container: {
      screens: {
        sm: "100%",
        md: "100%",
        lg: "1024px",
        xl: "1180px",
        "2xl": "1180px",
      },
    },
    fontSize: {
      sm: "0.8rem",
      base: "1rem",
      xl: "1.675rem",
      "2xl": "3.375rem",
      "3xl": "1.5rem",
      "4xl": "2rem",
      "5xl": "3.052rem",
      "6xl": "4.375rem",
    },
    maxWidth: {
      1440: "90rem",
    },
    maxHeight: {
      500: "31.25rem",
      700: "41.25rem",
    },
    bottom: {
      12: "12.1rem",
    },
  },
  plugins: [],
};
