import fs from 'fs';
import path from 'path';

const getFolders = (dir) => {
  try {
    return fs.readdirSync(dir).filter((file) => {
      return fs.statSync(path.join(dir, file)).isDirectory();
    });
  } catch (err) {
    return [];
  }
};

export default getFolders;