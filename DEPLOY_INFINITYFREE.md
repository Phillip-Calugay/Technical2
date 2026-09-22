# InfinityFree upload files

Upload the complete repository contents to the `htdocs` folder, including the root `.htaccess` file.

Then copy `infinityfree.env.example` to a file named `.env`, replace every placeholder with the values shown in InfinityFree Control Panel > MySQL Databases, and upload that `.env` file to `htdocs`.

Finally, open phpMyAdmin, select the database you created through the InfinityFree control panel, and import `database/simple_pos.sql`.
