# POS Customer Accounts and User Accounts

This folder contains the POS application code and the MySQL export for IT0049 TFA2. The setup script installs the official CodeIgniter 4 appstarter (framework code is downloaded by Composer), then places these application files into it. No TFA1 source project was provided, so the pages use a simple standalone design.

## Requirements

- Windows with PHP and Composer installed, PHP extensions `intl`, `mbstring`, and `mysqli` enabled.
- MySQL running locally (for example, XAMPP MySQL).
- Internet access while Composer installs CodeIgniter.

## Set up on Windows

1. Extract this ZIP. Open PowerShell inside the extracted `pos-ci4-project` folder.
2. Run `powershell -ExecutionPolicy Bypass -File .\setup-windows.ps1`. This creates a sibling folder named `pos-ci4-ready`. The script detects PHP at `C:\xampp\php\php.exe` if `php` is missing from your terminal PATH. If PowerShell is already open, `./setup-windows.ps1` also works after allowing scripts for your session.
3. Start MySQL. Open phpMyAdmin, select the Import tab, and import `pos-ci4-ready/database/pos_db.sql` (the SQL creates `pos_db` and inserts five customers and five users). Import only once to avoid duplicate records.
4. Open `pos-ci4-ready/.env`. Set `database.default.username` and `database.default.password` to your local MySQL account. Keep `database.default.database = pos_db`.
5. Open PowerShell in `pos-ci4-ready` and run `php spark serve`. Visit `http://localhost:8080/`, `http://localhost:8080/customers`, and `http://localhost:8080/users`.
6. Check that both pages display five rows. If you get a database error, check that MySQL is running, that the database was imported, and that `.env` credentials match your MySQL login.

## What to upload to GitHub

Upload the entire generated **pos-ci4-ready** directory as the repository root, including `app`, `public`, `spark`, `composer.json`, `.env.example`, and `database/pos_db.sql`. Do **not** upload `.env` or `vendor`. The generated `.gitignore` excludes these. GitHub will contain the actual application and SQL export. Anyone cloning it can run `composer install`, copy `.env.example` to `.env`, edit credentials, import the SQL, and run `php spark serve`.

To publish from PowerShell inside `pos-ci4-ready` after creating an empty GitHub repository:

```powershell
git init
git add .
git commit -m "Add CodeIgniter POS database project"
git branch -M main
git remote add origin https://github.com/YOUR_USERNAME/YOUR_REPOSITORY.git
git push -u origin main
```

Replace the GitHub URL with your real empty repository URL. Hosting is a separate step: the host must support PHP, Composer dependencies, MySQL, and a web document root pointing to `public`. Set the production `.env` on the host with its own database credentials. Add the resulting GitHub URL and hosted URL to your answer document.
