function findLargest() {
  // Get the values entered by the user
  const number1 = parseFloat(document.getElementById("number1").value);
  const number2 = parseFloat(document.getElementById("number2").value);
  const number3 = parseFloat(document.getElementById("number3").value);

  // Find the largest number
  let largest = number1;

  if (number2 > largest) {
    largest = number2;
  }

  if (number3 > largest) {
    largest = number3;
  }

  // Display the largest number
  document.getElementById("message").textContent = `The largest number is ${largest}.`;
}
