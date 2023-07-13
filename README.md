# Lara-cms-template

Laravel filament dashboard template application for all dashboard management.

## Features established at the moment

1. Post managment
2. Users management
3. Testimonial
4. Services
5. Updates
6. Projects
7. FAQs
8. Events
9. Contact messages (from contact form)
10. Partners

# Create user

1. Seed the database by running

```bash
php artisan migrate:fresh --seed
```

2. Assign super admin rights to a user

```bash
php artisan shield:super-admin
```

3. Select with user id from the list of users
4. Generate permission values using

```bash
php artisan shield:generate
```

### Nice to have packages for filament

-   [ ] Icon picker package [Filament icon picker](https://filamentphp.com/plugins/icon-picker)
-   [ ] Import files into tables [Filament import](https://filamentphp.com/plugins/import)
-   [ ] Editor Js integration [Filament editor Js](https://filamentphp.com/plugins/editorjs)
-   [ ] Excel export integration [Filament export](https://filamentphp.com/plugins/pxlrbt-excel)
-   [ ] [Another excel export](https://filamentphp.com/plugins/alperenersoy-export)
