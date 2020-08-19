module.exports = {
  purge: false,
  theme: {
    extend: {},
    boxShadow: {
      xs: '0 0 0 1px rgba(0, 0, 0, 0.05)',
      sm: '0 1px 2px 0 rgba(0, 0, 0, 0.05)',
      xl: '0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04)',
      '2xl': '0 25px 50px -12px rgba(0, 0, 0, 0.25)',
    },
  },
  variants: {},
  plugins: [],
  future: {
    removeDeprecatedGapUtilities: true,
  },
  corePlugins: {
    fontSize: false,
    fontFamily: false,
    fontWeight: false,
    lineHeight: false,
    textAlign: false,
  },
  options: {
    prefix: '',
    important: false,
    separator: ':',
  },
};
