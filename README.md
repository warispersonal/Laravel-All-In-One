## Laravel Email Sending
1. Login into your Google account
2. Click on the security tab
3. Enable 2FA
4. Click on App passwords
5. Select app(Email) select (other) and give name to it
6. Get password from it <br/>
    1. MAIL_DRIVER=smtp or MAIL_MAILER=smtp
    2. MAIL_FROM_ADDRESS=wariszargarmailsending@gmail.com
    3. MAIL_HOST=smtp.gmail.com
    4. MAIL_PORT=587
    5. MAIL_USERNAME=wariszargarmailsending@gmail.com
    6. MAIL_PASSWORD=wppqoonhucaaatuv
    7. MAIL_ENCRYPTION=tls
    
7. For installing bootstrap and auth 
    1. composer require laravel/ui 
    2. php artisan ui bootstrap --auth or php artisan ui auth && php artisan ui bootstrap
    3. Then npm install && npm run watch/build/dev
    4. If it taking too much time then open terminal & run below common & then try npm install....
    5. npm set progress=false
       npm config set registry http://registry.npmjs.org/

8. php artisan make:mail OrderShipped --markdown=emails.foldername.filename       
 
## using Sendgrid email
1. config/service.php 
    'sendgrid' => [
         'api_key' => env('SENDGRID_API_KEY'),
       ],
    2. composer require s-ichikawa/laravel-sendgrid-driver
    3. .env   
           1. MAIL_DRIVER=smtp or MAIL_MAILER=smtp
           2. MAIL_FROM_ADDRESS=wariszargarmailsending@gmail.com
           3. MAIL_HOST=smtp.gmail.com
           4. MAIL_PORT=587
           5. MAIL_USERNAME=wariszargarmailsending@gmail.com
           6. MAIL_PASSWORD=wppqoonhucaaatuv
           7. MAIL_ENCRYPTION=tls

## Mailtarp.io
MAIL_DRIVER=smtp
MAIL_HOST=smtp.mailtrap.io
MAIL_PORT=2525
MAIL_USERNAME=0e6cc5cdb113f7
MAIL_PASSWORD=b4e3ab13c1dfd7
MAIL_ENCRYPTION=tls
MAIL_FROM_ADDRESS=wariszargardev@gmail.com
MAIL_FROM_NAME='All in One'
