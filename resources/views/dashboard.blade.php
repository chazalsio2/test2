<?php 
$bdd = new PDO("mysql:host=localhost;dbname=technique;charset=utf8", "root", "");
?>

@section('content')
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
        
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="card">
                        <div class="card-header">
                            list des utilisateur
                        </div>
                        <div>
                            <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">Id</th>
                                    <th scope="col">Pseudo</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Date d'inscription</th>
                                    <th scope="col">supprimer</th>
                                    <th scope="col">Modifier</th>
                                </tr>
                            </thead>
                        </div>
                        <div class="card-body">
                            <tbody>
                                <tr>
                                    <?php
                                        $recupuser = $bdd->query('SELECT * FROM users');
                                        while($user = $recupuser->fetch()) {
                                            ?>
                                    <td>
                                  

                                            <p><?= $user['id'] ?></p>

                                      
                                    </td>
                                          <?php
                                         }
                                     
                                    ?> 
                                    <td>
                                  <?php
                                        $recupuser = $bdd->query('SELECT * FROM users');
                                        while($user = $recupuser->fetch()) {
                                            ?>

                                        <p><?= $user['name'] ?></p>
                                        
                                       <?php
                                         }
                                     
                                    ?> 
                                    </td>

                                    <td>
                                  <?php
                                        $recupuser = $bdd->query('SELECT * FROM users');
                                        while($user = $recupuser->fetch()) {
                                            ?>

                                        <p><?= $user['email'] ?></p>
                                        
                                       <?php
                                         }
                                     
                                    ?> 
                                    </td>

                                    <td>
                                  <?php
                                        $recupuser = $bdd->query('SELECT * FROM users');
                                        while($user = $recupuser->fetch()) {
                                            ?>

                                       <p><?= $user['created_at']; ?></a></p>
                                        
                                       <?php
                                         }
                                     
                                    ?> 
                                    </td>

                                    <td>
                                    <?php
                                        $recupuser = $bdd->query('SELECT * FROM users');
                                        while($user = $recupuser->fetch()) {
                                            ?>
                                       <div><p><a href="bannir.php?id=<?= $user['id'];?> " class="btn btn-danger">supprimer</a></p></div>  
                                        <?php
                                         }
                                     
                                    ?> 
                                    </td>

                                    <td>
                                    <?php
                                        $recupuser = $bdd->query('SELECT * FROM users');
                                        while($user = $recupuser->fetch()) {
                                            ?>
                                       <div><p><a href="modifier.php?id=<?= $user['id'];?> " class="btn btn-primary">modifier</a></p></div>  
                                        <?php
                                         }
                                     
                                    ?> 
                                    </td>
                            </tr>
                            </tbody>
                            </table>
                            <div class="card">
                                    <h5 class="card-header">Ordinateur</h5>
                                    <div class="card-body p-0">
                                        <div class="table-responsive">
                                            <table class="table">
                                                <thead class="bg-light">
                                                    <tr class="border-0">
                                                        <th class="border-0">Id</th>
                                                        <th class="border-0">Ordinateur</th>
                                                        <th class="border-0">Suprimer</th>
                                                        <th class="border-0">Modifier</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                <tr>
                                                        <td>
                                                      <?php
                                                            $recupuser = $bdd->query('SELECT * FROM ordinateur');
                                                            while($user = $recupuser->fetch()) {
                                                                ?>

                                                                <?= $user['id'] ?></p>

                                                           <?php
                                                             }
                                                         
                                                        ?> 
                                                        </td>
                                                             
                                                        <td>
                                                      <?php
                                                            $recupuser = $bdd->query('SELECT * FROM ordinateur');
                                                            while($user = $recupuser->fetch()) {
                                                                ?>

                                                            <p><?= $user['ordinateur'] ?></p>
                                                            
                                                           <?php
                                                             }
                                                         
                                                        ?> 
                                                        </td>

                                                        <td>
                                                        <?php
                                                            $recupuser = $bdd->query('SELECT * FROM ordinateur');
                                                            while($user = $recupuser->fetch()) {
                                                                ?>
                                                           <div><p><a href="bannirpc.php?id=<?= $user['id'];?> " class="btn btn-danger">supprimer</a></p></div>  
                                                            <?php
                                                             }
                                                         
                                                        ?> 
                                                        </td>

                                                        <td>
                                                        <?php
                                                            $recupuser = $bdd->query('SELECT * FROM ordinateur');
                                                            while($user = $recupuser->fetch()) {
                                                                ?>
                                                           <div><p><a href="modifierPC.php?id=<?= $user['id'];?> " class="btn btn-primary">modifier</a></p></div>  
                                                            <?php
                                                             }
                                                         
                                                        ?> 
                                                        </td>
                                                        </tr>
                                                </tbody>
                                            </table>
                                            </div>
                                    </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                           

                            <div class="container">
                                  <div class="row">
                                        <div class="col-2">

                                        </div>
                                        <div class="col-10">
        <div class="col-xl-auto col-lg-12 col-md-6 col-sm-12 col-12">
                                <div class="card">
                                    <h5 class="card-header">Atribution</h5>
                                    <div class="card-body p-0">
                                        <div class="table-responsive">
                                            <table class="table">
                                                <thead class="bg-light">
                                                    <tr class="border-0">
                                                        <th class="border-0">Id_Utilisateur</th>
                                                        <th class="border-0">Id_Ordinateur</th>
                                                        <th class="border-0">Date d'emprint</th>
                                                        <th class="border-0">Horaire</th>
                                                        <th class="border-0">annuler</th>

                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                      <?php
                                                            $recupuser = $bdd->query('SELECT * FROM relation');
                                                            while($user = $recupuser->fetch()) {
                                                                ?>

                                                                <?= $user['id_user'] ?></p>

                                                           <?php
                                                             }
                                                         
                                                        ?> 
                                                        </td>
                                                             
                                                        <td>
                                                      <?php
                                                            $recupuser = $bdd->query('SELECT * FROM relation');
                                                            while($user = $recupuser->fetch()) {
                                                                ?>

                                                            <p><?= $user['id_ordinateur'] ?></p>
                                                            
                                                           <?php
                                                             }
                                                         
                                                        ?> 
                                                        </td>

                                                        <td>
                                                      <?php
                                                            $recupuser = $bdd->query('SELECT * FROM relation');
                                                            while($user = $recupuser->fetch()) {
                                                                ?>

                                                            <p><?= $user['date'] ?></p>
                                                            
                                                           <?php
                                                             }
                                                         
                                                        ?> 
                                                        </td>

                                                        <td>
                                                      <?php
                                                            $recupuser = $bdd->query('SELECT * FROM relation');
                                                            while($user = $recupuser->fetch()) {
                                                                ?>

                                                            <p><?= $user['heurDebut'] ?></p>
                                                            
                                                           <?php
                                                             }
                                                         
                                                        ?> 
                                                        </td>
														<td>
                                                        <?php
                                                            $recupuser = $bdd->query('SELECT * FROM relation');
                                                            while($user = $recupuser->fetch()) {
                                                                ?>
                                                           <div><p><a href="bannirat.php?id_user=<?= $user['id_user'];?> " class="btn btn-danger">annuler</a></p></div>  
                                                            <?php
                                                             }
                                                         
                                                        ?> 
                                                        </td>
                                                       

                                                        
                                                </tr>
                                </tbody>
                            </table> </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
@andsection