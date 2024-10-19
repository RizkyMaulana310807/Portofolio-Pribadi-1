module.exports = {
  darkMode: 'media',
  content: [
    "./*.html",  // Mencakup semua file .html di direktori root
    "./*.js",    // Mencakup semua file .js di direktori root
    "./*.vue" 
  ],
  theme: {
    extend: {
      textStroke: {
        // Menambahkan utilitas kustom untuk stroke text
        '2px': '2px black',
      },

    },
  },
  variants: {
    extend: {},
  },
  plugins: [],
};
