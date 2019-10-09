<?php
    require "header.php";
?>
    <div class="row d-flex justify-content-center searchContainer">
        <form action="">
            <input type="text" class="searchBar" placeholder="Search" size="100%">
            <Button type="submit" class="btn"><i class="fas fa-search searchIcon"></i></button>
        </form>
    </div>
    <div class="container-fluid d-flex justify-content-center">  
        <div class="row itemsContainer">
            <div class="itemsCol">
                <h1>Items column 1</h1>
            </div>
            <div class="itemsCol">
                <h1>Items column 2</h1>
            </div>
            <div class="itemsCol">
                <h1>Items column 3</h1>
            </div>
        </div>

    </div>
<?php
    require "footer.php"
?>