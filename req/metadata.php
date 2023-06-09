<?php
define("BASE_URL", "http://localhost:8080/supercafe");
define("API_URL", BASE_URL . '/api/index.php')
?>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="author" content="Tatiana Chess (chet01)" />

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="<?= BASE_URL ?>/styles/main.css">

<script src="https://unpkg.com/vue@3.2.0/dist/vue.global.prod.js"></script>
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
<script>
    const BASE_URL = '<?= BASE_URL ?>';
    const API_URL = '<?= API_URL ?>';
</script>