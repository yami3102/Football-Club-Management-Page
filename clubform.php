<!DOCTYPE html>
<html>
    <head>
        <title>Form</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="clubform.css">
        
    </head>
    <body>
        <div class="home">
            <a class="btn btn-primary" href="final_page_2.php" role="button">Go To Home Page</a>
        </div>
    <h1 class="display-2 text-white"><center>Club Registration Form</center></h1>
        <form>
            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="cname" placeholder="Clubname" required>
                <label for="cname">Clubname</label>
            </div>
            <div class="form-floating">
                <input type="number" class="form-control" id="year" placeholder="year" required>
                <label for="year">Year Founded</label>
                <br>
            </div>
            <div class="form-floating">
                <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
                <label for="floatingTextarea2">Description of Club</label>
            </div>
            <br>
            <label for="formFile" class="form-label">Upload Club Logo</label>
            <input class="form-control" type="file" id="formFile" required><br>
            <button type="button" class="btn btn-primary">Submit</button>
        </form>
        
       
    </body>
</html>