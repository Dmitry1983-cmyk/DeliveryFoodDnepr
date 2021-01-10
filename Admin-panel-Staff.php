<?php include("includes/header_admin.php"); ?>
    <div class="right-container">
        <div class="fon">
            <div class="outer-opacity">
                <div class="right-container-bottom">
                    <div class="inner-container">
                        <div class="add-rest">
                            <div class="restaurant-setting">
                                <ul class="nav-setting-menu">
                                    <li>Добавить нового сотрудника</li>
                                </ul>
                            </div>
                            <!------------------------------>
                            <div class="setting">
                                <input type="text" name="user-name" class="name" placeholder="имя">
                            </div>
                            <div class="setting">
                                <input type="text" name="last-name" class="name" placeholder="фамилия">
                            </div>
                            <div class="setting">
                                <input type="text" name="mail" class="name" placeholder="почта">
                            </div>
                            <div class="setting">
                                <input type="text" name="phone" class="name" placeholder="телефон">
                            </div>
                            <div class="setting">
                                <input type="text" name="nickname" class="name" placeholder="псевдоним">
                            </div>
                            <div class="setting">
                                <input type="text" name="heshpass" class="name" placeholder="пароль">
                            </div>
                            <div class="setting">
                                <input type="submit" class="sub-rest" value="Добавить сотрудника">
                            </div>
                            <!------------------------------>
                        </div>

                        <div class="add-rest">
                            <div class="restaurant-setting">
                                <ul class="nav-setting-menu">
                                    <li>Уволить сотрудника</li>
                                </ul>
                            </div>
                            <!------------------------------>
                            <div class="setting">
                                <input type="text" name="rest-name" class="name" placeholder="псевдоним сотрудника">
                            </div>

                            <div class="setting">
                                <input type="submit" class="sub-rest" value="Уволить сотрудника">
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