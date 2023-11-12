const form = document.getElementById('form-login');
const name = document.getElementById('name');
const email = document.getElementById('email');
const password = document.getElementById('password');
const password2 = document.getElementById('password2');

// hien thi loi
function showError(input, message) {
  const formgroup = input.parentElement;
  formgroup.className = 'form-group error';
  const small = formgroup.querySelector('small');
  small.innerText = message;
}
// Thanh cong
function showSuccess(input) {
  const formgroup = input.parentElement;
  formgroup.className = 'form-group success';
}
// email
function checkEmail(input) {
  const regex =
    /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
  if (regex.test(input.value.trim())) {
    showSuccess(input);
  } else if (email.value == '') {
    showError(input, 'Yêu cầu nhập email');
  } else {
    showError(input, 'Email Không đúng định dạng');
  }
}
//chek require
function checkRequired(inputArr) {
  inputArr.forEach((input) => {
    if (input.value.trim() === '') {
      showError(input, ` yêu cầu mật khẩu`);
    } else {
      showSuccess(input);
    }
  });
}

// check input length
function checkLenght(input, min, max) {
  if (input.value.length < min) {
    showError(input, `Tối thiểu ${min} kí tự`);
  } else if (input.value.length > max) {
    showError(input, `Tối thiểu${max} kí tự`);
  } else {
    showSuccess(input);
  }
}
// get field name

//kiểm tra mật khẩu
function checkPassword(input1, input2) {
  if (input1.value !== input2.value) {
    showError(input2, 'Mật khẩu không đúng ');
  }
}
// submit
form.addEventListener('submit', function (e) {
  e.preventDefault();
  checkRequired([name, email, password, password2]);
  checkLenght(name, 3, 15);
  checkLenght(password, 6, 25);
  checkEmail(email);
  checkPassword(password, password2);
});
