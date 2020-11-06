# OCMI BLOGS


## About this app

OCMI Blogs is a basic blog application developed with blade, Bootstrap, HTML, CSS for the frontend and Laravel and MySQL for the backend. It takes advantage of the login system provided by Laravel. The database consists of 2 basic tables: Users, that stores the data needed for the authorization/authentication processes, and Blogs, that stores the blog title, content, preview, tags, autor and date of creation. OCMI Blogs has the following functionalities:

- Register/Login
- List with preview of all blogs
- Access to the whole content of every blog
- Creation of blogs only by registered users
- Edit and deletion of blogs only by the autor of each blogs

## Blogs List

![screenshot](/public/images/index.PNG)

This page may be accessed by everybody. Provides a preview, date of creation author and tags of every blog. The blogs are loaded from the most recently post to the oldest. Click on Read more to get to see the whole content of the desired blog.


## Blog Content

If you are a guest or you are an user but not the author, this is what you are goingt o see once you select a blog:

![screenshot](/public/images/guestBlog.PNG)

But if you are the author of the blog, 2 buttons will appear at the bottom left corner of the blog that will allow you to delete or edit the blog:

![screenshot](/public/images/userBlog.PNG)


## Creating a Blog
If you want to create a blog, first you need to log in (or register if you hadn't done so) 

![screenshot](/public/images/login.PNG)


After logging you only need to add the Title, content and tags for this blog. The author is automatically populated with your name, but if you want to change the name, you can do it, but you won't be able to edit or delete it later:

![screenshot](/public/images/addBlog.PNG)


## Editing a Blog
This page is basically the same as the one used to create a blog, but here the fields have been populated with the blog information.

![screenshot](/public/images/edit.PNG)


## Deleting a Blog.
In the Blog Content page, you can click on Delete thie Blog Button. After doing this, you'll be asked to confirm the action and after confirming, the blog will be deleted.

![screenshot](/public/images/delete.PNG)


## Future releases
In the future, this app will have the function of searching by tabs. A paginator will be added whenlodaing the list of blogs.

Also, adding images to the blog will be possible


## Created by Fabian Diaz

