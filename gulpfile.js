import gulp from 'gulp';
import browserSync from 'browser-sync';
import gulpSass from 'gulp-sass';
import * as sass from 'sass';
import uglify from 'gulp-uglify';
import imagemin from 'gulp-imagemin';
import { exec } from 'child_process';

const browserSyncInstance = browserSync.create();
const sassCompiler = gulpSass(sass);

// Start een PHP-server om Kirby correct te laden
function phpServer() {
    // Start de PHP-server op poort 8001 (of een andere poort als je wilt)
    exec('php -S localhost:8001', (err, stdout, stderr) => {
        if (err) {
            console.error(`exec error: ${err}`);
            return;
        }
        console.log(`stdout: ${stdout}`);
        console.error(`stderr: ${stderr}`);
    });
}

function styles() {
    return gulp.src('assets/scss/**/*.scss')
        .pipe(sassCompiler({ outputStyle: 'compressed' }).on('error', sassCompiler.logError))
        .pipe(gulp.dest('public/css'))
        .pipe(browserSyncInstance.stream());
}

function images() {
    return gulp.src('src/images/**/*')
        .pipe(imagemin())
        .pipe(gulp.dest('public/images'));
}

// Deze functie zorgt ervoor dat de PHP-server wordt gestart met de juiste instellingen
function watchAll() {
    // Start de PHP-server
    phpServer();

    // Start browserSync met de juiste instellingen
    browserSyncInstance.init({
        proxy: 'localhost:8001', // Proxy naar de PHP-server op poort 8001
        port: 8000,              // BrowserSync draait op poort 8000
        open: true,              // Browser automatisch openen
        injectChanges: true,     // Zorgt ervoor dat veranderingen automatisch worden geladen
        reloadOnRestart: true,   // Herstart de pagina bij een herstart van de server
    });

    // Bekijk de SCSS-bestanden en compileer ze
    gulp.watch('assets/scss/**/*.scss', styles);
    gulp.watch('site/templates/**/*.php').on('change', browserSyncInstance.reload);
    gulp.watch('assets/images/**/*', images).on('change', browserSyncInstance.reload);
}

async function build() {
    await images();
    await styles();
}

export { watchAll as dev };
export { styles };
export { images };
export { build };
