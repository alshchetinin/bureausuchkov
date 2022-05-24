const defaultTheme = require('tailwindcss/defaultTheme')
module.exports = {
  content: ["./**/*.php", "./scr/js/*.js"],
  theme: {
    fontSize: {
      sm: "0.875rem",
      base: "1rem",
      lg: "1.25rem",
      xl: "2.625rem",
      "2xl": ["4.125rem", "114%"],
      "3xl": ["5.125rem", "114%"],
    },
    fontFamily: {
      sans: ['Mulish', ...defaultTheme.fontFamily.sans],
    },
    extend: {},
  },
  variants: {
    extend: {
      fontSize: ["rfs"],
      padding: ["rfs"],
      margin: ["rfs"],
      gap: ["rfs"],
    },
  },
  plugins: [
    require("tailwindcss-rfs"),
    require("@tailwindcss/forms"),
    require("@tailwindcss/aspect-ratio"),
    require("tailwindcss-debug-screens"),
  ],
};
