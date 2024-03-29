# Welcome to TechShop Project!
This project created for **study** purpose!

# Members:
- Shikigami Maito
- Ha Quoc Vi
- Dao Ngoc Linh
- Nguyen Truong Tan Loc

# Project Features:
* App features:
  * View, search product, filter by tag and price.
  * Login, register.
* User features:
  * Make purchase and manage orders.
  * Manage users information
* Admin features:
  * Statistic: order, selling
  * Manage (CRUD):
    * Product
    * Category
    * Brand
    * Order
    * User
  * Dynamic role and app permission management

# How to run project:
- First, you need to install [Composer](https://getcomposer.org/download/)
- When you finished install **Composer**, navigate to the root folder of the project and run the following command
```sh
  composer install
```
- Then go to config/config.php and change db params to match your db user

# Naming convention:
- PascalCase for class
- camelCase for variables
- *ControllerName*Controller.php for controller
- *ViewName*.view.php for view

# Documentary and reference:
- Project MVC template from GM 👉[Link](https://www.giuseppemaccario.com/how-to-build-a-simple-php-mvc-framework/)
- How to query using PDO 👉[Link](https://www.phptutorial.net/php-pdo/php-pdo-select/)
- Git document 
  - 👉[Even a monkey know how to use git](https://backlog.com/git-tutorial/vn/intro/intro2_1.html)
  - 👉[Git Notebook](https://rogerdudler.github.io/git-guide/index.vi.html)

# Important:
- Create branch with this format Name_Job
- If there is a new merge happened on main branch **PULL** and **REBASE** before continue coding
- There will be *conflict* happen while *rebase* with main branch, you will have to **RESOLVE CONFLICT** by yourself or ask team members
- Create **PULL REQUEST** when your task is done
- **DO NOT** merge the branch by yourself
