const MiniCssExtractPlugin = require('mini-css-extract-plugin');
const CssMinimizerPlugin = require("css-minimizer-webpack-plugin");
const TerserPlugin = require("terser-webpack-plugin");
const CompressionPlugin = require("compression-webpack-plugin");
const path = require('path');


module.exports = {
    mode: 'production',
    entry: {
        // 'main': './src/js/main.js',
        'page-homepage': './src/js/page-homepage.js',
        'page-history': './src/js/page-history.js',
        'page-management': './src/js/page-management.js',
        'category': './src/js/category.js',
        'page-brands': './src/js/page-brands.js',
        'page-about-us': './src/js/page-about-us.js',
        'page-career': './src/js/page-career.js',
        'single-zaposleni': './src/js/single-zaposleni.js',
        'single': './src/js/single.js',
        'acf-block-hero': './blocks/hero/hero.js',
        'acf-block-hero-text': './blocks/hero-text/hero-text.js',
        'acf-block-career-form': './blocks/career-form/career-form.js',
        'acf-block-text': './blocks/text/text.js',
        'acf-wysiwyg-editor': './blocks/wysiwyg-editor/wysiwyg-editor.js',
        'acf-animation-hero': './blocks/animation-hero/animation-hero.js',
        'acf-scroll-images': './blocks/scroll-images/scroll-images.js',
        'acf-floors': './blocks/floors/floors.js',
        'acf-hover-images': './blocks/hover-images/hover-images.js',
        'acf-atrijum-animation': './blocks/atrijum-animation/atrijum-animation.js',
        'acf-odrzivost': './blocks/odrzivost/odrzivost.js',
        'acf-centralni-atrijum': './blocks/centralni-atrijum/centralni-atrijum.js',
        'acf-zoom-image': './blocks/zoom-image/zoom-image.js',
        'acf-locations': './blocks/locations/locations.js',
        'acf-text-image-button': './blocks/text-image-button/text-image-button.js',
        'acf-odrzivost-animation': './blocks/odrzivost-animation/odrzivost-animation.js',
        'acf-poslovni-prostor': './blocks/poslovni-prostor/poslovni-prostor.js',
        'acf-certificate-block': './blocks/certificate-block/certificate-block.js',
        'acf-zakupci': './blocks/zakupci/zakupci.js',
        'acf-blocks': './src/js/acf-blocks.js',
        'header': './src/js/components/header.js',
        'header-coming-soon': './src/js/components/header-coming-soon.js',
        'footer': './src/js/components/footer.js',
        '404': './src/js/404.js',
    },
    output: {
        filename: 'js/[name].js',
        path: path.resolve(__dirname, 'dist'),
        clean: true
    },
    resolve: {
        alias: {
            // Define the alias for the global import path
            '@components': path.resolve(__dirname, 'components'),
            '@blocks': path.resolve(__dirname, 'blocks'),
        },
    },
    module: {
        rules: [
            {
                test: /\.(s[ac]|c)ss$/i,
                use: [
                    {
                        loader: MiniCssExtractPlugin.loader,
                    },
                    {
                        loader: 'css-loader',
                    },
                    {
                        loader: 'postcss-loader',
                    },
                    {
                        loader: 'sass-loader',
                    },
                ],
                exclude: /node_modules/,
            },
            {
                test: /\.(woff|woff2|eot|ttf|otf)$/i,
                type: 'asset/resource',
                exclude: /node_modules/,
                generator: {
                    filename: 'fonts/[name][ext]'
                },
            },
            {
                test: /\.(png|svg|jpg|jpeg|gif)$/i,
                type: 'asset/resource',
                exclude: /node_modules/,
                generator: {
                    filename: 'images/[name][ext]'
                },
            },
            {
                test: /\.m?js$/,
                exclude: /node_modules/,
                use: {
                    loader: "babel-loader",
                    options: {
                        presets: ['@babel/preset-env']
                    }
                }
            }
        ],
    },
    optimization: {
        minimize: true,
        minimizer: [
            new TerserPlugin(),
            new CssMinimizerPlugin(),
        ],
    },
    plugins: [
        new MiniCssExtractPlugin({
            filename: 'css/[name].css',
        })
    ],
}
