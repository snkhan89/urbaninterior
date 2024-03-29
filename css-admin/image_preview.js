// JavaScript Document
(function (global) {
    var imagesPerRow = 5,
        chooseFiles,
        columns,
        previews;

    function windowLoadHandler() {
        global.removeEventListener("load", windowLoadHandler);
        chooseFiles = document.getElementById("chooseFiles");
        columns = document.getElementById("columns");
        previews = document.getElementById("previews");

        var row = columns.insertRow(),
            header,
            i;

        for (i = 0; i < imagesPerRow; i += 1) {
            header = row.insertCell();
            header.style.width = (100 / imagesPerRow) + "%";
        }

        chooseFiles.addEventListener("change", PreviewImages, false);
    }    
    
    function PreviewImages() {
        var row;

        Array.prototype.forEach.call(chooseFiles.files, function (file, index) {
            var cindex = index % imagesPerRow,
                oFReader = new FileReader(),
                cell,
                image;

            if (cindex === 0) {
                row = previews.insertRow(Math.ceil(index / imagesPerRow));
            }

            image = document.createElement("img");
            image.id = "img_" + index;
            image.style.width = "100px";
            image.style.height = "auto";
		
            cell = row.insertCell(cindex);
            cell.appendChild(image);

            oFReader.addEventListener("load", function (evt) {
                console.log("loaded");
                image.src = evt.target.result;
                this.removeEventListener("load");
            }, false);

            oFReader.readAsDataURL(file);
        });
    }

    global.addEventListener("load", windowLoadHandler, false);
}(window));
$(document).ready(function(e) {
	$("#chooseFiles").click(function(e) {
		 $("#previews").find('tr').remove();
	});
});