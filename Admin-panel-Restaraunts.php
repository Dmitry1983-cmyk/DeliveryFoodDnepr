<?php include("includes/header_admin.php");
include_once("admin_func/func.php");
?>
    <div class="right-container">
        <div class="fon">
            <div class="outer-opacity">
                <div class="right-container-bottom">
                    <form method="post" enctype="multipart/form-data">
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
                                <input type="text" name="add-rest-name" class="name" placeholder="название ресторана">
                            </div>
                            <div class="setting">
                                <input type="number" name="add-rest-rating" class="name" placeholder="рейтинг ресторана">
                            </div>
                            <div class="setting">
                                <input type="number" name="add-rest-duration" class="name" placeholder="срок выполнения">
                            </div>
                            <div class="setting">
                                <input type="file" name="file">Установи интерьер ресторана
                            </div>
                            <div class="setting">
                                <input type="submit" name="create" value="Добавить ресторан">
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
                                <input type="text" name="for-del-rest-name" class="name" placeholder="название ресторана">
                            </div>

                            <div class="setting">
                                <input type="submit" name="delete-rest" class="sub-rest" value="Удалить ресторан">
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
                                <input type="text" name="old-rest-name" class="name" placeholder="старое название ресторана">
                            </div>
                            <div class="setting">
                                <input type="text" name="new-rest-name" class="name" placeholder="новое название ресторана">
                            </div>
                            <div class="setting">
                                <input type="number" name="new-rest-rating" class="name" placeholder="рейтинг ресторана">
                            </div>
                            <div class="setting">
                                <input type="number" name="new-rest-duration" class="name" placeholder="срок выполнения">
                            </div>
                            <div class="setting">
                                <input type="file" name="new-file">Новый интерьер ресторана
                            </div>
                            <div class="setting">
                                <input type="submit" name="rename-rest" value="Переименовать ресторан">
                            </div>
                            <!------------------------------>
                        </div>
                    </div>
</form>
                </div>
                <?php addRestaurant();renameRestaurant();removeRestaurant();?>
            </div>
        </div>
    </div>

</header>
</body>
</html>
