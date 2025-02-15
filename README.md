### SugarCRM Disable Activities Hook

## 📌 Overview
This **SugarCRM logic hook** disables activity tracking for **unnecessary modules**, reducing database load and improving system performance.

## 🚀 Features
✅ Prevents activity tracking on selected modules  
✅ Reduces database load and improves performance  
✅ Uses **before_save hook** for dynamic activity control  
✅ Easy configuration by modifying a simple module list  

## 🔧 Installation
1. Copy **disable_activities.php** to `custom/modules/`.  
2. Add the hook reference in `custom/modules/logic_hooks.php`.  
3. Run **Quick Repair & Rebuild** in SugarCRM.  

## ⚙️ Configuration
Modify **enabled modules** inside `disable_activities.php`:
```php
$enabledModules = [
    'Leads',
    'Opportunities',
    'Contacts',
    'Cases',
    'CustomModule1', 
    'CustomModule2'
];
```
Any module **not listed here** will have **activities disabled**.

## 📜 License
This project is licensed under the **MIT License**.

## 💡 Contributing
Pull requests are welcome! Please follow **best practices** when modifying the logic.