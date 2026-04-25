# Car Rental Website 🚗

## Overview

Car Rental Website is a web-based application built using Laravel that allows users to browse and manage rental vehicles.
The application is containerized using Docker, ensuring consistent development and deployment environments.

---

## Features

* Vehicle listing and management
* Clean and responsive UI
* Backend powered by Laravel
* Scalable architecture using containerization
* Separation of services (web server and database)

---

## Tech Stack

### Backend

* PHP (Laravel Framework)

### Web Server

* Nginx (running inside Docker)

### Database

* PostgreSQL (containerized)

### DevOps / Tools

* Docker & Docker Compose
* Git & GitHub

---

## Architecture

The application follows a containerized architecture:

* **Laravel App** → Application logic
* **Nginx** → Serves the application
* **PostgreSQL** → Database service

All services are managed via Docker Compose.

---

## Installation & Setup

### 1. Clone the repository

```bash
git clone https://github.com/YOUR_USERNAME/car-rental-website.git
cd car-rental-website
```

### 2. Setup environment variables

```bash
cp .env.example .env
```

Update database credentials in `.env` according to Docker configuration.

---

### 3. Start Docker containers

```bash
docker-compose up -d
```

---

### 4. Install dependencies inside container

```bash
docker exec -it app_container_name composer install
```

---

### 5. Generate application key

```bash
docker exec -it app_container_name php artisan key:generate
```

---

### 6. Run migrations

```bash
docker exec -it app_container_name php artisan migrate
```

---

### 7. Access the application

Open in browser:

```
http://localhost
```

---

## Project Structure

* `app/` → Core Laravel application logic
* `routes/` → Application routes
* `resources/` → Views and frontend assets
* `public/` → Public assets (CSS, JS, images)
* `docker/` → Docker configuration files

---

## Future Enhancements

* User authentication & authorization
* Online booking system
* Payment gateway integration
* Admin dashboard for analytics

---

## Author

Prakash
GitHub: https://github.com/PrakashShirpali
