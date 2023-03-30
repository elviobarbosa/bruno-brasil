const path = require('path');
const isDevelopment = process.env.NODE_ENV !== 'production';
const { CleanWebpackPlugin } = require('clean-webpack-plugin');

module.exports = {
    devtool: isDevelopment ? 'eval-source-map' : 'source-map',
    entry: {
        'main': [
            path.resolve(__dirname, 'src', 'index.js'),
        ]
    },
    output: {
        path: path.resolve(__dirname, 'build'),
        filename: 'index.js'
    },
    resolve: {
        extensions: ['.js', '.jsx']
    },
    module: {
        rules: [
          // js babelization
          {
            test: /\.(js|jsx)$/,
            exclude: /node_modules/,
            loader: 'babel-loader'
          },
          
        ]
      },
    
      plugins: [
        // clear out build directories on each build
        new CleanWebpackPlugin({
          cleanOnceBeforeBuildPatterns: [
            '../build/*',
          ]
        }),
      ],
      
    devServer: {
        devMiddleware: {
          writeToDisk: true
        }
    }
}