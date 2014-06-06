<?php
ini_set('session.save_handler', 'memcached');
ini_set('session.save_path', 'PERSISTENT=pool ' . getenv('MEMCACHIER_SERVERS'));
ini_set('memcached.sess_binary', 1);
ini_set('memcached.sess_sasl_username', getenv('MEMCACHIER_USERNAME'));
ini_set('memcached.sess_sasl_password', getenv('MEMCACHIER_PASSWORD'));

const SESSION_KEY = 'count';

session_start();

if (empty($_SESSION[SESSION_KEY])) {
    $_SESSION[SESSION_KEY] = 0;
}

$_SESSION[SESSION_KEY]++;
?>
<h1>Dyno <?= htmlspecialchars(getenv('DYNO')) ?></h1>
<div>
<?php var_dump($_SESSION) ?>
</div>
