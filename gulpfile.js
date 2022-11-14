//gulp.〇〇の処理は全部定数でまとめる
const {
    src,
    dest,
    watch,
    lastRun,
    series,
    parallel
} = require("gulp");

// Sass
const sass = require("gulp-dart-sass");
const notify = require("gulp-notify");
const plumber = require("gulp-plumber");
const postCss = require("gulp-postcss"); //for autoprefixer
const autoprefixer = require("autoprefixer");
const gcmq = require("gulp-group-css-media-queries");

// ブラウザ同期
const browserSync = require("browser-sync").create();

//パス設定
const paths = {
    styles: {
        assets: "./assets/scss/**/*.scss",
        map: "./map",
    },
    scripts: {
        assets: "./assets/js/**/*.js",
    },
    images: {
        assets: "./assets/img/**/*.{jpg,jpeg,png,gif,svg",
    },
};

//Sassコンパイル
const sassCompile = () => {
    return src(paths.styles.assets, {
        sourcemaps: true,
    })
        .pipe(
            plumber({
                errorHandler: notify.onError("Error: <%= error.message %>"),
            })
        )
        .pipe(
            sass({
                outputStyle: "expanded",
            }).on("error", sass.logError)
        )
        .pipe(
            postCss([
                autoprefixer({
                    // プロパティのインデントを整形しない
                    cascade: false,
                    // IE11のgrid対応
                    grid: "autoplace",
                }),
            ])
        )
        //メディアクエリをまとめる
        .pipe(gcmq())
        .pipe(
            dest("assets/css", {
                sourcemaps: "./map",
            })
        )
        // 変更があったらリロードせずにCSSのみ更新
        .pipe(browserSync.stream())
}

// ローカルサーバー起動
const browserSyncFunc = (done) => {
    browserSync.init({
        proxy: "engress.local",
        notify: false,
        open: "external",
        // server: {
        //     baseDir: "./",
        // },
        // startPath: "index.html",
        reloadOnRestart: true,
    });
    done();
};

// ブラウザ自動リロード
const browserReloadFunc = (done) => {
    browserSync.reload();
    done();
};

// ファイル監視
const watchFiles = () => {
    watch("**/*.php", series(browserReloadFunc));
    watch("**/*.html", series(browserReloadFunc));
    watch(paths.styles.assets, series(sassCompile));
    watch(paths.scripts.assets, series(browserReloadFunc));
    watch(paths.images.assets, series(browserReloadFunc));
}
// npx gulp実行処理
exports.default = series(
    parallel(sassCompile),
    parallel(watchFiles, browserSyncFunc)
);