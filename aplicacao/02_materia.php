<!DOCTYPE html>
<html lang="pt-br">

<?php
include 'layout/head.php';
?>

<body>

    <?php
    include 'layout/header.php';
    ?>

    <div class="page">
        <p class="edicao" data-aos="fade-right" data-aos-duration="1500" data-aos-delay="1000">Revista EGPCE em Foco -
            Edição 27</p>

        <div class="header" data-aos="fade-right" data-aos-duration="1500" data-aos-delay="100">
        </div>

        <h2 class="title-page" data-aos="fade-right" data-aos-duration="1500" data-aos-delay="300">Matérias</h2>

        <div class="wrapper">
            <div class="materia" data-aos="fade-right" data-aos-duration="1500" data-aos-delay="500">
                <iframe height="160" src="https://www.youtube.com/embed/3DGysP9QeFk?si=nzpnDTJRhhyB2zNK"
                    title="YouTube video player" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                <small>Lorem ipsum, dolor sit amet consectetur adipisicing elit. </small>
                <h3>Título matéria</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus, optio, sit in eius autem rem vel
                    tempora voluptatem magnam reiciendis earum recusandae </p>
            </div>
            <div class="materia" data-aos="fade-right" data-aos-duration="1500" data-aos-delay="600">
                <img src="assets/imgs/materia01.jpg" alt="">
                <small>Lorem ipsum, dolor sit amet consectetur adipisicing elit. </small>
                <h3>Título matéria</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
            </div>
        </div>

        <div class="materia" data-aos="fade-right" data-aos-duration="1500" data-aos-delay="800">
            <img src="assets/imgs/materia01.jpg" alt="">
            <small>Lorem ipsum, dolor sit amet consectetur adipisicing elit. </small>
            <h3>Título matéria</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus, optio, sit in eius autem rem vel
                tempora voluptatem magnam reiciendis earum recusandae assumenda laboriosam beatae nostrum incidunt
                corporis, a saepe. Lorem ipsum dolor, sit amet consectetur adipisic</p>
        </div>

    </div>

    <?php
    include 'layout/footer.php';
    ?>


    <div class="btn-left">
        <a href="01_equipe.php"><i class="fa-solid fa-arrow-left"></i></a>
    </div>

    <div class="btn-next">
        <a href="03_page.php"><i class="fa-solid fa-arrow-right"></i></a>
    </div>

    <?php
    include 'layout/scripts.php';
    ?>

</body>

</html>