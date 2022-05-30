<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
        <script src="main.js"> </script>
        <title>navbar</title>
        <style>
            <?php include "navbar.css"; ?>
            .result{
                position: absolute;
                box-sizing: border-box;
                background-color: white;
                width: 100%;
                margin-top: 40px;
            } 
            .res{
                margin: 0;
                padding: 7px 10px;
                border: 1px solid #CCCCCC;
                border-top: none;
                cursor: pointer;
            }
            .res:hover{
                background: #f2f2f2;
            }
        </style>
    </head>

    <body>
        <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
            <div class="container justify-content-between w-75">
            <!-- Left elements -->
            <div class="d-flex">
                <!-- Brand -->
                <div class="navbar-brand me-2 mb-1 d-flex align-items-center">
                    <a class="text-decoration-none" href="#"><p class="h2 text-center mb-0" style="font-family: 'Meie Script', cursive; color: #e24141;">Magnificent</p>
                    <p class="text-center" style="color: #FF860D;">CLOTHING STORE</p></a>
                </div>
            </div>
            <!-- Left elements -->

            <!-- Center elements -->
            <!-- Search form -->
            <div class="flex-column search" style="width: 550px;">
                <form method="post" action="index.php" class="input-group my-auto d-sm-flex w-100">
                    <input
                        id="search"
                        autocomplete="off"
                        type="text"
                        name="search"
                        class="form-control border border-1 border-dark rounded in-search"
                        placeholder="Que cherchez-vous..."
                        style="min-width: 125px;"
                    />
                    <button class="btn input-group-text d-lg-flex but-search" value="submit" style="background-color: #ee6a6a; color: rgb(59, 54, 54);"
                        ><img src="icons/search.svg" width="25" height="25" alt="" style=" padding-left: 6px;"/>
                    </button>
                    <div class="result" id="output"></div>
                </form>
                
            </div>
            <!-- Center elements -->

            <!-- Right elements d-none d-sm-flex-->
            <ul class="navbar-nav flex-row ">
                <li class="nav-item me-3 me-lg-1 pr-3 bg-light icon">
                <a class="nav-link" href="login.php">
                    <img src="icons/person.svg" width="35" height="35" alt="" style="filter: invert(30%) saturate(614%) hue-rotate(156deg) brightness(97%) contrast(89%);"/>
                </a>
                </li>
                <li class="nav-item mr-lg-1 bg-light icon">
                    <a class="cartbag nav-link" href="orders.php">
                        <img src="icons/cart2.svg" width="32" height="32" alt="" style="filter: invert(30%) saturate(614%) hue-rotate(156deg) brightness(97%) contrast(89%);"/>
                        <span class="badge rounded-pill badge-notification" style="background-color: #ee6a6a; color: rgb(59, 54, 54);">0</span>
                    </a>
                </li>
                <li class="nav-item me-3 me-lg-1 pl-3 bg-light icon">
                    <a class="nav-link" href="favoris.php">
                        <img src="icons/suit-heart.svg" width="31" height="31" alt="" style="filter: invert(30%) saturate(614%) hue-rotate(156deg) brightness(97%) contrast(89%);"/>
                        <span class="badge rounded-pill badge-notification" style="background-color: #ee6a6a; color: rgb(59, 54, 54);">0</span>
                    </a>
                </li>
            </ul>
            <!-- Right elements -->
            </div>
            
        </nav>
        <script type="text/javascript">
            $(document).ready(function(){
            $("#search").keyup(function(){
                var query = $(this).val();
                if (query != "") {
                    $.ajax({
                    url: 'search_data.php',
                    method: 'POST',
                    data: {query:query},
                    success: function(data){
        
                        $('#output').html(data);
                        $('#output').css('display', 'block');
        
                        $("#search").focusout(function(){
                            $('#output').css('display', 'block');
                        });
                        $("#search").focusin(function(){
                            $('#output').css('display', 'block');
                        });
                    }
                    });
                } else {
                $('#output').css('display', 'block');
                }
            });
            });
        </script>
    </body>
</html>