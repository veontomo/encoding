<?php
use yii\helpers\Html;
/**
 * @var yii\web\View $this
 */
$this->title = 'Codifica caratteri';
?>
<div class="site-index">

    <div class="jumbotron">
        <h1>Codifica caratteri</h1>
    </div>

    <div class="body-content">

        <div class="row">
            <div class="col-lg-4">
                <h2>Che cosa &egrave;</h2>

                <p>Tramite questa applicatione si pu&ograve; inserire codifiche <em>html</em>, <em>hex</em> e <em>dec</em>
                    dei caratteri.
                </p>
            </div>
            <div class="col-lg-4">
                <h2>Da fare</h2>
                <ol>
                    <li>
                        pi&ugrave; precisa elaborazione degli spazi nelle codifice html e rappresentazioni a video dei glifi.
                    </li>
                </ol>

            </div>
            <div class="col-lg-4">
                <h2>Commenti</h2>
                <ol>
                    <li>
                        Tutte le modifiche vanno registrate. Vedi
                        <?=
                            Html::a('il registro', ['log/index']);
                        ?>

                    </li>
                </ol>



            </div>
        </div>

    </div>
</div>
