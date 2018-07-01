import webpack from 'webpack';
import { DIST, HASH, RELATIVE_PATH, SRC } from './settings';
import loaders, { ETPStyles } from './loaders';
import php from './php';

export default {
    context: SRC,
    entry: './main.js',
    output: {
        path: DIST,
        publicPath: RELATIVE_PATH,
        filename: `js/app.js` /*${HASH}*/
    },
    module: {
        rules: loaders
    },
    plugins: [
        new webpack.NoEmitOnErrorsPlugin(),
        ETPStyles,
        ...php,
    ]
};
