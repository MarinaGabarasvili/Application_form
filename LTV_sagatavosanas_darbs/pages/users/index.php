<?php
//select data from DB
$users = [];
foreach ($database->query('select * from app_form')->fetch_all() as $userInfo) {
    $users[(int)$userInfo[0]] = new User(
        $userInfo[1],
        $userInfo[2],
        $userInfo[3],
        (int)$userInfo[0]
    );

}

//write data to JSON file
$usersJson=[];
foreach ($users as $user){

    $user = ['id'=> $user->id(), 'fullname'=> $user->name(), 'birth_date'=> $user->birthDate(), 'image'=>$user->image()];
    array_push($usersJson, $user);

}
$jsonData = json_encode($usersJson);
file_put_contents('users.json', $jsonData);

?>
<!--display data-->

<div style="width: 50%;  margin: 50px auto;">
    <table class="table">
        <thead>
        <tr>
            <th scope="col">Full name</th>
            <th scope="col">Date of birth</th>
            <th scope="col">Image</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($users as $user): ?>
            <tr>
                <td><?php echo $user->name(); ?></td>
                <td><?php echo $user->birthDate(); ?></td>
                <td><img src='<?php echo $user->image(); ?>' style = "height: 40px; width: 40px;" ></td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
</div>
