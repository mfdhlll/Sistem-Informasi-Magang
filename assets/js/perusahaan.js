// Preview Logo
function previewImage(event) {

    const file = event.target.files[0];

    if (!file) return;

    const preview = document.getElementById("preview");

    preview.src = URL.createObjectURL(file);

    preview.onload = function () {

        URL.revokeObjectURL(preview.src);

    };

}

// Validasi Upload
function validateLogo(input) {

    const file = input.files[0];

    if (!file) return true;

    const allowed = ["image/png", "image/jpeg"];

    if (!allowed.includes(file.type)) {

        alert("Logo harus JPG atau PNG.");

        input.value = "";

        return false;

    }

    return true;

}