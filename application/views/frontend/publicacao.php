


<!-- ====================================================================================================================-->   
    <div class="container">

        <div class="row">

            <!-- Blog Entries Column -->
            <div class="col-md-8">



                <!--  Blog Post -->
                <?php foreach($postagem as $destaque){

                ?>

                
                <h1>
                    <?php echo $destaque->titulo ?> AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA
                </h1>
                <p class="lead">
                    por <a href="<?php echo base_url(('autor/'.$destaque->idautor).'/'.limpar($destaque->nome));?>"><?php echo $destaque->nome?></a>


                </p>
                <p><span class="glyphicon glyphicon-time"></span> <?php echo postadoem($destaque->data) ?></p>
                <hr>
                <i><?php echo $destaque->subtitulo ?> </i>
                <img class="img-responsive" src="http://placehold.it/900x300" alt="">
                <hr>
                <p><?php echo $destaque->conteudo ?></p>

                <hr>
             <?php }?>

            </div>
<!-- ====================================================================================================================-->   