<?php 
$data = "k";
$output = '';
if(isset($_GET['q'])){
    $data = $_GET['q'];
}
$db = mysqli_connect("localhost", "root", "", "tpc");
if($db->connect_error){
    exit('DB not connected');
}
$x = "SELECT * FROM tree WHERE id LIKE '%".$data."%' OR name LIKE '%".$data."%' OR variant LIKE '%".$data."%' OR stock LIKE '%".$data."%' OR planted LIKE '%".$data."%'";
$y = $db->query($x);

if(mysqli_num_rows($y) > 0)
{
    $output .= '<div class="table-responsive">
                    <table class="table table bordered">
                        <tr>
                            <th>ID</th>
                            <th>NAME</th>
                            <th>VARIANT</th>
                            <th>STOCK</th>
                            <th>PLANTED</th>
                        </tr>';
    while($row = mysqli_fetch_array($y))
    {
        $output .= '
            <tr>
                <td>'.$row["id"].'</td>
                <td>'.$row["name"].'</td>
                <td>'.$row["variant"].'</td>
                <td>'.$row["stock"].'</td>
                <td>'.$row["planted"].'</td>

            </tr>
        ';
    }
    echo $output;
}
else
{
    echo 'Data Not Found';
}
?>
