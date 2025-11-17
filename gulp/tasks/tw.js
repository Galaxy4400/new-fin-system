import { exec } from "child_process";
import { join } from "path";

export const tailwind = (done) => {
	const input = join(app.path.src.css);
	const output = join(app.path.build.css, "tailwind.css");

	if (app.isBuild) {
		exec(`npx tailwindcss -i ${input} -o ${output}`, (err, stdout, stderr) => {
			if (err) console.log(err);
			if (stdout) console.log(stdout);
			if (stderr) console.log(stderr);
			done();
		});
	}

	if (app.isDev) {
		exec(`npx tailwindcss -i ${input} -o ${output} --watch`, (err) => {
			if (err) console.log(err);
		});
		done();
	}
};
