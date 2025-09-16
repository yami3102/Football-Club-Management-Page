<!DOCTYPE html>
<html>
    <head>
        <title>Manager Form</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="clubform.css">
        
    </head>
    <body>
        <div class="home">
            <a class="btn btn-primary" href="final_page_2.php" role="button">Go To Home Page</a>
        </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
           
    <h1 class="display-2 text-white"><center>Manager Registration Form</center></h1>
        <form>
            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="cname" placeholder="Clubname" required>
                <label for="cname">Name</label>
            </div>
            <div class="form-floating">
                <input type="number" class="form-control" id="age" placeholder="age" required>
                <label for="year">Age</label>
                <br>
            </div>
            <div class="form-floating">
                <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
                <label for="floatingTextarea2">Profile Description</label>
            </div>
            <br>
            <div class="passyear">
                <select class="form-select" id="club" aria-label="Default select example">
                    <option selected>Select Club</option>
                    <option value="Manchester">Manchester</option>
                    <option value="Arsenal">Arsenal</option>
                    <option value="Adelaide">Adelaide</option>
                </select>
                </div>
            <br>
            <label for="formFile" class="form-label">Upload picture</label>
            <input class="form-control" type="file" id="formFile" required><br>
            <button type="button" class="btn btn-primary" >Submit</button>
        </form>
        
        </div>
    </body>
</html>