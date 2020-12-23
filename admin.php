<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <title>Alca Kitchen | Admin</title>
</head>
<body>
    <main class="container m-0 p-0">
        <section class="col-9 position-relative float-left">
        <h3>Add new posts</h3>
        <form method="POST" action="insert.php">
            <label for="title">Posts </label>
            <input class="form-control" type="text" name="title" placeholder="title">
            <input class="form-control" type="text" name="subtitle" placeholder="subtitle">
            <input class="form-control" type="text" name="article" placeholder="text here....">
            <input class="form-control" type="text" name="links" placeholder="links">
            <button class="btn btn-primary" name="update" type="submit" value="update">Add</button>
        </form>
        </section>
        <aside class="col-3 position-relative float-right bg-light">
            <ul class="nav-links">  
                <li class="nav-item"><a href="" class="nav-link">Home page</a></li>
                <li class="nav-item"><a href="" class="nav-link">Add new page</a></li>
                <li class="nav-item"><a href="" class="nav-link">New menu</a></li>
                <li class="nav-item"><a href="" class="nav-link">New post/announcement</a></li>
                <li class="nav-item"><a href="" class="nav-link">Contact developer</a></li>
            </ul>
        </aside>
</main>
    
    
</body>
</html>