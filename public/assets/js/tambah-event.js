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

const time = document.getElementById("timeStart");

time.addEventListener("focus", () => {
    time.ariaLabel = "WIB";
});

console.log(time);

const timeInput = document.getElementById("timeStart");

timeInput.addEventListener("change", function () {
    const inputTime = this.value;
    if (inputTime) {
        const timeParts = inputTime.split(":");
        let hours = parseInt(timeParts[0]);
        const minutes = timeParts[1];

        // Assuming the input time is in local time and needs to be converted to WIB (GMT+7)
        // Adjust this logic if your input is in a different timezone
        let date = new Date();
        date.setHours(hours);
        date.setMinutes(minutes);

        // Calculate the difference between the local time zone and WIB (GMT+7)
        const localOffset = date.getTimezoneOffset(); // in minutes
        const wibOffset = -420; // WIB is GMT+7 which is -420 minutes from UTC

        // Convert local time to WIB time
        date.setMinutes(date.getMinutes() + localOffset - wibOffset);

        hours = date.getHours();
        const wibTime = `${hours.toString().padStart(2, "0")}:${minutes}`;
        this.value = wibTime;

        // Update the appended text to display timezone
        const timezone = this.getAttribute("data-timezone");
        const appendedText = this.nextElementSibling;
        appendedText.textContent = timezone;
    }
});
