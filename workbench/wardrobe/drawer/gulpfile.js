var gulp = require('gulp'),
    sass = require('gulp-ruby-sass')
    autoprefix = require('gulp-autoprefixer')
    concat = require('gulp-concat')
    notify = require("gulp-notify");

var config = {
    bowerDir: './bower_components',
    sass: {
        watch: './assets/sass',
        themes: [
          './assets/sass/light.sass',
          './assets/sass/dark.sass'
        ]
    }
}

// Compile into the base laravel to prevent us from
// having to keep publishing assets.
gulp.task('css', function() {
  config.sass.themes.forEach(function (theme) {
    return gulp.src(theme)
    .pipe(sass({ style: 'compressed' })
      .on("error", notify.onError(function (error) {
        return "Error: " + error.message;
      })))
    .pipe(autoprefix('last 2 version'))
    .pipe(gulp.dest('../../../public/packages/wardrobe/drawer/css'))
    .pipe(gulp.dest('./public/css'));
  })
});

gulp.task('js', function(){
    return gulp.src([
        config.bowerDir+'/jquery/dist/jquery.js',
        config.bowerDir+'/moment/moment.js',
        './assets/js/**/*.js'
    ])
        .pipe(concat('app.js'))
        .pipe(gulp.dest('../../../public/packages/wardrobe/drawer/js'))
        .pipe(gulp.dest('./public/js'));
})

// Rerun the task when a file changes
gulp.task('watch', function() {
    gulp.watch(config.sass.watch + '/**/*.sass', ['css']);
    gulp.watch('./assets/js/**/*.js', ['js']);
});

gulp.task('default', function() {
    gulp.start('css', 'js');
});