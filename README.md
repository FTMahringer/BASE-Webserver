# 🚀 FTM Docker Web Stack

This project sets up a **modern PHP development environment** using Docker, including:

✅ **NGINX** (web server)
✅ **PHP-FPM** (with custom `php.ini`)
✅ **MariaDB** (MySQL-compatible database)
✅ **phpMyAdmin** (database web UI)
✅ **Redis** (caching)
✅ **RedisInsight** (visual Redis browser)

---

## 🏦 What’s Inside?

| Service          | Description                                |
| ---------------- | ------------------------------------------ |
| **NGINX**        | Lightweight web server with custom config  |
| **PHP-FPM**      | FastCGI PHP engine with tuned PHP settings |
| **MariaDB**      | MySQL-compatible database for development  |
| **phpMyAdmin**   | Web interface to manage MariaDB            |
| **Redis**        | Fast in-memory key-value store             |
| **RedisInsight** | UI to explore and debug Redis data         |

---

## 🏗️ Project Structure

```
.
├── app/               → Your PHP project code goes here
├── docker/
│   ├── nginx/
│   │   └── nginx.conf → Custom NGINX configuration
│   ├── php/
│   │   ├── Dockerfile → Custom PHP build (with extensions/settings)
│   │   └── php.ini    → Custom PHP settings
├── docker-compose.yml → Orchestrates all services
└── .env               → Environment variables for the stack
```

---

## ⚙️ Quick Start

1️⃣ **Clone the repo**

```bash
git clone https://github.com/yourusername/your-repo-name.git
cd your-repo-name
```

2️⃣ **Create your `.env`**

Already provided, but adjust as needed:

```
MYSQL_ROOT_PASSWORD=rootpassword
MYSQL_DATABASE=dbname
MYSQL_USER=user
MYSQL_PASSWORD=password
PMA_HOST=mariadb
```

3️⃣ **Start the stack**

```bash
docker compose up -d
```

4️⃣ **Access services**

* Your PHP app → [http://localhost](http://localhost)
* phpMyAdmin → [http://localhost:8080](http://localhost:8080)
* RedisInsight → [http://localhost:8001](http://localhost:8001)

---

## 🛠️ Customizations

* **Nginx config** → `docker/nginx/nginx.conf`
* **PHP settings** → `docker/php/php.ini`
* **Dockerfile for PHP** → `docker/php/Dockerfile`

You can modify these to fit your project’s needs.

---

## 💡 Notes

* Database data persists in the `mariadb_data` volume.
* Redis data persists in the `redis_data` volume.
* NGINX logs are saved in the `nginx_logs` volume.

To clear everything (⚠ **will delete all data**):

```bash
docker compose down -v
```

---

## 👌 Credits

Created by **Fynn Mahringer** (FTM)
If you use this, feel free to ⭐ star the repo and contribute!
