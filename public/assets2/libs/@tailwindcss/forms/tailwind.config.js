module.exports = {
  content: ['./index.html', './kitchen-sink.html'],
  theme: {
    extend: {
      colors: {
        'jacker': '#073946',
        'orange': '#d14b1b',
      },
    },
  },
  plugins: [require('./src')],
}
