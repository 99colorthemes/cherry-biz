const webpack = require("webpack");
const autoprefixer = require("autoprefixer");
//const cssnano = require("cssnano");
const path = require('path');
const MiniCssExtractPlugin = require('mini-css-extract-plugin');


module.exports = {
    mode: 'development',
    devtool: 'source-map',
    context: path.resolve(__dirname, 'sass'),
    output: {
        path: path.resolve(__dirname, 'assets/css'),
    },
    entry: './style.scss',
    module: {
        rules: [{
            test: /\.scss$/,
            exclude: /node_modules/,
            use: [
                {
                    loader: MiniCssExtractPlugin.loader,
                    options: {
                        reloadAll: true
                    }
                },
                'css-loader',
                'postcss-loader',
                'sass-loader'
            ]
        }]
    },
    plugins: [
        new MiniCssExtractPlugin({
            filename: 'app.css'
        }),
        new webpack.LoaderOptionsPlugin({
            options: {
                postcss: [
                    autoprefixer(),
                    //cssnano()
                ]
            }
        })
    ]
}