module.exports = {
  content: require('fast-glob').sync([
      './**/*.php'
  ]),
  theme: {
    container: {
      screens: {
        sm: '600px',
        md: '728px',
        lg: '984px',
        xl: '1165px',
        '2xl': '1165px',
      },
    },
    extend: {
      fontFamily: {
        'courier': ['courier-std']
      },
      colors: {
        spencer: '#78716c',
    },
    },
  },
  plugins: [],
}