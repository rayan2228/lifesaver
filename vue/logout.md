### This file is for logout on localstorage 

``` vue

 logout() {
            localStorage.removeItem('users')
            this.$router.push({
                name: "Login"
            })
        }

```