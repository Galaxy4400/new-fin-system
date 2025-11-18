import { deleteAsync } from 'del';

export const reset = () => {
  if (app.isDev) {
    return deleteAsync(app.path.cleanCss);
  }

  if (app.isBuild) {
    return deleteAsync(app.path.clean);
  }
};
