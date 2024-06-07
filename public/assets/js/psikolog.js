const pilihFIle = document.getElementById("pilihfile");

console.log(pilihFIle);
const fileInput = document.getElementById("fileInput");
console.log(fileInput);

const hapusFile = document.getElementById("hapusfile");
console.log(hapusFile);
pilihFIle.addEventListener("click", function () {
    fileInput.click();
});

fileInput.addEventListener("change", function (event) {
    const file = event.target.files[0];
    if (file) {
        const reader = new FileReader();
        const imgPsikolog = document.getElementById("image");
        reader.onload = function (e) {
            imgPsikolog.src = e.target.result;
        };
        reader.readAsDataURL(file);
    }
});

hapusFile.addEventListener("click", function () {
    const imgPsikolog = document.getElementById("image");
    imgPsikolog.src = "/assets/img/admin/profile.png";
});
