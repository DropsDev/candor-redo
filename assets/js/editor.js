import "@material/top-app-bar/mdc-top-app-bar";
function readTextFile(file) {
  var rawFile = new XMLHttpRequest();
  rawFile.open("GET", file, false);
  rawFile.onreadystatechange = function () {
    if (rawFile.readyState === 4) {
      if (rawFile.status === 200 || rawFile.status == 0) {
        var allText = rawFile.responseText;
        const page = {
          html: allText,
          css: null,
          components: null,
          style: null,
        };
        const editor = grapesjs.init({
          container: '#gjs',
          components:page.html,
          avoidInlineStyle: true
        });
       // editor.load(res => console.log('Load callback'));
      }
    }
  }
  rawFile.send(null);
}
alert(0)