<?php

    include 'config.php';
    if(isset($_POST['edit']))
    {
        header("location: edit.php");
    }
// ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Product | 1 Coin Sandwich</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- <link rel="stylesheet" href="Product1.css"> -->
</head>
<style>
*
{
    margin: 0;
    padding: 0;
}


.sidebar
{
    outline: none;
    border: none;
    text-decoration: none;
    font-family: "Poppins", sans-serif;
    /* position:fixed; */
}

.logo1 
{
    margin-left: 20px;
    float:left;
    /* border: 1px solid black; */
}

.logo1 a:hover
{
    background: none;
}

body
{
    background: #DDDDDD;
    
    /* margin-right: 25px; */
    margin: 30px;
    margin-left: 120px;
}

nav
{
    position: fixed;
    top: 0;
    bottom: 0;
    height: 100%;
    left:0;
    background: linear-gradient(#ff7b00,#ffb700);
    width: 90px;
    overflow:hidden;
    transition: width 0.2s linear;
    box-shadow: 0 20px 35px rgba(0, 0, 0, 0.1);
}

.logo
{
    text-align: center;
    display: flex;
    transition: all 0.5s ease;
    margin: 10px 0 0 10px;
}
.logo img
{
    width: 45px;
    height: 45px;
    border-radius: 50%;
}

.logo img:hover
{
    cursor: pointer;
}

.logo span
{
    font-weight: bold;
    padding-left: 16px;
    font-size: 18px;
    text-transform: uppercase;  
}

.logo:hover
{
    background: none;
    cursor:unset;
}

a
{
    color: rgb(85,83,83);
    font-size: 14px;
    display: table;
    width: 200px;
    padding: 5px;
    padding-left: 10px;
    margin-top: 10px;
    text-decoration: none;
    border: 1px slo;
}

.sidebar
{
    top: 0;
    left: 0;
}

.sidebar .fa
{
    position: relative;
    width: 70px;
    height: 40px;
    top: 14px;
    font-size: 20px;
    text-align: center;
}

.nav-item
{
    position: relative;
    top: 12px;
    margin-left: 10px;
}

a:hover
{
    background: linear-gradient(to left,#ffaa00,#ffea00);
}

nav:hover
{
    width: 200px;
    transition: all 0.5s ease;
}

.logout
{
    position: absolute;
    bottom: 0;
}

.select-box
{
    display: flex;
    flex-direction: column;
    /* padding: auto; */
    
}

.select-box .option-container
{
    background:linear-gradient(#ff7b00,#ffb700);
    color: white;
    width: 400px;
    transition: all 0.4s;
    border-radius: 8px;
    overflow: hidden;
    max-height: 0;
    opacity: 0;
 
    order: 1;
}

.selected::after
{
    content: "";
    background-size: contain;
    background-repeat: no-repeat;
    position: absolute;
    height: 100%;
    width: 15px;
    transition: all 0.4s;
}

.selected img
{
    width: 15px;
    height: 100%;
    float: right;
    transition: all 0.4s;

}
.selected
{
    background: linear-gradient(#ff7b00,#ffb700);
    border-radius: 8px;
    margin-bottom: 8px;
    color: white;
    width: 350px;
    margin-top: 20px;
    order: 0;
}

.select-box .option-container.active
{
    max-height: 180px;
    opacity: 1;
    overflow-y: scroll;
}

.select-box .option-container.active + .selected img
{
    transform: rotateX(180deg);
    top: -14px;
    transition: all 0.4s;
}

.select-box .option-container::-webkit-scrollbar
{
    width: 8px;
    background: #ff7b00;
    border-radius: 0 8px 8px 0;
}

.select-box .option-container::-webkit-scrollbar-thumb
{
    background: #fff75e;
    border-radius: 0 8px 8px 0;
}

.select-box .option, .selected
{
    padding: 10px 24px;
    cursor: pointer;
}

.select-box .option:hover
{
    background: linear-gradient(to left,#ffaa00,#ffea00);;
    color: black;
}

.select-box label
{
    cursor: pointer;
}

.select-box .option .radio
{
    display: none;
}

.select-box h1
{
    border-bottom: 3px solid gray;
    text-align: center;
    font-size: 3em;
    font-family: sans-serif;
    background: linear-gradient(#ff7b00,#ffb700);
    border-top-left-radius: 20px;
    border-top-right-radius: 20px;
    padding-bottom: 10px;
    /* padding: auto; */
}
.select-box h1 img
{
    width: 90px;
}

.search
{
    max-width: 300px;
    background: rgba(255,255,255,0.2);
    display: flex;
    padding: 10px;
    align-items: center;
    border-radius: 60px;
}

.search input
{
    border: 1px solid black;
    background: transparent;
    flex: 1;
    border: 0;
    outline: none;
    padding: 5px;
    font-size: 15px;
    color: rgb(85,83,83);
}

::placeholder
{
    color: rgb(85,83,83);
}

.search button img
{
    width: 20px;
}
.search button
{
    border: 0;
    border-radius: 50%;
    width: 20px;
    height: 20px;
    background: transparent;
    cursor: pointer;
    filter: grayscale(0);
}

.combine .search
{
    float: right;
    margin-top: 15px;
    margin-right: 20px;
}

.create a 
{
    border: none;
    background: linear-gradient(to right,#ff7b00,#ffb700);
    margin: 10px;
    margin-left: 20px;
    padding: 10px;
    border-radius: 20px;
    color: white;
    width: 200px;
    font-weight: bold;
    float: right;
}

.create .fa
{
    color: rgb(85,83,83);
}

.create a:hover
{
    background: linear-gradient(to left,#ffaa00,#ffea00);
    color: black;
    cursor: pointer;
}


table
{
    width: 100%;
    height: 400px;
    background: #fafafa;
    border-collapse: collapse;
    border-spacing: 0;
    border-radius: 12px 12px 0 0;
    overflow: hidden;
    text-align: center;
    box-shadow: 0px 5px 12px rgba(32, 32, 32, 0.3);
}



th
{
    background: linear-gradient(#ff7b00,#ffb700);
    color: #fafafa;
    text-transform: uppercase;
}

td
{
    font-family: Arial, Helvetica, sans-serif;
    font-weight: bold;
    /* text-align: center; */
}

tr:nth-child(odd)
{
    background: #dee2e6;
}

tr:hover td
{
    cursor: pointer;
    background: linear-gradient(#ffaa00,#ffea00);
    color: white;
}

/* tr button
{
    border: none;
    padding: 5px;
    border-radius: 20px;
    background: none;

}

tr button
{
    background: linear-gradient(#ff7b00,#ffb700);
    border-radius: 20px;
    width: 100px;
    
}

tr button:hover
{
    cursor: pointer;
    background: linear-gradient(#c32f27,#ff4800);
    font-weight: bold;
    color: white;
} */

tr a
{
    background: linear-gradient(#ff7b00,#ffb700);
    border-radius: 20px;
    text-align: center;

    width: 100px;
}

tr a:hover
{
    background: none;
    background: linear-gradient(#c32f27,#ff4800);
    font-weight: bold;
    color: white;
    cursor: pointer;

}

tr a button
{
    background: none;
    border: none;
    /* padding-left: 70px; */
    width: 100px;
    display: block;
}

tr a button:hover
{
    cursor: pointer;
}

</style>
<?php
        
?>
<body>
    <div class="container">
    <?php include 'adminsidebar.php' ?>
    
        <div class="product">
            <div id="productmanager">    
                <div class="select-box">
                    <div class="option-container">
                        
                        <div class="option">
                            <input type="radio" class="radio" id="automobiles" name="Category">
                            <label for="automobiles">Sandwich</label>
                        </div>
                        <div class="option">
                            <input type="radio" class="radio" id="automobiles" name="Category">
                            <label for="automobiles">Drink</label>
                        </div>
                        
                        
                        
                    </div>
                    
                    <h1>
                        
                        <?php echo '<img src="images/management.png" alt="">'?> Product</h1>
                        <?php
                        if(isset($_SESSION['success'])&& $_SESSION['success'] != '')
                        {
                            echo '<h3 class="deleted">'.$_SESSION['success'].'</h3>';
                            unset($_SESSION['success']);
                        }
                        if(isset($_SESSION['status'])&& $_SESSION['status'] != '')
                        {
                            echo '<h3 class="nodeleted">'.$_SESSION['status'].'</h3>';
                            unset($_SESSION['status']);
                        }
                    ?>
                    <div class="combine">
                        <form action="" class="search">
                            <input type="text" placeholder="Search">
                            <button><?php echo '<img src="image/search.png" alt="">'?></button>
                        </form>
                        <div class="selected">
                            Select an Option <?php echo '<img src="images/arrowdown.png" alt="">'?>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="create">
                    <form action="" method="POST" enctype="multipart/form-data">
                        <a href="addproduct.php?name=<?php echo $host_image['username']?>"><i class="fa fa-plus-circle"></i><span> Create a product</span></a>
                        <br><button onclick="window.print()">Print this page</button>

                    </form>
            </div>
            <table>
                <tr>
                    <th>PRODUCT_IMAGE</th>
                    <th>PRODUCT_NAME</th>
                    <th>PRICE</th>
                    <th>CATEGORY</th>
                    <th>OPTION</th>
                    <th>EDITING</th>
                </tr>
                <?php
                    $p = "SELECT * FROM foodmenu";
                    $query= mysqli_query($conn,$p);

                    while($product = mysqli_fetch_assoc($query))
                    {
                ?>
                    <tr>
                        <td><img alt="<?php echo $product['Food_Name']?>" style="width: 100px;" src="<?php echo $product['images_path']?>"></td>
                        <td><?php echo $product['Food_Name']?></td>
                        <td><?php echo "RM ".$product['Food_Price']?></td>
                        <td><?php echo $product['Food_Cat']?></td>
                        <td><?php echo $product['options']?></td>
                        <td class="button">
                            <form action="" method="POST">
                            <a href="editproduct.php?id=<?php echo $product['Food_ID']?>&&name=<?php echo $host_image['username']?>">Edit</a>
                            <a href="delproduct.php?id=<?php echo $product['Food_ID']?>&&name=<?php echo $host_image['username']?>"><i class="fa fa-trash"></i></a>
                            <input type="hidden" name="prod_id" value="<?php echo $product['Food_ID']?>">
                            </form>
                        </td>
                    </tr>
                    <?php
                    }
                    
                    // if(isset($_POST['edit']))
                    // {
                    //     $id = "SELECT Prod_ID FROM product";
                    //     header("location: edit.php?id='$id'");
                    // }
                    if(isset($_POST['del']))
                    {
                        
                    }
                ?>
            </table>
        </div>
    </div>
    <script>
        const selected = document.querySelector(".selected")
        const optionContainer = document.querySelector(".option-container")
        const optionList = document.querySelector(".option")

        selected.addEventListener("click",()=>{
            optionContainer.classList.toggle("active")
        })
    </script>
</body>
</html>