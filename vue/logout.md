### This file is for logout on localstorage 

`````

 logout() {
            localStorage.removeItem('users')
            this.$router.push({
                name: "Login"
            })
        }

`````