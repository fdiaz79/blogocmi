<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>
<p align="center">OCMI BLOGS </p>


## About this app

OCMI Blogs is a basic blog application developed with blade, Bootstrap, HTML, CSS for the frontend and Laravel and MySQL for the backend. It takes advantage of the login system provided by Laravel. The database consists of 2 basic tables: Users, that stores the data needed for the authorization/authentication processes, and Blogs, that stores the blog title, content, preview, tags, autor and date of creation. OCMI Blogs has the following functionalities:

- Register/Login
- List with preview of all blogs
- Access to the whole content of every blog
- Creation of blogs only by registered users
- Edit and deletion of blogs only by the autor of each blogs

## Blogs List

<img src="https://github.com/fdiaz79/blogocmi/tree/master/public/images/index.PNG" width="400">

This page may be accessed by everybody. Provides a preview, date of creation author and tags of every blog. The blogs are loaded from the most recently post to the oldest. Click on Read more to get to see the whole content of the desired blog.


## Blog Content

If you are a guest or you are an user but not the author, this is what you are goingt o see once you select a blog:
<img src="https://github.com/fdiaz79/blogocmi/tree/master/public/images/guestBlog.PNG" width="400">

But if you are the author of the blog, 2 buttons will appear at the bottom left corner of the blog that will allow you to delete or edit the blog:
<img src="https://github.com/fdiaz79/blogocmi/tree/master/public/images/userBlog.PNG" width="400">


## Creating a Blog
If you want to create a blog, first you need to log in (or register if you hadn't done so) 
<img src="https://github.com/fdiaz79/blogocmi/tree/master/public/images/login.PNG" width="400">

After logging you only need to add the Title, content and tags for this blog. The author is automatically populated with your name, but if you want to change the name, you can do it, but you won't be able to edit or delete it later:
<img src="https://github.com/fdiaz79/blogocmi/tree/master/public/images/addBlog.PNG" width="400">

## Editing a Blog
This page is basically the same as the one used to create a blog, but here the fields have been populated with the blog information.
<img src="https://github.com/fdiaz79/blogocmi/tree/master/public/images/edit.PNG" width="400">

## Deleting a Blog.
In the Blog Content page, you can click on Delete thie Blog Button. After doing this, you'll be asked to confirm the action and after confirming, the blog will be deleted.
<img src="https://github.com/fdiaz79/blogocmi/tree/master/public/images/delete.PNG" width="400">



## Future releases
In the future, this app will have the function of searching by tabs. A paginator will be added whenlodaing the list of blogs.

Also, adding images to the blog will be possible


## Created by Fabian Diaz

