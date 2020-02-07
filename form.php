<?php
if(!empty($_POST['send'])) {
    echo $_POST['one'];
    $_POST['send'] = 'send';
}