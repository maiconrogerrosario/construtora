<?php $v->layout("_theme"); ?>

    <section class="about_page">
        <div class="about_page_content content">
            <header class="about_header">
                <h1>Sobre Nós</h1>
                <p><b>Nossa História</b><p/>

                <p>Inicialmente a Niconle Construtora foi projetada para fazer e executar
                    projetos residenciais, comerciais e obras públicas.
                    Pouco tempo depois passou a construir projetos residenciais
                    em maior escala deixando de lado as obras publicas com foco
                    maior em projetos de construção e incorporação de moradias residenciais
                    com ênfase no primeiro imóvel.<p/>

                <p><b>Missão</p><p/>
                        “Desenvolver soluções na área da engenharia e construção, com profissionais qualificados, com a melhor relação custo/benefício, buscando sempre a excelência para satisfação dos clientes e crescimento da empresa.”
                </p>

                <p><b>Visão</p>


                <b>“Ser uma marca consolidada no mercado Nacional, utilizando das melhores tecnologias e processos construtivos, ampliando o perfil de clientes com sustentabilidade e responsabilidade para os clientes e parceiros.”</b><br /><br />
                <p><b>Valores</b><p/>

                    Confiabilidade;<br />
                    Integridade;<br />
                    Ética;<br />
                    Honestidade;<br />
                    Responsabilidade;<br />
                    Comprometimento;<br />
                    Credibilidade;<br />
                    Respeito.</p>


            </header>
    </section>




<?php $v->start("scripts"); ?>
    <script type="text/javascript">
      $('.navmenu-1').on('click','li',function())
      {
        $('.navmenu-1 li.active').removeClass('active');
        $(this), addClass('active');
      }
      });
    </script>
<?php $v->end(); ?>