<?php
    const API_URL = "https://fakestoreapi.com/products";
    //Inicializamos nuestro curl,  que es como el manejador de la url
    $ch = curl_init(API_URL);
    //indeicar que queremos recibir el resultado de la peticion y no mostrarla en pantalla
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    //ejecutar la peticion y guardamos el resultado
    $resultado = curl_exec($ch);
    //Se parsea a un array asosiativo
    $data = json_decode($resultado, true);
    //se cierra la peticion
    curl_close($ch);
?>

<h1>Productos</h1>
<main>
    <?php foreach($data as $item):?>
        <div class="div-products">
            <div class="content-button">
                <button class="add">Add</button>
            </div>
            <p class="title"><?=$item['title']?></p>
            <img src="<?=$item['image']?>" alt="">
            <p class="price">Precio: <span class="content-price">$ <?=$item['price']?></span></p>
            <p class="description"><?= $item['description']?></p>
        </div>
    <?php endforeach?>
</main>


<style>
    *{
        margin: 0%;
        padding: 0%;
        box-sizing: border-box;
        font-family: Arial, Helvetica, sans-serif;
    }
    :root{
        color-scheme: light dark;
    }
    body{
        width: 100%;
        display: flex;
        align-items: center;
        flex-direction: column;
    }
    main{
        width: 100%;
        max-width: 1200px;
        display: flex;
        gap: 1rem;
        justify-content: center;
        flex-wrap: wrap;
    }
    .div-products{
        width: 24%;
        background-color: #1e1e1e;
        padding: 1rem;
        border-radius: 7px;
    }
    h1{
        padding: 1rem;
        font-size: 2.5rem;
    }
    .content-button{
        display: flex;
        justify-content: right;
    }
    .add{
        cursor: pointer;
        border: none;
        background-color: red;
        color: #fff;
        padding: 0.7rem 2rem;
        border-radius: 7px;
        font-size: 1rem;
        transition: all ease 0.3s;
    }
    .add:hover{
        background-color: #c30010;
        transform: scale(1.1);
        font-size: 1rem;
    }
    .title{
        text-align: left;
        padding: 1rem 0 ;
        font-size: 1.5rem;
    }
    img{
        width: 95%;
        border-radius: 7px;
    }
    .price{
        padding: 1rem 0;
        font-size: 1.3rem;
        color: #fff;
    }
    .content-price{
        color: red;
        font-size: 1.3rem;
    }
    .description{
        padding: 1rem 0;
        font-size: 1.1rem;
    }
</style>