module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      container: {
        center: true,
        pendding: '1rem',
      },
      spacing: {
        '18': '70px',
      },
      colors: {
        'green-ua': '#75923d',
        'gray-footer': '#322C31',
        'facebook': '#1877F2',
        'instagram': '#C62B57',
        'youtube': '#FF0000',
      },
    },
  },
  variants:{
    extend: {
      display: ['group-focus'],
      opacity: ['group-focus'],
      inset: ['group-focus'],
    },
  },
  plugins: [
    require('tailwindcss-textshadow'),
  ],
}
