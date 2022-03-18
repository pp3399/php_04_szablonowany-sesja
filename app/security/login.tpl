{extends file="../../templates/main.tpl"}

{block name=footer}  <li>Treść stopki</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>{/block}

   {block name=wrapper} <h2>Zaloguj się</h2>   {/block}     
   
   
{block name=content}

    <section>

        <form method="post" action="{$app_url}/app/security/login.php">
            <div class="row gtr-uniform">
                <div class="col-6 col-12-xsmall">
                    <label for="login">Login</label>
                    <input type="text" name="login" id="id_login" placeholder="Login" value="" />
                </div>
                <div class="col-6 col-12-xsmall">
                    <label for="pass">Hasło</label>
                    <input type="password" name="pass" id="id_pass" placeholder="Hasło"  />
                </div>



                <div class="col-12">
                    <ul class="actions">
                        <li><input type="submit" value="Zaloguj" class="primary" /></li>

                    </ul>
                </div>
            </div>
        </form>
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
    </div>
        
{/block}





















