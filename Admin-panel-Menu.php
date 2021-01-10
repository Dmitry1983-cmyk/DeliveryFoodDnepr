
    <?php include("includes/header_admin.php"); ?>

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
                                <input type="text" name="rest-name" class="name" placeholder="название блюда">
                            </div>
                            <div class="setting">
                                <input type="number" name="rest-rating" class="name" placeholder="стоимость блюда">
                            </div>
                            <div class="setting">
                                <input type="number" name="rest-duration" class="name" placeholder="срок выполнения">
                            </div>
                            <div class="setting">
                                <input type="file" name="rest-img" id="" class="rest-img">фото блюда
                            </div>
                            <div class="setting">
                                <input type="submit" class="sub-rest" value="Добавить блюдо">
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
                                <input type="text" name="rest-name" class="name" placeholder="название блюда">
                            </div>

                            <div class="setting">
                                <input type="submit" class="sub-rest" value="Удалить блюдо">
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
                                <input type="text" name="rest-name" class="name" placeholder="название блюда">
                            </div>
                            <div class="setting">
                                <input type="number" name="rest-rating" class="name" placeholder="стоимость блюда">
                            </div>
                            <div class="setting">
                                <input type="number" name="rest-duration" class="name" placeholder="срок выполнения">
                            </div>
                            <div class="setting">
                                <input type="file" name="rest-img" id="" class="rest-img">фото блюда
                            </div>
                            <div class="setting">
                                <input type="submit" class="sub-rest" value="Переименовать блюдо">
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
