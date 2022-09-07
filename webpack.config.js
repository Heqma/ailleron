const path = require('path')
const Webpack = require('webpack');
const { VueLoaderPlugin } = require('vue-loader')


module.exports = {
  entry: './assets/src/starter.js',
  output: {
    filename: 'starter.js',
    path: path.resolve(__dirname, './assets/dist'),
  },

  module: {
    rules: [
      // ... other rules
      {
        test: /\.vue$/,
        loader: 'vue-loader'
      },
      // this will apply to both plain `.css` files
      // AND `<style>` blocks in `.vue` files
      {
        test: /\.css$/,
        use: [
          'vue-style-loader',
          'css-loader'
        ]
      }
    ]
  },
  resolve: {
    alias: {
      'vue': 'vue/dist/vue.esm-bundler.js',
    },
  },

  plugins: [
    // make sure to include the plugin!
    new VueLoaderPlugin(),
    new Webpack.DefinePlugin({ __VUE_OPTIONS_API__: true, __VUE_PROD_DEVTOOLS__: true }),
  ]

}


