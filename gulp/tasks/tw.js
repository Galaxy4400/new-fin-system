import { spawn } from "child_process";

export const tailwind = (done) => {
	const input = app.path.src.css;
	const output = app.path.build.css + "tailwind.css";

	const args = ["-i", input, "-o", output];

	if (app.isDev) {
		args.push("--watch");
	}

	const tw = spawn("npx", ["tailwindcss", ...args], {
		shell: true,
		stdio: "inherit",
	});

	if (app.isBuild) tw.on("close", done);
	if (app.isDev) done();
};
