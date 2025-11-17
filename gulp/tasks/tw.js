import { exec } from "child_process";
import { join } from "path";

export const tailwind = (done) => {
	const input = join(app.path.src.css);
	const output = join(app.path.build.css, "tailwind.css");

	exec(`npx tailwindcss -i ${input} -o ${output} --watch`, (err) => {
		if (err) console.log(err);
	});
	done();
};
