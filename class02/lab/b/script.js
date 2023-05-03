function calcular() {
  // Obtener los valores ingresados por el usuario
  const num1 = parseFloat(document.getElementById("num1").value);
  const num2 = parseFloat(document.getElementById("num2").value);
  const num3 = parseFloat(document.getElementById("num3").value);
  const num4 = parseFloat(document.getElementById("num4").value);

  // Calcular la suma de los dos primeros números
  const suma = num1 + num2;

  // Calcular el producto del tercer y cuarto número
  const producto = num3 * num4;

  // Mostrar los resultados en la página
  document.getElementById("suma").textContent = suma;
  document.getElementById("producto").textContent = producto;
}
