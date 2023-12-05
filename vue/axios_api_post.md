#### This file is for how to post data with API Axios

``` vue

let submit = await axios.post('http://localhost:3000/users',{
    'name' : this.name,
    'email' : this.email,
    'password' : this.password
});
if(submit.status == 201){
    localStorage.setItem('user-info',JSON.stringify(submit.data))
    alert('information submit successfull')
    this.$router.push({ name : "Home" });
}else{
    alert('information submit unsuccessfull')
}

```