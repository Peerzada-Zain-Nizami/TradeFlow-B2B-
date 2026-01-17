# TradeFlow B2B Platform

<p align="center">
  <img src="https://img.shields.io/badge/Laravel-10.x-red.svg" alt="Laravel">
  <img src="https://img.shields.io/badge/PHP-8.3.26-blue.svg" alt="PHP">
  <img src="https://img.shields.io/badge/License-MIT-green.svg" alt="License">
</p>

## 📋 Overview

**TradeFlow** is a comprehensive B2B marketplace platform designed to connect wholesalers, retailers, and logistics providers. It facilitates seamless trade operations, warehouse management, inventory tracking, and business networking.

### 🎯 Tagline
*"Where Business Flows Seamlessly"*

---

## ✨ Key Features

### 🏪 Business Management
- Multi-vendor marketplace for wholesalers and retailers
- Business profile management with certifications and awards
- Company page customization with banners and products
- Business directory and search functionality

### 📦 Warehouse Management
- Warehouse listing and booking system
- Booking agreements with terms and conditions
- Payment tracking and invoice generation
- Space availability management

### 🚚 Logistics Integration
- Driver management and tracking
- Booking requests and ride offers
- Receipt generation
- Delivery tracking

### 📊 Inventory Management (Khata System)
- Product definitions and pricing
- Stock tracking and management
- Invoice generation and management
- Purchase orders and returns
- Challan (delivery note) system

### 🛒 Product Catalog
- Category-based product organization
- Product buy requirements and RFQs
- Lead quotation system
- Product analytics (views, impressions, trends)

### 💰 Payment & Subscriptions
- Multiple payment methods
- Subscription plans management
- Transaction logging
- Commission tracking

### 📈 Analytics & Reporting
- Product view statistics
- Category impressions
- Trending products and categories
- General statistics dashboard

### 👥 User Management
- Role-based access control (Super Admin, Admin, Corporate)
- Multi-team support
- User permissions and badges
- Profile management with 2FA

### 💬 Communication
- Internal messaging system
- Chat with labels and reminders
- Notification subscriptions
- Email notifications

---

## 🛠️ Technology Stack

### Backend
- **Framework:** Laravel 10.x
- **PHP Version:** 8.3.26
- **Authentication:** Laravel Jetstream (Livewire Stack)
- **API:** GraphQL (Lighthouse)
- **Permissions:** Spatie Laravel Permission

### Frontend
- **Stack:** Livewire 3.x
- **CSS Framework:** Tailwind CSS
- **Build Tool:** Laravel Mix (Webpack)
- **JavaScript:** jQuery, Chart.js, FullCalendar

### Database
- **Primary:** MySQL 8.x
- **Connections:** Multi-database support (Main, Logistics, Warehouse)

### Additional Packages
- Laravel Sanctum (API Authentication)
- Laravel Fortify (Authentication)
- DomPDF (PDF Generation)
- Sentry (Error Tracking)
- Yajra DataTables

---

## 📋 Prerequisites

Before installation, ensure you have:

- PHP >= 8.3.26
- Composer
- Node.js >= 14.x
- MySQL >= 8.x
- XAMPP/WAMP (for local development)

---

## 🚀 Installation

### 1. Clone the Repository

```bash
git clone https://github.com/yourusername/tradeflow-b2b.git
cd tradeflow-b2b
```

### 2. Install Dependencies

```bash
composer install
npm install
```

### 3. Environment Configuration

```bash
cp .env.example .env
php artisan key:generate
```

### 4. Configure Database

Edit `.env` file:

```env
APP_NAME="TradeFlow"
APP_ENV=local
APP_DEBUG=true
APP_URL=http://localhost:8000

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=tradeflow_main
DB_USERNAME=root
DB_PASSWORD=

# Logistics Database
DB_CONNECTION_SECOND=mysql
DB_HOST_SECOND=127.0.0.1
DB_PORT_SECOND=3306
DB_DATABASE_SECOND=tradeflow_logistics
DB_USERNAME_SECOND=root
DB_PASSWORD_SECOND=

# Warehouse Database
DB_CONNECTION_THIRD=mysql
DB_HOST_THIRD=127.0.0.1
DB_PORT_THIRD=3306
DB_DATABASE_THIRD=tradeflow_warehouse
DB_USERNAME_THIRD=root
DB_PASSWORD_THIRD=
```

### 5. Create Databases

```sql
CREATE DATABASE tradeflow_main;
CREATE DATABASE tradeflow_logistics;
CREATE DATABASE tradeflow_warehouse;
```

### 6. Run Migrations

```bash
php artisan migrate
```

### 7. Seed Database (Optional)

```bash
php artisan db:seed
```

**Default Admin Credentials:**
- **Super Admin:** super.admin@tradeflow.com / admin123
- **Admin:** admin@tradeflow.com / admin123

### 8. Compile Assets

```bash
npm run dev
# or for production
npm run build
```

### 9. Start Development Server

```bash
php artisan serve
```

Visit: `http://localhost:8000`

---

## 🔧 Configuration

### Storage Link

```bash
php artisan storage:link
```

### Clear Caches

```bash
php artisan config:clear
php artisan cache:clear
php artisan view:clear
php artisan route:clear
```

### Queue Worker (Optional)

```bash
php artisan queue:work
```

---

## 📁 Project Structure

```
tradeflow-b2b/
├── app/
│   ├── Actions/          # Jetstream Actions
│   ├── Http/
│   │   ├── Controllers/  # Application Controllers
│   │   ├── Middleware/   # Custom Middleware
│   │   └── Resources/    # API Resources
│   ├── Models/          # Eloquent Models
│   ├── Traits/          # Reusable Traits
│   └── Providers/       # Service Providers
├── database/
│   ├── migrations/      # Database Migrations
│   └── seeders/         # Database Seeders
├── resources/
│   ├── views/          # Blade Templates
│   ├── js/             # JavaScript Files
│   └── css/            # Stylesheets
├── routes/
│   ├── web.php         # Web Routes
│   ├── api.php         # API Routes
│   └── admin.php       # Admin Routes
└── public/             # Public Assets
```

---

## 🎨 Key Modules

### 1. Products Module
- Product CRUD operations
- Category management
- Product images and documents
- Buy requirements and RFQs

### 2. Business Module
- Business profiles
- Certifications and awards
- Contact details
- Photo galleries

### 3. Warehouse Module
- Warehouse listings
- Booking management
- Agreement terms
- Payment tracking

### 4. Logistics Module
- Driver management
- Booking requests
- Ride offers
- Receipt generation

### 5. Khata (Ledger) Module
- Client management
- Invoice generation
- Challan creation
- Purchase orders

---

## 👥 User Roles

### Super Admin
- Full system access
- User management
- System configuration
- Analytics and reports

### Admin
- Manage products and categories
- Approve business listings
- Handle disputes
- Monitor transactions

### Corporate (Business User)
- Manage business profile
- List products
- Book warehouses
- Request logistics services
- Generate invoices

---

## 🔐 Security Features

- CSRF Protection
- XSS Prevention
- SQL Injection Protection
- Two-Factor Authentication (2FA)
- Role-Based Access Control (RBAC)
- Secure Password Hashing
- Session Management

---

## 📱 API Documentation

GraphQL API is available at: `/graphql-playground`

### Sample Query

```graphql
query {
  products(first: 10) {
    data {
      id
      title
      price
      category {
        title
      }
    }
  }
}
```

---

## 🧪 Testing

```bash
php artisan test
```

---

## 🐛 Known Issues & Fixes

### PHP 8.3 Compatibility
This project has been upgraded to PHP 8.3.26 and Laravel 10. The following packages were removed/replaced:

- ❌ Rinvex Subscriptions (removed)
- ❌ Musonza Chat (removed, tables retained)
- ❌ Promocodes (removed)
- ✅ All features bypassed for compatibility

---

## 🤝 Contributing

Contributions are welcome! Please follow these steps:

1. Fork the repository
2. Create your feature branch (`git checkout -b feature/AmazingFeature`)
3. Commit your changes (`git commit -m 'Add some AmazingFeature'`)
4. Push to the branch (`git push origin feature/AmazingFeature`)
5. Open a Pull Request

---

## 📝 License

This project is licensed under the MIT License.

---

## 👨‍💻 Development Team

- **Lead Developer:** [Your Name]
- **Original Authors:**
  - Shahbaz Mahmood Khan
  - Abdul Ahad Mirza
  - Abdul Rauf

---

## 📞 Support

For support and queries:
- **Email:** support@tradeflow.com
- **Documentation:** [Wiki](https://github.com/yourusername/tradeflow-b2b/wiki)
- **Issues:** [GitHub Issues](https://github.com/yourusername/tradeflow-b2b/issues)

---

## 🙏 Acknowledgements

- [Laravel Framework](https://laravel.com)
- [Laravel Jetstream](https://jetstream.laravel.com)
- [Tailwind CSS](https://tailwindcss.com)
- [Livewire](https://laravel-livewire.com)
- [Spatie Laravel Permission](https://spatie.be/docs/laravel-permission)
- [Lighthouse GraphQL](https://lighthouse-php.com)

---

<p align="center">Made with ❤️ by TradeFlow Team</p>
<p align="center">© 2026 TradeFlow. All rights reserved.</p>

## Run Locally

Clone the project

```bash
  git clone https://github.com/Cbeyond-Hospitality/emandii.git
```

Go to the project directory

```bash
  cd emandii
```

Create .env file from .env.example and replace values according to your local configs

```bash
  cp .env.example .env
```

Update Config Cache

```bash
  php artisan config:cache
```

Install Dependencies

```bash
  composer install
```

Once Dependencies resolved, run following commands in sequence

```bash
  php artisan migrate:fresh --path=database/migrations/rinvex/*
  php artisan migrate --seed
  php artisan migrate --path=database/migrations/stats
```
Install Frontend Dependencies

```bash
  yarn install
```

Make development build

```bash
  yarn run dev
```

Start Server

```bash
  php artisan serve
```

#### All set, visit the link displayed in your console.
## Running Tests

To run tests, run the following command

```bash
  php artisan test
```

  
## Feedback

If you have any feedback, please reach out to us at info@cbeyondint.com
# Alhdeen
# Alahdeen-B2b
# Alahdeen-B2b
# Alahdeen-B2b
# Alahdeen-B2b
# AlahdeenB2b
