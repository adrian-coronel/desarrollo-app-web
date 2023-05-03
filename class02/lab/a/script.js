function showInfo() {
  // Get the values entered by the user
  const name = document.getElementById("name").value;
  const email = document.getElementById("email").value;

  // Display the entered info
  document.getElementById("info").textContent = `Name: ${name}\nEmail: ${email}`;
}
