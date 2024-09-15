            <div class="box">
                <h3>Bienvenue sur CinéVent
                    nous faisons de la vente de film en tous genres.</h3>

                    <ul class="list">
                    <?php
    $listGenre= listGenre();
    while($Genre =$listGenre->fetch(PDO::FETCH_NUM))
             echo"<li>".$Genre[0]."</li>";?>
                    </ul>


                    <br><h3>A propos de nous :</h3>
                    <p>Nous sommes des étudiants en première année de BTS SIO, nous mettons en pratique
                    notre formation en développant ce site web qui a pour but de devenir un site d'e-commerce.<p>

                    <br><h3>Concepteur du site :</h3>
                    <ul>
                        <li>Gaëtan GERARD</li>
                        <li>Camille RADE</li>
                    </ul>
                    <br><h3>Avec la participation de :</h3>
                    <ul>
                        <li>Joël FALTRAUER</li>
                        
                    </ul>


</div>
