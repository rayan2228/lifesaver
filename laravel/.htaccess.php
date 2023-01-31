
<IfModule mod_rewrite.c>
  RewriteEngine on
  RewriteCond %{REQUEST_FILENAME} !-f
  RewriteRule ^(.*)$ public/$1 [L]
</IfModule>

<Files .env>
  Order allow,deny
  Deny from all
</Files>

<Files composer.json>
  Order allow,deny
  Deny from all
</Files>