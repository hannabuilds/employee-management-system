## 👩‍💼 Employee Management System — Web-Based Application

**Description:**  
A web-based employee management platform that simplifies HR processes such as employee record tracking and attendance management. 

**Key Features:**
- Manage employee profiles (CRUD operations)  
- Attendance and role-based access system  
- Dashboard   

**Tech Stack:**
- **Frontend:** Bootstrap
- **Backend:** PHP
- **Database:** MySQL 

**Platforms:** Web



### ⚙️ How to Run the Project Locally

1. **Install Required Software**
   - [XAMPP](https://www.apachefriends.org/download.html) or [Laragon](https://laragon.org/) (for Apache + PHP + MySQL)
   - A web browser (e.g., Chrome, Firefox)
   - A code editor (e.g., VS Code)

2. **Set Up the Project**
   - Copy the project folder into your web server directory:
     ```
     For XAMPP: C:\xampp\htdocs\employee_management_system
     For Laragon: C:\laragon\www\employee_management_system
     ```
   - Open **phpMyAdmin** (usually at http://localhost/phpmyadmin)
   - Create a new database and set its name to "employee_management_system_db"
   - Import the provided `.sql` file into this database

3. **Run the Application**
   - Start Apache and MySQL from XAMPP Control Panel
   - Open your browser and navigate to:
     ```
     http://localhost/employee_management_system/index.php
     ```
   For Laragon
    - Start Apache and MySQL
    - Open your browser and navigate to:
      ```
      http://employee_management_system.test
      ```

4. **Login and Explore**
   - Use the provided credentials (username: 'admin123@gmail.com' password: 'admin123')
   - Explore features such as employee CRUD operations, attendance management, and dashboard analytics
