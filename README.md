# Ranayas - E-commerce Platform

Ranayas is a robust, full-featured e-commerce platform built with Laravel. It features a modern frontend for customers, a comprehensive admin dashboard for management, and a dedicated user panel for order tracking and profile management.

## 🚀 Features

### 🛒 Customer Frontend
- **Product Discovery**: Dynamic product listing with category and price filters.
- **Search**: Fast and relevant search functionality.
- **Shopping Cart**: Easy add-to-cart, update, and remove items using `darryldecode/cart`.
- **Wishlist**: Save favorite products for later.
- **Checkout**: Streamlined checkout process with address management and pincode verification.
- **Responsive Design**: Fully optimized for mobile and desktop views.

### 👤 User Panel
- **Dashboard**: Overview of recent activity and orders.
- **Order Tracking**: Real-time status updates and tracking for all orders.
- **Profile Management**: Update personal information and change passwords.
- **Address Book**: Manage multiple shipping and billing addresses.
- **Invoices**: View and download PDF invoices for all purchases.

### 🛠️ Admin Dashboard
- **Product Management**: Comprehensive control over products, categories, brands, colors, and sizes.
- **Order Management**: Process orders, update statuses, assign shipments, and generate labels.
- **User Management**: Manage registered customers and system administrators.
- **Content Management**: Update homepage sliders, FAQs, About page, and policies.
- **Offer Management**: Create coupons, manage product discounts, and home offer sliders.
- **Reports & Analytics**: Generate and export detailed reports in Excel and PDF formats.
- **Customer Support**: Manage enquiries and support tickets.

### 🔐 Security & Authentication
- **Multi-Auth**: Separate authentication guards for Users, Admins, and Shops.
- **Social Login**: Seamless Google OAuth integration via Laravel Socialite.
- **OTP Verification**: Enhanced security for login and password resets.

## 🗄️ Database Schema

The project uses a structured MySQL database. Key table groups include:

### 👤 Core Entities
- `admins`: System administrators.
- `txn_users`: Registered customers.
- `shops`: Vendor/Shop information.
- `addresses`: User-managed shipping and billing addresses.

### 📦 Product Catalog
- `txn_products`: Central product data (names, slugs, descriptions, specs).
- `txn_categories`: Hierarchical category structure.
- `txn_brands`: Brand management.
- `mst_colors` & `mst_sizes`: Master lists for product variations.
- `map_color_sizes`: Mapping of product variations to inventory and status.
- `txn_images`: Multi-image support for products.

### 💳 Order Management
- `txn_orders`: Order headers (totals, status, payment info, tracking).
- `txn_order_details`: Line items for each order.
- `transactions`: Payment transaction logs.
- `bulk_orders`: Special handling for wholesale or bulk enquiries.

### 📣 Marketing & Content
- `sliders` & `home_offer_sliders`: Homepage promotional banners.
- `mst_offers`: Coupon and discount rules.
- `map_offer_products`: Linking offers to specific products.
- `subscribers`: Email newsletter subscriptions.

### 💬 Customer Interaction
- `txn_reviews`: Product ratings and feedback.
- `tickets` & `returntickets`: Support and return/refund request tracking.
- `wishlists`: Customer saved items.
- `faqs` & `product_faqs`: General and product-specific frequently asked questions.

## 💻 Tech Stack
- **Framework**: Laravel 12.x
- **Language**: PHP 8.2+
- **Database**: MySQL
- **Frontend**: Blade Templates, JavaScript (Vanilla), CSS (Vanilla/Bootstrap)
- **Email**: PHPMailer & Brevo API
- **Notifications**: Laravel Notify
- **Integrations**: Google OAuth, SMS API, Paytm Payment Callback

## 🛠️ Installation & Setup

Follow these steps to set up the project locally:

1. **Clone the repository**:
   ```bash
   git clone <repository-url>
   cd ranayas
   ```

2. **Install PHP dependencies**:
   ```bash
   composer install
   ```

3. **Install Frontend dependencies**:
   ```bash
   npm install
   ```

4. **Environment Configuration**:
   Copy `.env.example` to `.env` and configure your database and other services.
   ```bash
   cp .env.example .env
   php artisan key:generate
   ```

5. **Database Setup**:
   Run migrations and seeders (if available).
   ```bash
   php artisan migrate
   ```

6. **Build Frontend Assets**:
   ```bash
   npm run dev
   # or for production
   npm run build
   ```

7. **Run the Application**:
   ```bash
   php artisan serve
   ```

## 📂 Directory Structure Highlights
- `app/Http/Controllers`: Contains logic for Admin, User, Shop, and Frontend.
- `resources/views`: Blade templates organized by panel (admin, frontend, layouts).
- `routes/web.php`: Defines all application routes and multi-auth groups.
- `app/Models`: Database models and relationships.

## 📄 License
This project is proprietary and all rights are reserved.
