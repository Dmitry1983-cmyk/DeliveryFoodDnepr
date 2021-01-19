<?php include("includes/header_admin.php");
include_once ("admin_func/func.php");?>
    <div class="right-container">
        <div class="fon">
            <div class="outer-opacity">
                <div class="right-container-bottom">
                    <form action="Admin-panel-Staff.php" method="post">
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
                                <input type="password" name="heshpass" class="name" placeholder="пароль">
                            </div>
                            <div class="setting">
                                <input type="submit" name="add-staff" class="sub-rest" value="Добавить сотрудника">
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
                                <input type="text" name="nickname-staff" class="name" placeholder="псевдоним сотрудника">
                            </div>

                            <div class="setting">
                                <input type="submit" name="to-fire" class="sub-rest" value="Уволить сотрудника">
                            </div>
                            <!------------------------------>
                        </div>
                        <!--------------------------------------->
                        <div class="add-rest_2">
                            <div class="restaurant-setting">
                                <ul class="nav-setting-menu">
                                    <li>Сотрудники</li>
                                </ul>
                            </div>
                            <!------------------------------>
                            <div class="table">
                                <table id="staff-table">
                                    <tr>
                                        <th>Имя</th>
                                        <th>Фамилия</th>
                                        <th>Телефон</th>
                                        <th>Псевдоним</th>
                                        <th>Почта</th>
                                    </tr>
                                    <?php getStaff();?>
                                </table>
                                <!------------------------------>
                            </div>
                        <!---------------------------------------->

                    </div>
                    </form>
                    <?php addStaff();toFire();?>
                </div>
            </div>
        </div>
    </div>
</header>
</body>

</html>
