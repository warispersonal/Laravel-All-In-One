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


