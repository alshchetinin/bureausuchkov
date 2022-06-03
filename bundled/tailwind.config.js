const defaultTheme = require('tailwindcss/defaultTheme')
module.exports = {
  content: ["./**/*.php", "./src/js/*.js"],
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
    extend: {
      gridTemplateColumns: {
        header: "max(112px) 1fr max-content"
      },
      animation: {
        marquee: 'marquee 25s linear infinite',
        marquee2: 'marquee2 25s linear infinite',
      },
      keyframes: {
        marquee: {
          '0%': { transform: 'translateX(0%)' },
          '100%': { transform: 'translateX(-100%)' },
        },
        marquee2: {
          '0%': { transform: 'translateX(100%)' },
          '100%': { transform: 'translateX(0%)' },
        },
      },
    },
  },
  variants: {
    extend: {
      fontSize: ['rfs'],
      lineHeight: ['rfs'],
      padding: ['rfs'],
      margin: ['rfs'],
      gap: ['rfs'],
      space: ['rfs'],
      width: ['rfs'],
      minWidth: ['rfs'],
      maxWidth: ['rfs'],
      height: ['rfs'],
      minHeight: ['rfs'],
      maxHeight: ['rfs'],
      borderRadius: ['rfs'],
      inset: ['rfs'],
      translate: ['rfs'],
  },
  },
  plugins: [
    require("tailwindcss-rfs"),
    require("@tailwindcss/forms"),
    require("@tailwindcss/aspect-ratio"),
    require("tailwindcss-debug-screens"),
  ],
};
