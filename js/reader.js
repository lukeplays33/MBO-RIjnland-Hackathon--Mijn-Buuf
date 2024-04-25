function opslaan(e) {
    const form = document.getElementById("vragenlijst");
    const submitter = document.querySelector(".verder");
    const formData = new FormData(vragenlijst, submitter);
    console.log(formData)

    const output = document.getElementById("output");

    for (const [key, value] of formData) {
        output.textContent += `${key}: ${value}\n`;
    }
}