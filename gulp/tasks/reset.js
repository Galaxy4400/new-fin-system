import { deleteAsync } from 'del';

export const reset = () => deleteAsync(app.path.cleanCss);

// export const reset = () => {
//   if (app.isDev) {
//     return deleteAsync(app.path.cleanCss);
//   }

//   if (app.isBuild) {
//     return deleteAsync(app.path.clean);
//   }
// };
