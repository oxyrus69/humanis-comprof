// get-structure.js
const fs = require("fs");
const path = require("path");

// Folder yang akan diabaikan agar hasil rapi
const IGNORE_DIRS = [
  ".git",
  "node_modules",
  ".next",
  ".vercel",
  "dist",
  "build",
  "public",
];

function generateTree(dir, prefix = "") {
  let result = "";
  let files;

  try {
    files = fs.readdirSync(dir);
  } catch (err) {
    return result;
  }

  // Urutkan: folder di atas, file di bawah
  files.sort((a, b) => {
    const aIsDir = fs.statSync(path.join(dir, a)).isDirectory();
    const bIsDir = fs.statSync(path.join(dir, b)).isDirectory();
    if (aIsDir && !bIsDir) return -1;
    if (!aIsDir && bIsDir) return 1;
    return a.localeCompare(b);
  });

  // Filter folder yang diabaikan
  files = files.filter((file) => !IGNORE_DIRS.includes(file));

  files.forEach((file, index) => {
    const filePath = path.join(dir, file);
    const stats = fs.statSync(filePath);
    const isLast = index === files.length - 1;
    const pointer = isLast ? "└── " : "├── ";

    result += `${prefix}${pointer}${file}\n`;

    if (stats.isDirectory()) {
      const newPrefix = prefix + (isLast ? "    " : "│   ");
      result += generateTree(filePath, newPrefix);
    }
  });

  return result;
}

console.log("Membaca struktur proyek...");
const tree = "Struktur Proyek Seek-Customer:\n\n" + generateTree(__dirname);

fs.writeFileSync("project-structure.txt", tree);
console.log("✅ Selesai! File 'project-structure.txt' berhasil dibuat.");
