### Dynamic Navbar

``` laravel
{{ (\Request::route()->getName() == 'profile.index') ? 'active' : '' }}

```
