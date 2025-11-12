# Panduan Deploy Website Semakmur ke Hosting

## Metode 1: Deploy via GitHub (RECOMMENDED)

### Langkah 1: Push ke GitHub

#### 1.1 Commit dan Push
```bash
git add .
git commit -m "Ready for production deployment"
git push origin main
```

#### 1.2 Pastikan File Production Ready
- File `.env.production` sudah ada
- File `.htaccess` sudah ada
- Semua perubahan sudah di-commit

### Langkah 2: Download dari GitHub ke Hosting

#### Option A: Download ZIP (Paling Mudah)
1. Buka repository di GitHub: `https://github.com/akbarbsn/web-profile-semakmur`
2. Klik tombol hijau "Code" → "Download ZIP"
3. Save file ZIP ke komputer

#### Option B: Clone via SSH (Jika hosting mendukung SSH)
```bash
cd public_html
git clone https://github.com/akbarbsn/web-profile-semakmur.git .
```

### Langkah 3: Upload ke cPanel
1. Login cPanel → File Manager
2. Backup folder lama (rename ke `backup_old_website`)
3. Upload ZIP file ke public_html
4. Extract ZIP file
5. Pindahkan semua file ke root public_html

## Metode 2: Deploy Manual (ZIP Upload)

### Langkah 1: Persiapan File

#### 1.1 Compress Project Lokal
```bash
# Dari folder project, buat ZIP (exclude file yang tidak perlu)
zip -r semakmur-website.zip . -x "node_modules/*" ".git/*" "storage/logs/*" "vendor/*"
```

## Langkah 4: Konfigurasi di Hosting (Semua Metode)

### 4.1 Setup Environment File
1. Rename `.env.production` menjadi `.env`
2. Edit `.env` dengan data hosting Rumahweb:
   ```env
   APP_URL=https://namadomainanda.com
   DB_HOST=localhost
   DB_DATABASE=nama_database_cpanel
   DB_USERNAME=username_database_cpanel
   DB_PASSWORD=password_database_cpanel
   ```

### 4.2 Install Dependencies (Via Terminal SSH atau cPanel Terminal)
```bash
composer install --optimize-autoloader --no-dev
```

### 4.3 Set Document Root di cPanel
- **Subdomain/Addon Domain**: Set Document Root ke `public/`
- **Main Domain**: Buat .htaccess redirect (sudah disediakan)

### 4.4 Set Permissions
```bash
chmod 755 -R storage/
chmod 755 -R bootstrap/cache/
```

### 4.5 Optimize Laravel untuk Production
```bash
php artisan config:cache
php artisan route:cache
php artisan view:cache
```

## Langkah 5: Setup Database

### 5.1 Buat Database di cPanel Rumahweb
1. Login cPanel → MySQL Databases
2. Create Database: `username_semakmur`
3. Create User: `username_semakmur`
4. Add User to Database dengan ALL PRIVILEGES

### 5.2 Run Migrations
```bash
php artisan migrate --force
```

## Langkah 6: Auto Deploy (Advanced - Optional)

### GitHub Webhooks + cPanel
1. Buat script `deploy.php` di root:
```php
<?php
// deploy.php
$output = shell_exec('cd /path/to/your/site && git pull origin main 2>&1');
echo "<pre>$output</pre>";
?>
```

2. Setup Webhook di GitHub:
   - Settings → Webhooks → Add webhook
   - URL: `https://yourdomain.com/deploy.php`
   - Content type: `application/json`
   - Events: Just the push event

## Langkah 6: Testing

1. Buka website di browser
2. Test semua fitur:
   - Homepage
   - Slider artikel
   - Contact form
   - Floating customer service
3. Check console browser untuk error
4. Test responsive design

## Troubleshooting

### Error 500
- Check file permissions
- Check .env configuration
- Check error logs di cPanel

### CSS/JS tidak load
- Check APP_URL di .env
- Clear cache: `php artisan cache:clear`
- Check file permissions

### Database connection error
- Verify database credentials di .env
- Check database exists
- Check user permissions

## File Penting untuk Hosting

1. **.htaccess di root public_html:**
```apache
<IfModule mod_rewrite.c>
    RewriteEngine On
    RewriteRule ^(.*)$ public/$1 [L]
</IfModule>
```

2. **.htaccess di folder public:**
```apache
<IfModule mod_rewrite.c>
    <IfModule mod_negotiation.c>
        Options -MultiViews -Indexes
    </IfModule>

    RewriteEngine On

    # Handle Authorization Header
    RewriteCond %{HTTP:Authorization} .
    RewriteRule .* - [E=HTTP_AUTHORIZATION:%{HTTP:Authorization}]

    # Redirect Trailing Slashes If Not A Folder...
    RewriteCond %{REQUEST_FILENAME} !-d
    RewriteCond %{REQUEST_URI} (.+)/$
    RewriteRule ^ %1 [L,R=301]

    # Send Requests To Front Controller...
    RewriteCond %{REQUEST_FILENAME} !-d
    RewriteCond %{REQUEST_FILENAME} !-f
    RewriteRule ^ index.php [L]
</IfModule>
```

## Kontak

Jika ada masalah, hubungi developer.