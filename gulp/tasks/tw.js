import { spawn } from "child_process";

export const tailwind = (done) => {
	const input = app.path.src.css;
	const outNormal = app.path.build.css + "tailwind.css";
	const outMin = app.path.build.css + "tailwind.min.css";

	// Команда для обычного (не минифицированного)
	const baseArgs = ["-i", input, "-o", outNormal];

	// Dev → используем watch + одну версию файла
	if (app.isDev) {
		const devArgs = [...baseArgs, "--watch"];

		spawn("npx", ["tailwindcss", ...devArgs], {
			shell: true,
			stdio: "inherit",
		});

		done(); // watch остаётся висеть
		return;
	}

	// =======================
	// BUILD MODE
	// =======================

	// 1. Генерируем обычный CSS
	const normal = spawn("npx", ["tailwindcss", ...baseArgs], {
		shell: true,
		stdio: "inherit",
	});

	normal.on("close", () => {
		// 2. После генерации запускаем минификацию отдельно
		const minArgs = ["-i", input, "-o", outMin, "--minify"];

		const minified = spawn("npx", ["tailwindcss", ...minArgs], {
			shell: true,
			stdio: "inherit",
		});

		minified.on("close", () => {
			done();
		});
	});
};
