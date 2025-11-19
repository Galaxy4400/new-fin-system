import fs from 'fs/promises';

export const isNewer = async (src, dist) => {
  try {
    const [srcStat, distStat] = await Promise.all([fs.stat(src), fs.stat(dist)]);

    return distStat.mtimeMs >= srcStat.mtimeMs;
  } catch {
    return false;
  }
};
