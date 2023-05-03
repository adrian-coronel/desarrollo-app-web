function calculate() {
  // Get the values entered by the user
  const num1 = parseFloat(document.getElementById("num1").value);
  const num2 = parseFloat(document.getElementById("num2").value);

  // Check if the first number is greater than the second
  if (num1 > num2) {
    // Calculate the sum and difference
    const sum = num1 + num2;
    const difference = num1 - num2;

    // Display the results on the page
    document.getElementById("sum").textContent = `The sum is ${sum}`;
    document.getElementById("difference").textContent = `The difference is ${difference}`;
    document.getElementById("product").textContent = "";
    document.getElementById("quotient").textContent = "";
  } else {
    // Calculate the product and quotient
    const product = num1 * num2;
    const quotient = num1 / num2;

    // Display the results on the page
    document.getElementById("sum").textContent = "";
    document.getElementById("difference").textContent = "";
    document.getElementById("product").textContent = `The product is ${product}`;
    document.getElementById("quotient").textContent = `The quotient is ${quotient}`;
  }
}
