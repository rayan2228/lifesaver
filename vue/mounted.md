### This file is for mounted localstorage 

``` vue

#### How to store data in localstorage

if(submit.status == 201){
    localStorage.setItem('user-info',JSON.stringify(submit.data))
    alert('information submit successfull')
    this.$router.push({ name : "Home" });
}else{
    alert('information submit unsuccessfull')
}

#### How to get data in localstorage

let user = localStorage.getItem('user-info')

let selectAuth = JSON.parse(localStorage.getItem('users'))
this.authuser = selectAuth.name // here this.authuser is blank array where i push get item data


```