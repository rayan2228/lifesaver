### Create a vercel.json file and paste this code 

``` json
{
  "version": 2,
  "builds": [
    {
      "src": "index.js",
      "use": "@vercel/node"
    }
  ],
  "routes": [
    {
      "src": "/(.*)",
      "dest": "index.js"
    }
  ]
}
```

### Create a vercel.json file and paste this code for the 404 error

``` json
{ "rewrites": [{ "source": "/(.*)", "destination": "/" }] }
```
