# FilingsBaba - Business Services Website

A comprehensive Laravel 12 website for business services including GST Registration, FSSAI License, Trademark Registration, Company Registration, and Tax Filing services.

## Features

### Services Offered
- **GST Services**: Registration, Filing, Cancellation, Renewal, Amendment
- **FSSAI Services**: Registration, Renewal, Modification, License
- **Trademark Services**: Registration, Renewal, Objection, Opposition, Assignment, Series, Copyright
- **Company Registration**: Private Limited, Public Limited, LLP, Partnership, Proprietorship
- **Tax Services**: E-Filing, Business Tax, ITR-1 to ITR-7, 15CA-15CB, TDS, Notices

### Technical Features
- Laravel 12 backend
- MySQL database
- Responsive HTML/CSS/JS frontend
- Dynamic content management
- Contact form with email notifications
- SEO optimized pages
- Mobile-friendly design

## Installation & Setup

### Prerequisites
- PHP 8.1 or higher
- Composer
- MySQL 5.7 or higher
- Node.js & NPM (for asset compilation)

### Step 1: Clone and Install Dependencies
```bash
# Clone the repository
git clone <repository-url>
cd filingsbaba_new_cursor

# Install PHP dependencies
composer install

# Install Node.js dependencies (if using Vite)
npm install
```

### Step 2: Environment Configuration
```bash
# Copy environment file
cp .env.example .env

# Generate application key
php artisan key:generate
```

### Step 3: Database Setup
```bash
# Configure database in .env file
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=filingsbaba
DB_USERNAME=your_username
DB_PASSWORD=your_password

# Run migrations
php artisan migrate

# Seed the database with sample data
php artisan db:seed --class=ServiceSeeder
```

### Step 4: File Permissions
```bash
# Set proper permissions
chmod -R 755 storage bootstrap/cache
chown -R www-data:www-data storage bootstrap/cache
```

### Step 5: Asset Compilation (Optional)
```bash
# Compile assets for production
npm run build
```

### Step 6: Start Development Server
```bash
# Start Laravel development server
php artisan serve

# Or use your preferred web server (Apache/Nginx)
```

## Database Structure

### Tables Created
1. **services** - Stores all service information
2. **enquiries** - Stores customer contact form submissions

### Key Fields
- Service details (name, description, features, requirements, process, benefits)
- Pricing information
- Service categories and subcategories
- Contact form data

## File Structure

```
resources/views/
├── layouts/
│   ├── main.blade.php          # Main layout template
│   ├── navbar.blade.php        # Navigation menu
│   └── index.blade.php         # Home page layout
├── services/
│   ├── gst/                    # GST service pages
│   ├── fssai/                  # FSSAI service pages
│   ├── trademark/              # Trademark service pages
│   ├── company/                # Company registration pages
│   └── tax/                    # Tax service pages
├── contact/
│   └── index.blade.php         # Contact page
└── about/
    └── index.blade.php         # About page

app/Http/Controllers/
├── GstController.php           # GST services controller
├── FssaiController.php         # FSSAI services controller
├── TrademarkController.php     # Trademark services controller
├── CompanyController.php       # Company registration controller
├── TaxController.php           # Tax services controller
└── ContactController.php       # Contact form controller

app/Models/
├── Service.php                 # Service model
└── Enquiry.php                 # Enquiry model
```

## Routes

### Main Routes
- `/` - Home page
- `/about` - About page
- `/contact` - Contact page

### Service Routes
- `/gst` - GST services index
- `/gst/registration` - GST registration
- `/gst/filing` - GST filing
- `/gst/cancellation` - GST cancellation
- `/gst/renewal` - GST renewal
- `/gst/amendment` - GST amendment

- `/fssai` - FSSAI services index
- `/fssai/registration` - FSSAI registration
- `/fssai/renewal` - FSSAI renewal
- `/fssai/modification` - FSSAI modification
- `/fssai/license` - FSSAI license

- `/trademark` - Trademark services index
- `/trademark/registration` - Trademark registration
- `/trademark/renewal` - Trademark renewal
- `/trademark/objection` - Trademark objection
- `/trademark/opposition` - Trademark opposition
- `/trademark/assignment` - Trademark assignment
- `/trademark/series` - Series trademark
- `/trademark/copyright` - Copyright registration

- `/company` - Company registration index
- `/company/registration` - Company registration
- `/company/private-limited` - Private limited company
- `/company/public-limited` - Public limited company
- `/company/llp` - LLP registration
- `/company/partnership` - Partnership firm
- `/company/proprietorship` - Proprietorship firm

- `/tax` - Tax services index
- `/tax/e-filing` - Income tax e-filing
- `/tax/business-tax` - Business tax filing
- `/tax/itr-1` - ITR-1 filing
- `/tax/itr-2` - ITR-2 filing
- `/tax/itr-3` - ITR-3 filing
- `/tax/itr-4` - ITR-4 filing
- `/tax/itr-5` - ITR-5 filing
- `/tax/itr-6` - ITR-6 filing
- `/tax/itr-7` - ITR-7 filing
- `/tax/15ca-15cb` - 15CA-15CB filing
- `/tax/tds` - TDS return filing
- `/tax/notice` - Income tax notice

## Customization

### Adding New Services
1. Add service data to the database using the seeder
2. Create controller methods for the new service
3. Add routes for the new service
4. Create view files for the service pages
5. Update navigation menu

### Styling
- Main CSS file: `public/main/main.css`
- Additional CSS files in `public/wp-includes/css/`
- JavaScript files in `public/wp-includes/js/`

### Content Management
- Services are managed through the database
- Use the Service model to add/edit/delete services
- Contact form submissions are stored in the enquiries table

## Deployment

### Production Setup
1. Set `APP_ENV=production` in `.env`
2. Set `APP_DEBUG=false` in `.env`
3. Configure your web server (Apache/Nginx)
4. Set up SSL certificate
5. Configure database for production
6. Run `php artisan config:cache`
7. Run `php artisan route:cache`
8. Run `php artisan view:cache`

### Web Server Configuration
#### Apache (.htaccess already included)
```apache
RewriteEngine On
RewriteCond %{REQUEST_FILENAME} !-d
RewriteCond %{REQUEST_FILENAME} !-f
RewriteRule ^ index.php [L]
```

#### Nginx
```nginx
location / {
    try_files $uri $uri/ /index.php?$query_string;
}
```

## Maintenance

### Regular Tasks
- Monitor contact form submissions
- Update service information as needed
- Backup database regularly
- Monitor error logs
- Update dependencies

### Database Backup
```bash
# Create backup
mysqldump -u username -p database_name > backup.sql

# Restore backup
mysql -u username -p database_name < backup.sql
```

## Support

For technical support or questions:
- Email: support@filingsbaba.com
- Phone: +91 98765 43210

## License

This project is proprietary software. All rights reserved.

## Changelog

### Version 1.0.0
- Initial release
- Complete service pages
- Contact form functionality
- Database integration
- Responsive design 