  <?php include("includes/header_admin.php");include_once("admin_func/func.php"); ?>

    <div class="right-container">
        <div class="fon">
            <div class="outer-opacity">
                <div class="right-container-bottom">
                    <div class="inner-container">
                        <div class="orders-table">
                            <div class="table">
                                <table>
                                    <tr>
                                        <th>Имя</th>
                                        <th>Фамилия</th>
                                        <th>Номер телефона</th>
<!--                                        <th>Ресторан</th>-->
                                        <th>Блюдо</th>
                                        <th>Цена</th>
                                        <th>Количество</th>
                                    </tr>

                                        <?php getOrders();?>


                                </table>
                            </div>
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