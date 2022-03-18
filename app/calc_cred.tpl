{extends file="../templates/main.tpl"}

{block name=footer}  <li>Treść stopki</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>{/block}

{block name=wrapper} <h2>Kalkulator kredytowy</h2>
    <p>Wylicz ratę kredytu</p> {/block}     

    {block name=content}


        <section>

            <form method="post" action="{$app_url}/app/calc_cred.php">
                <div class="row gtr-uniform">
                    <div class="col-6 col-12-xsmall">
                        <label for="amount">Kwota</label>
                        <input type="text" name="amt" id="amt" value="{$varArray['amt']}"  />
                    </div>
                    <div class="col-6 col-12-xsmall">
                        <label for="years">Liczba lat</label>
                        <input type="text" name="yrs" id="yrs" value="{$varArray['yrs']}"  />
                    </div>
                    <div class="col-6 col-12-xsmall">
                        <label for="rate">Oprocentowanie (w %)</label>
                        <input type="text" name="rt" id="rt" value="{$varArray['rt']}"  />
                    </div>


                    <div class="col-12">
                        <ul class="actions">
                            <li><input type="submit" value="Oblicz" class="primary" /></li>

                        </ul>
                    </div>
                </div>
            </form>
        </section>

        <section>
            <ul class="actions">
                <li><a href="{$app_url}/app/inna_chroniona.php"  class="button">Przejdź na inną chronioną stronę</a></li>
                <li><a href="{$app_url}/app/security/logout.php"  class="button">Wyloguj się</a></li>
            </ul>


        </section>


        <div class="messages">

            {* wyświeltenie listy błędów, jeśli istnieją *}
            {if isset($messages)}
                {if count($messages) > 0} 
                    <h4>Błąd!</h4>
                    <ol class="err">
                        {foreach  $messages as $msg}
                            {strip}
                                <li>{$msg}</li>
                                {/strip}
                            {/foreach}
                    </ol>
                {/if}
            {/if}

            {* wyświeltenie listy informacji, jeśli istnieją *}
            {if isset($infos)}
                {if count($infos) > 0} 
                    <h4>Informacje: </h4>
                    <ol class="inf">
                        {foreach  $infos as $msg}
                            {strip}
                                <li>{$msg}</li>
                                {/strip}
                            {/foreach}
                    </ol>
                {/if}
            {/if}

            {if isset($result)}
                <h4>Miesięczna rata wynosi:</h4>
                <p class="res">
                    {$result} zł
                </p>
            {/if}
        </div>

    {/block}





















