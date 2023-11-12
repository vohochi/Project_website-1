const form = document.getElementById('form');
const email = document.getElementById('email');
const password = document.getElementById('password');
const password2 = document.getElementById('password2');

// hien thi loi
function showError(input, message) {
  const formControl = input.parentElement;
  formControl.className = 'form-control error';
  const small = formControl.querySelector('small');
  small.innerText = message;
}
// Thanh cong
function showSuccess(input) {
  const formControl = input.parentElement;
  formControl.className = 'form-control success';
}
// email
function checkEmail(input) {
  const regex =
    /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
  if (regex.test(input.value.trim())) {
    showSuccess(input);
  } else {
    showError(input, 'Email khong dung dinh dang');
  }
}

// check required fields
function checkRequired(inputArr) {
  inputArr.forEach((input) => {
    if (input.value.trim() === '') {
      showError(input, `${getFieldName(input)} is required`);
    } else {
      showSuccess(input);
    }
  });
}
// check input length
function checkLenght(input, min, max) {
  if (input.value.length < min) {
    showError(
      input,
      `${getFieldName(input)} must be at least ${min} characters`
    );
  } else if (input.value.length > max) {
    showError(
      input,
      `${getFieldName(input)} must be at less than ${max} characters`
    );
  } else {
    showSuccess(input);
  }
}
//check password
function checkPassword(input1, input2) {
  if (input1.value !== input2.value) {
    showError(input2, 'Mật khẩu không không trùng khớp');
  }
}
// get field name
function getFieldName(input) {
  return input.id.charAt(0).toUpperCase() + input.id.slice(1);
}

form.addEventListener('submit', function (e) {
  e.preventDefault();
  checkRequired([name, email, password, password2]);
  checkLenght(name, 3, 15);
  checkLenght(password, 6, 25);
  checkEmail(email);
  checkPassword(password, password2);
});
