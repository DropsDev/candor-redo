var styleurl = "assets/css/app.css";
var allCss = "";
var path = "";
var l = "";
var d = new Date();
var editor = {}
function jsload(file, name) {
    loading();
    path = file;
    var styleFile = new XMLHttpRequest();
    styleFile.open("GET", styleurl, false);
    styleFile.onreadystatechange = function () {
        if (styleFile.readyState === 4) {
            if (styleFile.status === 200 || styleFile.status == 0) {
                allCss = styleFile.responseText;
            }
        }
    }
    var rawFile = new XMLHttpRequest();
    rawFile.open("GET", file, false);
    rawFile.onreadystatechange = function () {
        if (rawFile.readyState === 4) {
            if (rawFile.status === 200 || rawFile.status == 0) {
                var allText = rawFile.responseText;
                const page = {
                    html: allText,
                    css: allCss
                };
                editor = grapesjs.init({
                    container: '#gjs',
                    components: page.html,
                    style: page.css,
                    storageManager:
                    {
                        autosave: false
                    },
                    assetManager: {
                        upload: 'upload.php',
                        uploadName: "file",
                        multiUpload: false,
                    },
                });

                const am = editor.AssetManager;
                editor.on('asset:upload:start', (response) => {
                    console.log(response)
                    loading();
                });
                editor.on('asset:upload:end', (response) => {
                    console.log(response)
                    am.add(response);
                    stopLoading();
                });
                editor.on('asset:upload:error', (err) => {
                    console.log(err)
                    toastr.error("An error occurred");
                });
                editor.on('asset:upload:response', (response) => {
                });
                stopLoading()
            }
        }
    }
    styleFile.send(null);
    rawFile.send(null);
}
function jsSave() {
    l.start();
    $content = editor.getHtml();
    $.ajax({
        type: 'POST',
        url: "writer.php",
        dataType: "html",
        data: {
            data: $content,
            location: path
        },
        success: function (data) {
            toastr.success("Page Updated")
            l.stop();
        },
        error: function (jqXhr) {
            toastr.error("Page Update Failed");
            l.stop();
        }
    })
}
function stopLoading() {
    document.getElementById('popup').style.display = 'none';
    document.getElementById('mask').style.display = 'none';
}
function loading() {
    document.getElementById('mask').style.display = 'block';
}

$(document).ready(function () {
    l = Ladda.create(document.getElementById('submit-button'));
    jsload("views/home.html", "Home")
    var btn = document.getElementById("page-button");
    var dropdown = document.querySelector(".dropdown-options");
    var optionLinks = document.querySelectorAll(".option a");
    btn.addEventListener("click", function (e) {
        e.preventDefault();
        dropdown.classList.toggle("open");
    });

    var clickFn = function (e) {
        e.preventDefault();

        dropdown.classList.remove("open");

        btn.innerHTML = this.text;
        var activeLink = document.querySelector(".option .active")

        if (activeLink) {
            activeLink.classList.remove("active");
        }

        this.classList.add("active");
    }

    for (var i = 0; i < optionLinks.length; i++) {
        optionLinks[i].addEventListener("mousedown", clickFn, false);
    }
})