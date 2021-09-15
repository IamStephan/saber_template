const path = require("path");
const fs = require("fs");

function extractFiles(_key, value) {
  switch (typeof value) {
    case "string": {
      if (/.+\.(?:(css))/.test(value)) {
        return value;
      }
      break;
    }

    case "object": {
      return value;
    }
  }
}

function getManifest() {
  const manifestData = fs.readFileSync(
    path.resolve(process.cwd(), "./dist/parcel-manifest.json"),
    "utf8"
  );

  return JSON.parse(manifestData, extractFiles);
}

function generateProjectFiles() {
  const manifest = getManifest();

  console.log(manifest);
}

generateProjectFiles();
