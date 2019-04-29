
function jsload(file) {
    var rawFile = new XMLHttpRequest();
    rawFile.open("GET", file, false);
    rawFile.onreadystatechange = function () {
        if (rawFile.readyState === 4) {
            if (rawFile.status === 200 || rawFile.status == 0) {
                var allText = rawFile.responseText;
                const page = {
                    html: allText
                };
                const editor = 
                grapesjs.init({
                    container: '#gjs',
                    components: page.html,
                    storageManager:
                    {
                        autosave:false
                    },
                });
                editor.getComponents().add('<link rel="stylesheet" href="http://localhost:8888/candor-redo/assets/css/app.css">');
                  
            }
        }
    }
    rawFile.send(null);
}
jsload("views/home.html")