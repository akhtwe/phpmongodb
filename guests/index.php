<?php
    // phpinfo();die();
    require_once __DIR__ . '/../vendor/autoload.php';

    $client=new MongoDB\Client;
    $companydb=$client->companydb;
    $col_guest=$companydb->guest;

    // $result=$companydb->createCollection('empcollection');
    $guest_list=$col_guest->find();
    
?>
<style>
table, td, th {
  border: 1px solid black;
  height: 30px;
}
</style>
<div style="text-align:center;">
    <div style="width:60%;display:inline-block;">
    <h2 style="text-align:center; width:100%;"> 
        <strong> Guest List</strong>
        <a href="/guests/add" style="float:right;background: #5ec35e;color: white;padding: 8px 14px;border-radius: 11px;text-decoration: none;font-size: 19px;"> Add New</a>
    </h2>
    <table style=" border-collapse: collapse; width:100%; margin:0 auto;">
        <thead style="background:black;color:white;">
            <tr>
                <th width="10%">#</th>
                <th width="40%">Object Id</th>
                <th>Name</th>
            </tr>
        </thead>
        <tbody>
        <?php 
            foreach ($guest_list as $key => $value) {
        ?>
            <tr>
                <td style="text-align:center;"><?php echo $key+1;?></td>
                <td><?php echo $value->_id;?></td>
                <td><?php echo $value->name;?></td>
            </tr>
        <?php
            }
        ?>
        </tbody>
    </table>
    </div>
</div>