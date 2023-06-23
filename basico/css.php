<div class="titulo">Integração CSS </div>
<H1 center>
    <?php 
    ECHO 'Olá ';
    echo '<small>';
    echo 'mundo!';
    echo '</small>';
    
    ?>
</H1>

<?= "<div center azul>Outra forma de me 'expressar'! </div>"?>

<br>

<div center><button center dobro><?= "Legal"?></button></div>

<style>
button{
    padding: 5px <?= 2 * 20?>px;
    background-color: #4286f4;
    color: #eee;
    font-weight: bold;
    border-radius: 10px;
}

[center]{
    display: flex;
    justify-content: center;
}
[azul]{
    color: #4286f4;
}

[dobro]{
    font-size: 2rem;
}

</style>