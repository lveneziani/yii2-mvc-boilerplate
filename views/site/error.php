<?php

/** @var yii\web\View $this */
/** @var string $name */
/** @var string $message */
/** @var Exception$exception */

use yii\helpers\Html;

$this->title = $name;
?>
<div class="site-error">

    <h1><?= Html::encode($this->title) ?></h1>

    <div class="alert alert-danger">
        <?= nl2br(Html::encode($message)) ?>
    </div>

    <p>
        C'è stato un'errore nel processare la tua richiesta.
    </p>
    <p>
        Se pensi che sia un'errore nel funzionamento contatta lo staff. Grazie.
    </p>

</div>
