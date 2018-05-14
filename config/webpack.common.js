import webpack from 'webpack';
import { DIST, HASH, RELATIVE_PATH, SRC } from './settings';
import loaders, { ETPStyles } from './loaders';
import pug from './pug';

export default {
    context: SRC,
    entry: './main.js',
    output: {
        path: DIST,
        publicPath: RELATIVE_PATH,
        filename: `js/app${HASH}.js`
    },
    module: {
        rules: loaders
    },
    plugins: [
        new webpack.NoEmitOnErrorsPlugin(),
        ETPStyles,
        ...pug
    ]
};