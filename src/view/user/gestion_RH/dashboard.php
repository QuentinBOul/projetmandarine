<?php
declare(strict_types=1);
use App\core\Dao;
use App\src\model\Users;

$dao = new Dao;
$className = "Users";
echo '<h1 class="text-center my-5">DASHBOARD Gestion RH</h1>';
$dao->connect();

?>
<table class="table">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Nom</th>
            <th scope="col">Fonction</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $dao->getMany($className);

?>
    </tbody>
</table>