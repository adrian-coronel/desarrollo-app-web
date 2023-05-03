function calculate() {
  // Get the values entered by the user
  const note1 = parseFloat(document.getElementById("note1").value);
  const note2 = parseFloat(document.getElementById("note2").value);
  const note3 = parseFloat(document.getElementById("note3").value);

  // Calculate the average
  const average = (note1 + note2 + note3) / 3;

  // Check if the average is greater than or equal to 4
  if (average >= 4) {
    // Display a message indicating that the student passed
    document.getElementById("message").textContent = "Regular";
  } else {
    // Display a message indicating that the student failed
    document.getElementById("message").textContent = "Reprobated";
  }
}
