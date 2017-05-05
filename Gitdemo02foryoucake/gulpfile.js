var gulp = require("gulp");

gulp.task("copemycake1",function(){
	gulp.src("*").pipe(gulp.dest("D:/phpStudy/WWW"))
	gulp.src("css/*").pipe(gulp.dest("D:/phpStudy/WWW/css"))
	gulp.src("font/*").pipe(gulp.dest("D:/phpStudy/WWW/font"))
	gulp.src("html/*").pipe(gulp.dest("D:/phpStudy/WWW/html"))
	gulp.src("img/one/*").pipe(gulp.dest("D:/phpStudy/WWW/img/one"))
	gulp.src("js/*").pipe(gulp.dest("D:/phpStudy/WWW/js"))
	gulp.src("scss/*").pipe(gulp.dest("D:/phpStudy/WWW/scss"))
	gulp.src("vidio/*").pipe(gulp.dest("D:/phpStudy/WWW/vidio"))
	gulp.src("php/*").pipe(gulp.dest("D:/phpStudy/WWW/php"))
	
})

gulp.task("copemycake2",function(){
	gulp.src("*").pipe(gulp.dest("Gitdemo02foryoucake"))
	gulp.src("css/*").pipe(gulp.dest("Gitdemo02foryoucake/css"))
	gulp.src("font/*").pipe(gulp.dest("Gitdemo02foryoucake/font"))
	gulp.src("html/*").pipe(gulp.dest("Gitdemo02foryoucake/html"))
	gulp.src("img/one/*").pipe(gulp.dest("Gitdemo02foryoucake/img/one"))
	gulp.src("js/*").pipe(gulp.dest("Gitdemo02foryoucake/js"))
	gulp.src("scss/*").pipe(gulp.dest("Gitdemo02foryoucake/scss"))
	gulp.src("vidio/*").pipe(gulp.dest("Gitdemo02foryoucake/vidio"))
	gulp.src("php/*").pipe(gulp.dest("Gitdemo02foryoucake/php"))
	
})
gulp.task("watchall",function(){
	gulp.watch(["*","css/*","font/*","html/*","img/one/*","js/*","scss/*","vidio/*","php/*"],["copemycake1","copemycake2"]);
});
