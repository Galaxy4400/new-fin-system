import { spawn } from "child_process";

export const tailwind = (done) => {
	const src = app.path.src.css;
	const outNormal = app.path.build.css + "tailwind.css";
	const outMin = app.path.build.css + "tailwind.min.css";

	const normal = spawn("npx", ["tailwindcss", "-i", src, "-o", outNormal], {
		shell: true,
		stdio: "inherit",
	});

	normal.on("close", () => {
		const minified = spawn("npx", ["tailwindcss", "-i", src, "-o", outMin, "--minify"], {
			shell: true,
			stdio: "inherit",
		});

		minified.on("close", () => done());
	});
};
