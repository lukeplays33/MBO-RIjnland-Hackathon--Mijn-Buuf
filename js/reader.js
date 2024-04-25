function opslaan(e) {
  e.preventDefault();
  e.stopPropagation();
  const form = document.getElementById("vragenlijst");
  const submitter = document.querySelector(".verder");
  const formData = new FormData(vragenlijst, submitter);

const output = document.getElementById("output");

for (const [key, value] of formData) {
  output.textContent += `${key}: ${value}\n`;
} 
}