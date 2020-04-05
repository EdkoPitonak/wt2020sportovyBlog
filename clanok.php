<?php
require 'partials/header.php';
?>

<div class="main-container">
    <div class="row">
        <div class="col-md-10">
            <p class="clanok-nadpis text-center">Napísali o nás</p>
        </div>
    </div>

    <div class="row">
        <div class="col-md-4">
            <div class="layout-clanok">
                 <p class="clanok-content1">Ďalším hracím dňom pokračovala 29. februára 2020 Podtatranská florbalová liga.<br> Aj keď na programe boli iba dva zápasy obidve priniesli prekvapenia.
                     Najskôr sa predstavili dve mužstvá, ktoré sa netaja vyhrať súťaž. I preto bolo skóre po prvej tretine priam šokujúce, 5:0 v neprospech lídra. Potom sa síce hráči Falcons spamätali, ale nakoniec aj na konci bol rozdiel v skóre práve o rozdiel z prvej tretiny.
                     Do druhého zápasu nastúpili hráči z Veľkej Lomnice ako vysoký favorit. Súperi hrali iba v šestici, no napriek tomu sa vysoký favorit nevedel presadiť. V prvých dvoch tretinách nestrelil ani gól, naopak, súper viedol 2:0. Aj v tomto zápase si tento náskok, mužstvo, ktoré viedlo, udržalo až do konca a prekvapujúco, ale zaslúžene zvíťazilo.
                     <a href="clanok2.php">Predchadzajuci clanok</a>
                 </p>
                <p class="clanok-content1"> Autor : Humenik <br> <a href="mailto:someone@yoursite.com">Email</a></p>
            </div>
        </div>

        <div class="col-md-3">
            <div class="layout-clanok2">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item list-header">Čo musia Belančania zlepšit!</li>
                    <li class="list-group-item">Dochádzku</li>
                    <li class="list-group-item">Sústredenosť</li>
                    <li class="list-group-item">Koncovku</li>
                    <li class="list-group-item">Presnosť</li>
                </ul>
            </div>
        </div>

        <div class="col-md-3">
            <table class="table table-bordered table-light poradie table-hover">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Názov</th>
                    <th scope="col">PZ</th>
                    <th scope="col">Počet bodov</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>Stará Ľubovna</td>
                    <td>16</td>
                    <td>22</td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>Veľká Lomnica</td>
                    <td>14</td>
                    <td>20</td>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td>Spišské Podhradie</td>
                    <td>15</td>
                    <td>18</td>
                </tr>
                <tr>
                    <th scope="row">4</th>
                    <td>Focus Kežmarok</td>
                    <td>14</td>
                    <td>16</td>
                </tr>
                <tr>
                    <th scope="row">5</th>
                    <td>Chosen Ones</td>
                    <td>16</td>
                    <td>10</td>
                </tr>
                <tr>
                    <th scope="row">6</th>
                    <td>Night Riders</td>
                    <td>13</td>
                    <td>2</td>
                </tr>
                </tbody>
            </table>
        </div>

        <article id="artOpinions">
            <p class="nadpis-komentare">Komentáre</p>
            <div id="opinionsContainer"></div>
        </article>
    </div>


    <form class="formular" id="formular">

        <div class="form-group row">
            <label for="validationCustom01" class="col-sm-2 col-form-label">Meno</label>

            <div class="col-sm-10">
                <input type="text" name="login" class="form-control scriptTest" id="validationCustom01" placeholder="Meno" required>
            </div>
        </div>

        <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
            <div class="col-sm-10">
                <input type="email" class="form-control" id="inputEmail3" placeholder="Email" required>
            </div>
        </div>

        <div class="form-group">
            <label for="exampleFormControlFile1">Príloha </label>
            <input type="file" class="form-control-file" id="exampleFormControlFile1">
        </div>

        <fieldset class="form-group">
            <div class="row">
                <legend class="col-form-label col-sm-2 pt-0">Máte nas radi ?</legend>
                <div class="col-sm-10">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1" checked>
                        <label class="form-check-label" for="gridRadios1">
                            Áno
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option2">
                        <label class="form-check-label" for="gridRadios2">
                            Absolutne
                        </label>
                    </div>
                </div>
            </div>
        </fieldset>
        <div class="form-group row">
            <div class="col-sm-2">Vyhráme ?</div>
            <div class="col-sm-10">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="gridCheck1">
                    <label class="form-check-label" for="gridCheck1">
                        Jasné
                    </label>
                </div>
            </div>
        </div>

        <div class="form-group">
            <label for="klucove-vyber">Klucove slovo:</label>
            <input list="klucove-moznost" id="klucove-vyber" name="klucove-vyber" />

            <datalist id="klucove-moznost">
                <option value="Florbal">
                <option value="Sport">
                <option value="Muzstvo">
                <option value="Teamwork">
            </datalist>
        </div>

        <div class="form-group">
            <label for="exampleFormControlTextarea1">Vaša správa</label>
            <textarea class="form-control" name="comment" id="exampleFormControlTextarea1" rows="3"  placeholder="Napíšte nám akí sme skvelí" required></textarea>
        </div>


        <div class="form-group row">
            <div class="col-sm-10">
                <button type="submit" class="btn btn-primary">Poslať</button>
                <button type="reset" class="btn btn-primary">Reset</button>
            </div>

        </div>

    </form>

    <script src="assets/javascript/formularScript.js"></script>




    </div>


<?php
require 'partials/footer.php';
?>
