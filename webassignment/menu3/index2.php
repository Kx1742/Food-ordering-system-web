<?php 
//establish connection
define("DB_HOST","localhost"); //refer to comp u use to post db management system
//point out db server
define("DB_USER","root");
define("DB_PASSWORD","");
define("DB_DATABASE","foodrestaurant"); 
    $conn=mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_DATABASE);//call variable without dollar sign
    //
    $query="SELECT * FROM food ORDER BY id ASC"; //select all
    $result = mysqli_query($conn,$query);
    //$result= $conn -> query ()
    //result =conn ->query($query)
    if(mysqli_num_rows($result)>0)
    {
        echo"
        <table>
        <tr>
            <th> Id </th>
            <th> Subject </th>
            <th> Message </th>
            <th> Type </th>
            <th> Posted Date </th>
        </tr>
        ";
        while ($row=mysqli_fetch_assoc($result))
        {
            //fetch array one by one
            echo "
            <tr>
            <td> {$row['id']}</td>
            <td> {$row['product_name']}</td>
            <td> {$row['food_category']}</td>
            <td> <image src='{$row['food_image_location']}' alt=''></td>
            <td>  ></td>
            <td> {$row['food_description']}</td>
            </tr>
            ";
        }
        echo "</table>";
    }
    //check content ttl row in db
    mysqli_close($conn);
    ?>