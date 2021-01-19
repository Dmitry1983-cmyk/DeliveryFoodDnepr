
    <?php include("includes/header_admin.php");
    include_once("admin_func/func.php");
    ?>

    <div class="right-container">
        <div class="fon">
            <div class="outer-opacity">
                <div class="right-container-bottom">
                    <div class="inner-container">
                        <div class="add-rest">
                            <div class="restaurant-setting">
                                <ul class="nav-setting-menu">
                                    <li>Добавить блюдо</li>
                                    <!-- <li><a href="">удалить ресторан</a></li>
                                    <li><a href="">переименовать ресторан</a></li> -->
                                </ul>
                            </div>
                            <!------------------------------>
                            <div class="setting">
                                <input type="text" name="rest-name-dish" class="name" placeholder="название ресторана куда добавить">
                            </div>
                            <div class="setting">
                                <input type="text" name="name-dish" class="name" placeholder="название блюда">
                            </div>
                            <div class="setting">
                                <input type="number" name="cost-dish" class="name" placeholder="стоимость блюда">
                            </div>
                            <div class="setting">
                                <input type="file" name="dish-img" id="" class="rest-img">фото блюда
                            </div>
                            <div class="setting">
                                <input type="submit" name="add-dish" class="sub-rest" value="Добавить блюдо">
                            </div>
                            <!------------------------------>
                        </div>

                        <div class="add-rest">
                            <div class="restaurant-setting">
                                <ul class="nav-setting-menu">
                                    <li>Удалить блюдо</li>
                                </ul>
                            </div>
                            <!------------------------------>
                            <div class="setting">
                                <input type="text" name="for-del-rest-name" class="name" placeholder="название ресторана откуда удалить">
                            </div>
                            <div class="setting">
                                <input type="text" name="del-dish-name" class="name" placeholder="название блюда">
                            </div>

                            <div class="setting">
                                <input type="submit" name="delete-desh" class="sub-rest" value="Удалить блюдо">
                            </div>
                            <!------------------------------>
                        </div>

                        <div class="add-rest">
                            <div class="restaurant-setting">
                                <ul class="nav-setting-menu">
                                    <li>Переименовать блюдо</li>
                                </ul>
                            </div>
                            <!------------------------------>
                            <div class="setting">
                                <input type="text" name="rename-rest-name" class="name" placeholder="название ресторана где переименовать">
                            </div>
                            <div class="setting">
                                <input type="text" name="rename-dish-name" class="name" placeholder="название блюда">
                            </div>
                            <div class="setting">
                                <input type="number" name="rename-coat-dish" class="name" placeholder="стоимость блюда">
                            </div>
                            <div class="setting">
                                <input type="number" name="rename-duration" class="name" placeholder="срок выполнения">
                            </div>
                            <div class="setting">
                                <input type="file" name="rename-dish-img" id="" class="rest-img">фото блюда
                            </div>
                            <div class="setting">
                                <input type="submit" name="rename" class="sub-rest" value="Переименовать блюдо">
                            </div>
                            <!------------------------------>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
</body>

</html>
<?php
?>
