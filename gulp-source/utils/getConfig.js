import fs from 'fs';
import path from 'path';

export const CONFIG_PATH = path.resolve(process.cwd(), 'app/config/config_prod.yml');

export default function getConfig() {
  const ymlPath = path.resolve(process.cwd(), 'app/config/config_prod.yml');
  
  if (fs.existsSync(ymlPath)) {
    try {
      const content = fs.readFileSync(ymlPath, 'utf8');
      // version: 'v4.0.307' veya version: "v4.0.307" veya version: v4.0.307 eşleşmesi
      const match = content.match(/version:\s*['"]?([^'"\s\n]+)['"]?/);
      if (match && match[1]) {
        return {
          framework: {
            assets: {
              version: match[1]
            }
          }
        };
      }
    } catch (e) {
      console.error('config_prod.yml okuma hatası:', e);
    }
  }

  // Yedek olarak config/*.json dosyalarını kontrol et
  const env = process.env.NODE_ENV || 'default';
  const jsonPath = path.resolve(process.cwd(), `config/${env}.json`);
  if (fs.existsSync(jsonPath)) {
    try {
      return JSON.parse(fs.readFileSync(jsonPath, 'utf8'));
    } catch (e) {}
  }

  return {};
}