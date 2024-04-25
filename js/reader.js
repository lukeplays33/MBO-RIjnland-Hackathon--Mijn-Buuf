function opslaan() {const form = document.getElementById("vragenlijst");
const submitter = document.querySelector("button[value=save]");
const formData = new FormData(vragenlijst, submitter);

const output = document.getElementById("output");

for (const [key, value] of formData) {
  output.textContent += `${key}: ${value}\n`;
} 
}