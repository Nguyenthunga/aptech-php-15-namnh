var div = document.getElementById('js-div-an-hien');

function hienDiv() {
  // div.style.display = 'block';
  div.className = 'd-block';
  div.classList.remove('d-none');
}
function anDiv() {
  div.style.display = 'none';
}

function anHienDiv() {
  if (div.style.display === 'none') {
    div.style.display = 'block';
  } else {
    div.style.display = 'none';
  }
}
