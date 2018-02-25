<?php
    $product_id = $_GET['id'];
    $query_result = $obj_product->select_product_info_by_id($product_id);
    $product_info = mysqli_fetch_assoc($query_result);
    
?>

<div class="row">
    <div class="col-lg-12">
        <hr/>
        
        <div>
            <table class="table table-bordered table-hover">
                <tr>
                    <td>Product ID</td>
                    <td><?php echo $product_info['product_id']; ?></td>
                </tr>
                <tr>
                    <td>Product Name</td>
                    <td><?php echo $product_info['product_name']; ?></td>
                </tr>
                <tr>
                    <td>Category Name</td>
                    <td><?php echo $product_info['category_name']; ?></td>
                </tr>
                <tr>
                    <td>Manufacturer Name</td>
                    <td><?php echo $product_info['manufacturer_name']; ?></td>
                </tr>
                <tr>
                    <td>Product Price</td>
                    <td><?php echo $product_info['product_price']; ?></td>
                </tr>
                <tr>
                    <td>Product Quantity</td>
                    <td><?php echo $product_info['product_quantity']; ?></td>
                </tr>
                <tr>
                    <td>Product Short Description</td>
                    <td><?php echo $product_info['product_short_description']; ?></td>
                </tr>
                <tr>
                    <td>Product Long Description</td>
                    <td><?php echo $product_info['product_long_description']; ?></td>
                </tr>
                <tr>
                    <td>Product Image</td>
                    <td>
                        <img src="<?php echo $product_info['product_image']; ?>" alt="" height="200" width="200">
                    </td>
                </tr>
                <tr>
                    <td>Publication Status</td>
                    <td><?php 
                        if ($product_info['publication_status']  == 1) {
                            echo 'Published';
                        } else {
                            echo "Unpublished";
                        }
                    ?></td>
                </tr>
            </table>
            
        </div>
        
    </div>
</div>