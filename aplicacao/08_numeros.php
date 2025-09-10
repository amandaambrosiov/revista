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

        <div class="materia" data-aos="fade-right" data-aos-duration="1500" data-aos-delay="800">
            <img src="assets/imgs/materia01.jpg" alt="">
            <small>Lorem ipsum, dolor sit amet consectetur adipisicing elit. </small>
            <h3>Título matéria</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus, optio, sit in eius autem rem vel
                tempora voluptatem magnam reiciendis earum recusandae assumenda laboriosam beatae nostrum incidunt
                corporis, a saepe. Lorem ipsum dolor, sit amet consectetur adipisicing elit. Veniam dolore illo nostrum deleniti. Officia dignissimos itaque quos assumenda blanditiis quod tenetur distinctio repellendus voluptatibus, cupiditate aut qui provident veritatis! Quae?</p>
        </div>

        <div class="materia-numeros" data-aos="fade-right" data-aos-duration="1500" data-aos-delay="800">
            <div class="tabela-numeros">
                <div class="mes d-flex justify-content-center" data-aos="fade-right" data-aos-duration="1500" data-aos-delay="1100">Agosto</div>
                <h2 class="title-numeros dark-orange d-flex justify-content-center" data-aos="fade-right" data-aos-duration="1500" data-aos-delay="1000">Nossos Números -  Cursos</h2>
                <table>
                    <tr class="thead">
                        <th>MODALIDADE</th>
                        <th>NÚMERO DE INICIATIVAS</th>
                        <th>NÚMERO DE APROVADOS</th>
                        <th>CARGA HORÁRIA</th>
                    </tr>
                    <tr>
                        <td data-label="MODALIDADE">PRESENCIAIS</td>
                        <td data-label="NÚMERO DE INICIATIVAS"><span class="counter-up" data-count-to="11"></span></td>
                        <td data-label="NÚMERO DE APROVADOS"><span class="counter-up" data-count-to="178"></span></td>
                        <td data-label="CARGA HORÁRIA"><span class="counter-up" data-count-to="2164"></span></td>
                    </tr>
                    <tr>
                        <td data-label="MODALIDADE">EAD</td>
                        <td data-label="NÚMERO DE INICIATIVAS"><span class="counter-up" data-count-to="30"></span></td>
                        <td data-label="NÚMERO DE APROVADOS"><span class="counter-up" data-count-to="1128"></span></td>
                        <td data-label="CARGA HORÁRIA"><span class="counter-up" data-count-to="55080"></span></td>
                    </tr>
                    <tr>
                        <td data-label="MODALIDADE">REMOTO ONLINE</td>
                        <td data-label="NÚMERO DE INICIATIVAS"><span class="counter-up" data-count-to="1"></span></td>
                        <td data-label="NÚMERO DE APROVADOS"><span class="counter-up" data-count-to="74"></span></td>
                        <td data-label="CARGA HORÁRIA"><span class="counter-up" data-count-to="148"></span></td>
                    </tr>
                    <tr>
                        <td data-label="MODALIDADE"><strong>TOTAL</strong></td>
                        <td data-label="NÚMERO DE INICIATIVAS"><span class="counter-up" data-count-to="42"></span></td>
                        <td data-label="NÚMERO DE APROVADOS"><span class="counter-up" data-count-to="1380"></span></td>
                        <td data-label="CARGA HORÁRIA"><span class="counter-up" data-count-to="57392"></span></td>
                    </tr>
                </table>
            </div>

        </div>

    </div>

    <?php
    include 'layout/footer.php';
    ?>

    <div class="btn-left">
        <a href="07_vista.php"><i class="fa-solid fa-arrow-left"></i></a>
    </div>

    <div class="btn-next">
        <a href="09_instrutores.php"><i class="fa-solid fa-arrow-right"></i></a>
    </div>

    <?php
    include 'layout/scripts.php';
    ?>

</body>

</html>