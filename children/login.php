<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php include '../includes/styles_js_importer.php'; ?>
    <style>
        html,body {
            height: 100%;
        }
    </style>
</head>
<body>
    <div class="container-fluid bg-primary text-white h-100">
        <div class="row">
            <!-- Will Send info on the design of this page -->
            <div class="col-12 col-sm-2">
            
            </div>
            <div class="col-12 col-sm-8 center">
                <div class="jumbotron bg-success m-0 p-0 d-flex align-items-center min-vh-100">
                    <div class="container p-24">
                        <div class="row">
                            <div class="col-12 col-sm-4 bg-white pt-24 pr-24 d-none d-sm-none d-md-block">
                                <img src="../images/logo.png" class="" alt="">
                            </div>
                            <div class="col-12 col-sm-8 bg-danger">
                                <form action="/action_page.php">
                                    <div class="form-group">
                                        <label for="email">Email address:</label>
                                        <input type="email" class="form-control" placeholder="Enter email" id="email">
                                    </div>
                                    <div class="form-group">
                                        <label for="pwd">Password:</label>
                                        <input type="password" class="form-control" placeholder="Enter password" id="pwd">
                                    </div>
                                    <div class="form-group form-check">
                                        <label class="form-check-label">
                                        <input class="form-check-input" type="checkbox"> Remember me
                                        </label>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </form> 
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="col-12 col-sm-2">
            
            </div>
        </div>
    </div>
</body>
</html>