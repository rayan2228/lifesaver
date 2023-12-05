### this file is for validation

``` vue
login() {
            if (this.email === "" || this.password === "") {
                this.errors.nameError = "name value is null"
                this.errors.emailError = "email value is null"
                this.errors.passwordError = "password value is null"
            } else {
                if (this.email === "") {
                    this.errors.emailError = "email value is null"
                } else if (this.password === "") {
                    this.errors.passwordError = "password value is null"
                } else {
                    let getValue = localStorage.getItem('users')
                    if (getValue) {
                        let getData = JSON.parse(localStorage.getItem('users'))
                        if (this.email !== getData.email || this.password !== getData.password) {
                            alert('your given credentials did not matched!')
                            console.log('your given credentials did not matched!');
                        } else {
                            this.$router.push({
                                name: "Ticket"
                            })
                        }
                    } else {
                        alert('your given credentials did not matched!')
                        console.log('your given credentials did not matched!');
                    }
                }
            }
        }

```