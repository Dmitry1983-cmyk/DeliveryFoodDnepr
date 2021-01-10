<?php include("includes/header_admin.php"); ?>
    <div class="right-container">
        <div class="fon">
            <div class="outer-opacity">
                <div class="right-container-bottom">
                    <div class="inner-container">
                        <div class="add-rest">
                            <div class="restaurant-setting">
                                <ul class="nav-setting-menu">
                                    <li>Добавить ресторан</li>
                                    <!-- <li><a href="">удалить ресторан</a></li>
                                    <li><a href="">переименовать ресторан</a></li> -->
                                </ul>
                            </div>
                            <!------------------------------>
                            <div class="setting">
                                <input type="text" name="rest-name" class="name" placeholder="название ресторана">
                            </div>
                            <div class="setting">
                                <input type="number" name="rest-rating" class="name" placeholder="рейтинг ресторана">
                            </div>
                            <div class="setting">
                                <input type="number" name="rest-duration" class="name" placeholder="срок выполнения">
                            </div>
                            <div class="setting">
                                <input type="file" name="rest-img" id="" class="rest-img">Установи интерьер ресторана
                            </div>
                            <div class="setting">
                                <input type="submit" class="sub-rest" value="Добавить ресторан">
                            </div>
                            <!------------------------------>
                        </div>

                        <div class="add-rest">
                            <div class="restaurant-setting">
                                <ul class="nav-setting-menu">
                                    <li>Удалить ресторан</li>
                                </ul>
                            </div>
                            <!------------------------------>
                            <div class="setting">
                                <input type="text" name="rest-name" class="name" placeholder="название ресторана">
                            </div>

                            <div class="setting">
                                <input type="submit" class="sub-rest" value="Удалить ресторан">
                            </div>
                            <!------------------------------>
                        </div>

                        <div class="add-rest">
                            <div class="restaurant-setting">
                                <ul class="nav-setting-menu">
                                    <li>Переименовать ресторан</li>
                                </ul>
                            </div>
                            <!------------------------------>
                            <div class="setting">
                                <input type="text" name="rest-name" class="name" placeholder="название ресторана">
                            </div>
                            <div class="setting">
                                <input type="number" name="rest-rating" class="name" placeholder="рейтинг ресторана">
                            </div>
                            <div class="setting">
                                <input type="number" name="rest-duration" class="name" placeholder="срок выполнения">
                            </div>
                            <div class="setting">
                                <input type="file" name="rest-img" id="" class="rest-img">Установи интерьер ресторана
                            </div>
                            <div class="setting">
                                <input type="submit" class="sub-rest" value="Переименовать ресторан">
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