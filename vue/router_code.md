### This File is show how to create vue router file

#### Also Here we see that how to make 404 page 
````
import { createWebHistory,createRouter } from "vue-router";
import Home from "./components/Home.vue";
import signUp from "./components/signUp.vue";
import nopage from "./components/404.vue";
import Login from "./components/Login.vue";
import ShowList from "./components/ShowList.vue";

const routes = [
    {
        name : "signUp",
        path:'/',
        component: signUp
    },
    {
        name: "Home",
        path:'/home',
        component: Home
    },
    {
        name: "404",
        path:'/:PathMatch(.*)*',
        component: nopage
    },
    {
        name: "Login",
        path:'/login',
        component: Login
    },
    {
        name: "ShowList",
        path:'/list',
        component: ShowList
    },
];

const router = createRouter({
    history:createWebHistory(),
    routes
});

export default router;

````