``` CSS 
*,
*::before,
*::after {
  padding: 0;
  margin: 0;
}

q:before,
q:after {
  content: "";
}

html,
body,
h1,
h2,
h3,
h4,
p,
ol,
ul,
li,
figure,
figcaption,
blockquote,
dl,
dd {
  margin: 0;
  padding: 0;
}

html:focus-within {
  scroll-behavior: smooth;
}

body {
  min-height: 100vh;
  text-rendering: optimizeSpeed;
  line-height: 1.5;
}

ul,
ol {
  list-style: none;
}

a {
  text-decoration: none;
}

img {
  max-width: 100%;
  display: block;
}

input,
button,
textarea,
select {
  font: inherit;
  /* margin */
}
```
