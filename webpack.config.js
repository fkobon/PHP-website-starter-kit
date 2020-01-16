const path = require('path');
const MiniCssExtractPlugin = require('mini-css-extract-plugin');
const StylelintPlugin = require('stylelint-webpack-plugin');
const BrowserSyncPlugin = require('browser-sync-webpack-plugin');


// change the mode to development, if you want uncompressed CSS and JS files
module.exports = [
  {
    mode: 'production',
    entry: ['./resources/js/index.js', './resources/sass/style.scss'],
    output: {
      path: path.resolve(__dirname, 'public'),
      filename: 'js/index.js',
    },
    stats: {
      entrypoints: false,
      children: false,
      hash: false
    },
    module: {
      rules: [
        {
          test: /\.js$/,
          use: [
            {
              loader: 'babel-loader',
              options: {
                presets: ['minify', '@babel/preset-env']
              }
            },
            'eslint-loader'
          ]
        },
        {
          test: /\.scss$/,
          use: [
            {
              loader: MiniCssExtractPlugin.loader
            },
            {
              loader: 'css-loader',
              options: { importLoaders: 1 }
            },
            {
              loader: 'postcss-loader',
              options: {
                plugins: [require('autoprefixer')]
              }
            },
            'sass-loader'
          ]
        }
      ]
    },
    plugins: [
      new MiniCssExtractPlugin({
        filename: 'css/style.css'
      }),
      new StylelintPlugin(),
      new BrowserSyncPlugin({
        files: ['app/**/*.php'],
        ui: false,
        logLevel: 'silent'
      })
    ]
  }
];
