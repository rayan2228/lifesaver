### React js Form Validation


import React, { useEffect, useState } from "react";

function RegistrationView() {
  const [inputValues, setInputValue] = useState({
    fName: "",
    lName: "",
    email: "",
    password: "",
    confirmPassword: "",
  });

  const [validation, setValidation] = useState({
    fName: "",
    lName: "",
    email: "",
    password: "",
    confirmPassword: "",
  });

  //handle submit updates
  function handleChange(event) {
    const { name, value } = event.target;
    setInputValue({ ...inputValues, [name]: value });
  }

  const checkValidation = () => {
    let errors = validation;

    first Name validation
    if (!inputValues.fName.trim()) {
      errors.fName = "First name is required";
    } else {
      errors.fName = "";
    }
    //last Name validation
    if (!inputValues.lName.trim()) {
      errors.lName = "Last name is required";
    } else {
      errors.lName = "";
    }

    // email validation
    const emailCond =
      "/^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:.[a-zA-Z0-9-]+)*$/";
    if (!inputValues.email.trim()) {
      errors.email = "Email is required";
    } else if (!inputValues.email.match(emailCond)) {
      errors.email = "Please ingress a valid email address";
    } else {
      errors.email = "";
    }

    //password validation
    const cond1 = "/^(?=.*[a-z]).{6,20}$/";
    const cond2 = "/^(?=.*[A-Z]).{6,20}$/";
    const cond3 = "/^(?=.*[0-9]).{6,20}$/";
    const password = inputValues.password;
    if (!password) {
      errors.password = "password is required";
    } else if (password.length < 6) {
      errors.password = "Password must be longer than 6 characters";
    } else if (password.length >= 20) {
      errors.password = "Password must shorter than 20 characters";
    } else if (!password.match(cond1)) {
      errors.password = "Password must contain at least one lowercase";
    } else if (!password.match(cond2)) {
      errors.password = "Password must contain at least one capital letter";
    } else if (!password.match(cond3)) {
      errors.password = "Password must contain at least a number";
    } else {
      errors.password = "";
    }

    //matchPassword validation
    if (!inputValues.confirmPassword) {
      errors.confirmPassword = "Password confirmation is required";
    } else if (inputValues.confirmPassword !== inputValues.Password) {
      errors.confirmPassword = "Password does not match confirmation password";
    } else {
      errors.password = "";
    }

    setValidation(errors);
  };

  useEffect(() => {
    checkValidation();
  }, [inputValues]);

  const handleSubmit = (e) => {
    e.preventDefault();
  };

  return (
    <div>
      <div className="sign-up-form">
        <form
          id="registrationForm"
          action="/"
          method="POST"
          onSubmit={handleSubmit}
        >
          <div className="form-control">
            <input
              placeholder="First Name"
              type="string"
              name="fName"
              id="fName"
              className="input-field"
              onChange={(e) => handleChange(e)}
              value={inputValues.fName}
            />
            {validation.fName && <p>{validation.fName}</p>}
            {validation.fName && console.log(validation)}
          </div>
          <div className="form-control">
            <input
              placeholder="Last Name"
              type="string"
              id="lName"
              name="lName"
              className="input-field"
              onChange={(e) => handleChange(e)}
              value={inputValues.lName}
            />
            {validation.lName && <p>{validation.lName}</p>}
          </div>
          <div className="form-control">
            <input
              placeholder="email"
              type="email"
              name="email"
              className="input-field"
              onChange={(e) => handleChange(e)}
              value={inputValues.email}
            />
          </div>
          {validation.email && <p>{validation.email}</p>}

          <div className="form-control">
            <input
              placeholder="password"
              type="password"
              name="password"
              className="input-field"
              onChange={(e) => handleChange(e)}
              value={inputValues.password}
              required
            />
            {validation.password && <p>{validation.password}</p>}
          </div>
          <div className="form-control">
            <input
              placeholder="confirm password"
              type="password"
              name="confirmPassword"
              className="input-field"
              onChange={(e) => handleChange(e)}
              value={inputValues.confirmPassword}
              required
            />
          </div>
          <button type="submit" id="submit-button">
            submit
          </button>
          <span className="form-input-login">
            Already have an account? Login <a href="#">here</a>
          </span>
        </form>
      </div>
    </div>
  );
}

export default RegistrationView;
