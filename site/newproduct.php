 <!DOCTYPE html>
 <html lang="en">

 <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Document</title>
 </head>

 <body>

 </body>

 </html>
 <style>
     form {
         max-width: 500px;
         margin: 0 auto;
     }

     label {
         display: block;
         margin-bottom: 10px;
     }

     input[type="text"],
     textarea {
         display: block;
         width: 100%;
         padding: 10px;
         border: 1px solid #ccc;
         border-radius: 5px;
         margin-bottom: 20px;
     }

     input[type="submit"] {
         display: block;
         background-color: #333;
         color: #fff;
         border: none;
         border-radius: 5px;
         padding: 10px 20px;
         cursor: pointer;
     }

     input[type="submit"]:hover {
         background-color: #555;
     }
 </style>
 <div id="add-product-modal" class="modal">
     <div class="modal-content">
         <span class="close">&times;</span>
         <h2>Add a new product</h2>
         <form action="add_product.php" method="post">
             <label for="name">Name:</label>
             <input type="text" name="name" id="name">
             <label for="description">Description:</label>
             <textarea name="description" id="description"></textarea>
             <label for="price">Price:</label>
             <input type="text" name="price" id="price">
             <label for="brand">brand:</label>
             <input type="text" name="brand" id="brand">
             <label for="image">image name:</label>
             <input type="text" name="image" id="image">
             <input type="submit" value="Add Product">
         </form>
     </div>
 </div>
 <script src="script.js"></script>
 </body>

 </html>