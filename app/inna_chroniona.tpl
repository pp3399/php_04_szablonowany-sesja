{extends file="../templates/main.tpl"}

{block name=footer}  <li>Treść stopki</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>{/block}

{block name=wrapper} <h2>Inna strona</h2>
    <p>Witam na kolejnej stronie</p> {/block}     

    {block name=content}


        <section>

            <div class="row">
                <div class="col-6 col-12-medium">
                    <h4>Lista rzeczy, które możesz zrobić:</h4>
                    <ul>
                        <li>Zamknąć przeglądarkę</li>
                        <li>Wrócić do poprzedniej strony</li>
                        <li>Wylogować się</li>
                    </ul>


                </div>

            </div>           
        </section>


        <section>
            <ul class="actions">
                <li><a href="{$app_url}/app/calc_cred.php"  class="button">Powrót do kalkulatora</a></li>
                <li><a href="{$app_url}/app/security/logout.php"  class="button primary">Wyloguj się</a></li>
            </ul>
        </section>

    {/block}





















