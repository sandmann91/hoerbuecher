// Includes
const gulp = require('gulp');
const rename = require("gulp-rename");
const gulpStaticPhp = require('gulp-static-php');
const del = require('del');

/**
 * Hier werden alle Tasks aus der orthor.gulp.js in das Gulp-File geschrieben. 
 * Wenn ein Task angepasst werden soll, dann kann man dies hier tun. 
 * Dazu kann man entweder den Task überschreiben oder mit einer If Abfrage komplett ausblenden
 * 
 * Wichtig ist auch, dass man hier den Namen des Systems angibt. 
 * Dieser wird nämlich für BrowserSync und für die JS Datei übernommen
 * 
 * // Name des System
 * og.system = 'template';
 * 
 * // Optional kann Browsersync überschrieben werden mit 
 * og.browserSyncPath = 'somepath';
 * 
 */

const og = require('./orthor/manual_modules/orthor/orthor.gulp.js');

// Overwrite Defaults 
og.system = 'hb';
og.browserSyncPath = 'https://hb.localhost/?dev-param=d29QQ9RnHlIwaZI7Ep43!LOqN';
og.browserSyncHost = 'hb.localhost';
og.browserSyncOpen = 'external';
og.browserSyncHttps = {
    key: "C:/xampp/apache/conf/ssl/hb.localhost-key.pem",
    cert: "C:/xampp/apache/conf/ssl/hb.localhost.pem",
};
og.browserSyncGhostMode = false;


for (var item in og) {
    exports[item] = og[item];
}



// Multi Task müssen hier definiert werden
exports.copyPageLevel = gulp.task('copyPageLevel', gulp.series(og.copyPageLevelCss, og.copyPageLevelJs, og.copyPageLevelApi));
exports.copyPagesAndPlugins = gulp.task('copyPagesAndPlugins', gulp.series(og.copyPagesAndPluginsRaw, 'copyPageLevel'));
exports.copy = gulp.task('copy', gulp.series(og.clearEnv, og.copyOrthor, gulp.parallel('copyPagesAndPlugins', og.copyStyles, og.copyScripts, og.copyIncludes, og.copyModules, og.copyMisc, og.copyAssets, og.copyApi)));
exports.watch = gulp.task('watch', gulp.series('copy', og.startWatch));