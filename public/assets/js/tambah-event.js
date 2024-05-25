// Mengatur Option
const CustomSelect = document.querySelectorAll(".form-select");
console.log(CustomSelect);

// Untuk Form Cover Event
const previewImage = document.getElementById("formFile");
const preview = document.getElementById("preview");
const modal = new bootstrap.Modal(document.getElementById("imageModal"));
const modalImage = document.getElementById("modalImage");

// Untuk Form Foto Acara
const previewImg = document.getElementById("previewimg");
const previewFoto = document.getElementById("previewFoto");
const modalpreview = new bootstrap.Modal(
    document.getElementById("previewModal")
);
const modalImg = document.getElementById("modalImg");

// Mengatur Option
CustomSelect.forEach((select) => {
    const customOption = select.querySelectorAll("option");
    customOption.forEach((element) => {
        element.classList.add("custom-option");
    });
});

// Form Cover Event
previewImage.addEventListener("change", (event) => {
    const [file] = event.target.files;
    if (file) {
        preview.src = URL.createObjectURL(file);
        preview.style.display = "block";
    }
});
preview.addEventListener("click", function () {
    modalImage.src = preview.src;
    modal.show();
});

// Form FOto Acara
previewFoto.addEventListener("change", (event) => {
    const [file] = event.target.files;
    if (file) {
        previewImg.src = URL.createObjectURL(file);
        previewImg.style.display = "block";
    }
});
previewImg.addEventListener("click", function () {
    modalImg.src = previewImg.src;
    modalpreview.show();
});
