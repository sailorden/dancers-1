<?php
head();
?>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Страна</h1>
                <form method="post">
                    <div class="form-group">
                        <label for="name1">Имя:</label>
                        <input type="text" class="form-control" name="country_name" id="name1" value="<?=$country['country_name']?>">
                    </div>
                    <div class="form-group">
                        <label for="name2">Название ENG:</label>
                        <input type="text" class="form-control" name="country_name_en" id="name2" value="<?=$country['country_name_en']?>">
                    </div>
                    <div class="form-group">
                        <label for="name3">Название UA:</label>
                        <input type="text" class="form-control" name="country_name_ua" id="name3" value="<?=$country['country_name_ua']?>">
                    </div>
                    <button type="submit" name="edit" class="btn btn-default">Изменить</button>
                </form>
            </div>
        </div>
    </div>
<?
footer();
?>