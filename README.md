# Pastimes Clothing Store – Prototype (Part 2)

## 📌 Project Overview

Pastimes is a web-based e-commerce prototype that allows users to buy and sell second-hand clothing online. The system includes user registration, login, admin verification, product listing, and a shopping cart.

---

## ⚙️ Technologies Used

* PHP
* MySQL
* HTML5
* CSS
* XAMPP

---

## 🗄️ Database

**Database Name:** ClothingStore

**Tables:**

* tblUser

The database is automatically created and populated using:

* createTable.php
* userData.txt

---

## 👤 User Features

* Register a new account
* Login using email and password
* View available clothing items
* Add items to shopping cart

---

## 👨‍💼 Admin Features

* Login as administrator
* Verify new users
* Delete users

---

## 🔐 Security Features

* Passwords are encrypted using MD5 hashing
* User must be verified before login
* Sessions are used to manage login state

---

## 🛒 Shopping Cart

* Uses PHP sessions
* Items can be added to cart
* Quantity increases if item is added multiple times

---

## 📁 File Structure

* DBConn.php → Database connection
* createTable.php → Creates and loads database
* login.php → User login
* register.php → User registration
* adminLogin.php → Admin login
* dashboard.php → Admin panel
* items.php → Product listing
* cart.php → Shopping cart
* css/style.css → Styling
* database/userData.txt → Sample data

---

## ▶️ How to Run

1. Copy project folder to:
   C:\xampp\htdocs

2. Start XAMPP:

   * Apache
   * MySQL

3. Open browser and run:
   http://localhost/PastimesStore/createTable.php

4. Then open:
   http://localhost/PastimesStore/login.php

---

## 🎥 Demonstration Features

* User registration
* Admin verification
* User login
* Viewing items
* Adding items to cart

---

## 📌 Conclusion

This project demonstrates key web development concepts including PHP scripting, MySQL database integration, authentication, and session-based shopping cart functionality.
