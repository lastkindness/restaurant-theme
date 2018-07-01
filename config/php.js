import path from 'path';
import fs from 'fs';
import { SRC } from './settings';
import HtmlWebpackPlugin from 'html-webpack-plugin';

const recursiveSearch = (startPath, filter, callback) => {

    if (!fs.existsSync(startPath)) {
        console.log("no dir ", startPath);
        return;
    }

    const files = fs.readdirSync(startPath);

    for (let i = 0; i < files.length; i++) {
        let filename = path.join(startPath, files[i]);

        let stat = fs.lstatSync(filename);

        if (!stat.isDirectory() && filter.test(filename)) {
            callback(filename);
        }
    }
};

let php = [];

recursiveSearch(SRC, /.php$/, (filename) => {
    const { name } = path.parse(filename);

    php.push(new HtmlWebpackPlugin({
        template: filename,
        filename: `${name}.html`,
        minify: false
    }));
});

export default php;
