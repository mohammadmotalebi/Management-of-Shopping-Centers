const path = require('path');

module.exports = {
    entry: path.resolve(__dirname, './resources/js/app.js'),
    module: {
        rules: [
            {
                test: /\.(js|jsx)$/,
                exclude: /node_modules/,
                use: ['babel-loader'],
            },
        ],
    },
    resolve: {
        extensions: ['*', '.js', '.jsx'],
    },
    output: {
        path: path.resolve(__dirname, './js'),
        filename: 'bundle.js',
    },
    devServer: {
        contentBase: path.resolve(__dirname, './js'),
    },
};
