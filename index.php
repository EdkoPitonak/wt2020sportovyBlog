<?php
require 'partials/header.php';
?>
<div class="container-home-wrapper">
        <div class="row titulka">
            <div class="col-md-8">
                <img src ="assets/img/titulna-foto.JPG.png" alt="titulna fotka" class="titulna-foto" title="Najkrajsi chlapci">
            </div>

            <div class="coll-md-4">
                <table class="table table-bordered table-light main-tabulka table-hover">
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
        </div>

        <div class="row"><div class="col-sm-3" ><p class="close-match">Najblizsie zapasy</p></div> </div>
<!--dasda-->
        <div class="row closest-match">
            <div class="col-sm-3">
                <div class="close-match-1">
                    <div class="date-match"><p class="date-of-match">27.2<br> 18:00</p></div>
                    <p class="zapasy">The chosen ones</p>
                    <p class="zapasy">Velka Lomnica</p>
                </div>
            </div>

            <div class="col-sm-3">
                <div class="close-match-1">
                    <div class="date-match"><p class="date-of-match">27.2<br> 18:00</p></div>
                    <p class="zapasy">The chosen ones</p>
                    <p class="zapasy">Kezmarok</p>
                </div>
            </div>

            <div class="col-sm-3">
                <div class="close-match-1">
                    <div class="date-match"><p class="date-of-match">27.2<br> 18:00</p></div>
                    <p class="zapasy">The chosen ones</p>
                    <p class="zapasy">Spisske podhradie</p>
                </div>
            </div>

            <div class="col-sm-3">
                <div class="close-match-1">
                    <div class="date-match"><p class="date-of-match">27.2<br> 18:00</p></div>
                    <p class="zapasy">The chosen ones</p>
                    <p class="zapasy">Stara Lubovna</p>
                </div>
            </div>
        </div>

</div>

<?php
require 'partials/footer.php';
?>

