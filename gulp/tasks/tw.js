import { spawn } from "child_process";

export const tailwind = (done) => {
	const src = app.path.src.css;
	const outNormal = app.path.build.css + "tailwind.css";
	const outMin = app.path.build.css + "tailwind.min.css";

	// DEV MODE
	if (app.isDev) {
		const devArgs = ["-i", src, "-o", outNormal, "--watch"];

		spawn("npx", ["tailwindcss", ...devArgs], {
			shell: true,
			stdio: "inherit",
		});

		done();
		return;
	}

	// BUILD MODE
	const normalArgs = ["-i", src, "-o", outNormal];

	const normal = spawn("npx", ["tailwindcss", ...normalArgs], {
		shell: true,
		stdio: "inherit",
	});

	normal.on("close", () => {
		const minArgs = ["-i", src, "-o", outMin, "--minify"];

		const minified = spawn("npx", ["tailwindcss", ...minArgs], {
			shell: true,
			stdio: "inherit",
		});

		minified.on("close", () => done());
	});
};
