### Defining Resource Routes

> Resource routes in Laravel are defined using the Route::resource method.

```
Route::resource('posts', PostController::class);

```

### Here is the ex: how to work resourcefull controller methods ->

```
        'index' => 'posts.list',
        'show' => 'posts.view',
        'create' => 'posts.add',
        'edit' => 'posts.edit',
        'update' => 'posts.update',
        'store' => 'posts.save',
        'destroy' => 'posts.delete',
        
```