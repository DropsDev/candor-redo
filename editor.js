var editor = {};
var styleurl = "assets/css/app.css";
var allCss = ""
var path = ""
function jsload(file, name) {
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
                editor =
                    grapesjs.init({
                        container: '#gjs',
                        components: page.html,
                        style: page.css,
                        storageManager:
                        {
                            autosave: false
                        },
                    });
                // editor.getComponents().add('<link rel="stylesheet" href="http://localhost:8888/candor-redo/assets/css/app.css">');
                $("#txtCurrent").html(name)
            }
        }
    }
    styleFile.send(null);
    rawFile.send(null);
}
function jsSave() {
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
        },
        error: function (jqXhr) {
            toastr.error("Page Failed")
        }
    })
}
jsload("views/home.html", "Home")
var btn = document.getElementById("page-button");

var dropdown = document.querySelector(".dropdown-options");
var optionLinks = document.querySelectorAll(".option a");
console.log(optionLinks);

btn.addEventListener("click", function(e) {
   e.preventDefault();
   console.log("btn");
   dropdown.classList.toggle("open");
});

var clickFn = function(e) {
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