var path = require("path");
var settings = require('./settings');

module.exports = {
  entry: {
    App: settings.themeLocation + "scripts/App.js",
    Vendor: settings.themeLocation + "scripts/Vendor.js"
  },
  output: {
    path: path.resolve(__dirname, settings.themeLocation + "scripts-bundled"),
    filename: "[name]-bundle.js"
  },
  module: {
    loaders: [
      {
        loader: "babel-loader",
        query: {
          presets: ["@babel/preset-env"]
        },
        test: /\.js$/,
        exclude: /node_modules/
      }
    ]
  }
};
