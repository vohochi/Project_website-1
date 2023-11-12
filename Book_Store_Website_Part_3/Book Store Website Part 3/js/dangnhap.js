const form = document.getElementById('form-login');
const username = document.getElementById('username');
const password = document.getElementById('password');

form.addEventListener('submit', function (e) {
  e.preventDefault();
  checkRequired([username, password]);
});
//loi
function showError(input, message) {
  const formgroup = input.parentElement;
  formgroup.className = 'form-group error';
  const small = formgroup.querySelector('small');
  small.innerText = message;
}
// Thanh cong
function showSuccess(input) {
  console.log(input.parentElement);
  const formgroup = input.parentElement;
  formgroup.className = 'form-group success';
}

// get fieldName
function getFieldName(input) {
  return input.id.charAt(0).toUpperCase() + input.id.slice(1);
}
function checkRequired(input) {
  input.forEach((e) => {
    if (e.value.trim() === '') {
      showError(e, `Nhập ${getFieldName(e)}  `);
    } else {
      showSuccess(e);
    }
  });
}
