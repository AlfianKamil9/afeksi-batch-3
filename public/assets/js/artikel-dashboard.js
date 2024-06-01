// CK Editor
CKEDITOR.replace("editor1");

// Mengatur Option
const CustomSelect = document.querySelectorAll(".form-select");
console.log(CustomSelect);

// Untuk Form Cover Event
const previewImage = document.getElementById("formFile");
const preview = document.getElementById("preview");
const modal = new bootstrap.Modal(document.getElementById("imageModal"));
const modalImage = document.getElementById("modalImage");

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
