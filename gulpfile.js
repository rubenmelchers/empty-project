var gulp = require("gulp"),
	sass = require("gulp-sass"),
	uglify = require("gulp-uglify"),
	gulpIf = require("gulp-if"),
	concat = require("gulp-concat"),
	imagemin = require("gulp-imagemin"),
	cache = require("gulp-cache"),
	autoprefixer = require("gulp-autoprefixer"),
	sourcemaps = require("gulp-sourcemaps"),
	csso = require("gulp-csso");


/* NAME OF PROJECT HERE */
var destination = "destination"

var path = {
	sasssrc: "dist/scss/**/*.scss",
	sassdest: destination + "/css",

	scriptsrc: [
		"dist/script/main2.js",
		"dist/script/**/*.js"
	],
	scriptdest: destination + "/js",

	imgsrc: "dist/img/**/*.+(png|jpg|gif|svg)",
	imgdest: destination + "/img"
}

gulp.task("sass", function() {
	return gulp.src(path.sasssrc)
		.pipe(sass())
		.pipe(autoprefixer({
			browsers: ["last 2 versions"],
			cascade: false
		}))
		.pipe(csso({
			restructure: true,
			sourceMap: true,
			debug: false
		}))
		.pipe(gulp.dest(path.sassdest))
});

gulp.task("scripts", function() {
	return gulp.src(path.scriptsrc)
		.pipe(sourcemaps.init())
			.pipe(concat('main.min.js'))
			.pipe(uglify())
		.pipe(sourcemaps.write())
		.pipe(gulp.dest(path.scriptdest))
});

gulp.task("images", function() {
	return gulp.src(path.imgsrc)
		.pipe(cache(imagemin({
			interlaced: true
		}))
		.pipe(gulp.dest(path.imgdest)))
});

gulp.task("watch", function() {
	gulp.watch(path.sasssrc, ["sass"]);
	gulp.watch(path.scriptsrc, ["scripts"]);
	gulp.watch(path.imgsrc, ["images"]);
});

gulp.task('default', ['watch'] );