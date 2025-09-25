<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Aula 0 - Controles HTML</title>

    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href="css/estilo.css">
</head>

<body>
    <table border="1px" width="100%" height="180px">
        <tr>
            <th width="10%" height="40px">
                ID
            </th>
            <th width="70%">
                Nome
            </th>
            <th>
                Idade
            </th>
        </tr>
        <tr>
            <td>
                1
            </td>
            <td>
                João
            </td>
            <td>
                25
            </td>
        </tr>
        <tr>
            <td>
                2
            </td>
            <td>
                Maria
            </td>
            <td>
                30
            </td>
        </tr>
        <tr>
        </tr>
        <tr>
            <td>
                3
            </td>
            <td>
                Pedro
            </td>
            <td>
                28
            </td>
        </tr>
        <tr>
            <td>
                4
            </td>
            <td>
                Lucas
            </td>
            <td>
                22
            </td>
        </tr>
    </table>

    <br>

    <table border="1px" style="text-align: center;">
        <tr>
            <td colspan="3">
                A
            </td>
        </tr>
        <tr>
            <td>
                B
            </td>
            <td>
                C
            </td>
            <td>
                D
            </td>
        </tr>
        <tr>
            <td rowspan="2" colspan="2">
                E
            </td>
            <td colspan="3">
                F
            </td>
        </tr>
        <tr>
            <td colspan="3">
                G
            </td>
        </tr>
        <tr>
            <td>
                H
            </td>
            <td rowspan="2" colspan="2">
                J
            </td>
        </tr>
        <tr>
            <td>
                I
            </td>
        </tr>
    </table>

    <br>
    <h2>Atividade 1:</h2>
    <table border="0" cellspacing="0" cellpadding="0" width="100%" height="1000px">
        <tr>
            <td style="background-color:green">

            </td>
            <td width="20px" style="background-image: url('img/gradient.png'); background-size: contain;">

            </td>
            <td width="800px">
                <table border="1px" width="800px" height="1000px">
                    <tr height="20%">
                        <td colspan="2" align="center">
                            Banner
                        </td>
                    </tr>
                    <tr height="70%">
                        <td width="20%" align="center">
                            Menu
                        </td>
                        <td align="center">
                            Conteúdo
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2" align="center">
                            Rodapé
                        </td>
                    </tr>
                </table>
            </td>
            <td width="20px"
                style="background-image: url('img/gradient.png'); background-size: contain; transform: rotate(180deg)">

            </td>
            <td style="background-color:green">

            </td>
        </tr>
    </table>

    <br>
    <h2>Atividade 2 (+ Gemini):</h2>
    <table class="tabela-periodica">
        <tr>
            <td class="elemento nao-metal">1<br><b>H</b><br><small>Hidrogênio</small></td>
            <td class="vazio" colspan="16"></td>
            <td class="elemento gas-nobre">2<br><b>He</b><br><small>Hélio</small></td>
        </tr>
        <tr>
            <td class="elemento alcalino">3<br><b>Li</b><br><small>Lítio</small></td>
            <td class="elemento terroso">4<br><b>Be</b><br><small>Berílio</small></td>
            <td class="vazio" colspan="10"></td>
            <td class="elemento metaloide">5<br><b>B</b><br><small>Boro</small></td>
            <td class="elemento nao-metal">6<br><b>C</b><br><small>Carbono</small></td>
            <td class="elemento nao-metal">7<br><b>N</b><br><small>Nitrogênio</small></td>
            <td class="elemento nao-metal">8<br><b>O</b><br><small>Oxigênio</small></td>
            <td class="elemento halogenio">9<br><b>F</b><br><small>Flúor</small></td>
            <td class="elemento gas-nobre">10<br><b>Ne</b><br><small>Neônio</small></td>
        </tr>
        <tr>
            <td class="elemento alcalino">11<br><b>Na</b><br><small>Sódio</small></td>
            <td class="elemento terroso">12<br><b>Mg</b><br><small>Magnésio</small></td>
            <td class="vazio" colspan="10"></td>
            <td class="elemento metal-pos-transicao">13<br><b>Al</b><br><small>Alumínio</small></td>
            <td class="elemento metaloide">14<br><b>Si</b><br><small>Silício</small></td>
            <td class="elemento nao-metal">15<br><b>P</b><br><small>Fósforo</small></td>
            <td class="elemento nao-metal">16<br><b>S</b><br><small>Enxofre</small></td>
            <td class="elemento halogenio">17<br><b>Cl</b><br><small>Cloro</small></td>
            <td class="elemento gas-nobre">18<br><b>Ar</b><br><small>Argônio</small></td>
        </tr>
        <tr>
            <td class="elemento alcalino">19<br><b>K</b><br><small>Potássio</small></td>
            <td class="elemento terroso">20<br><b>Ca</b><br><small>Cálcio</small></td>
            <td class="elemento metal-transicao">21<br><b>Sc</b><br><small>Escândio</small></td>
            <td class="elemento metal-transicao">22<br><b>Ti</b><br><small>Titânio</small></td>
            <td class="elemento metal-transicao">23<br><b>V</b><br><small>Vanádio</small></td>
            <td class="elemento metal-transicao">24<br><b>Cr</b><br><small>Cromo</small></td>
            <td class="elemento metal-transicao">25<br><b>Mn</b><br><small>Manganês</small></td>
            <td class="elemento metal-transicao">26<br><b>Fe</b><br><small>Ferro</small></td>
            <td class="elemento metal-transicao">27<br><b>Co</b><br><small>Cobalto</small></td>
            <td class="elemento metal-transicao">28<br><b>Ni</b><br><small>Níquel</small></td>
            <td class="elemento metal-transicao">29<br><b>Cu</b><br><small>Cobre</small></td>
            <td class="elemento metal-transicao">30<br><b>Zn</b><br><small>Zinco</small></td>
            <td class="elemento metal-pos-transicao">31<br><b>Ga</b><br><small>Gálio</small></td>
            <td class="elemento metaloide">32<br><b>Ge</b><br><small>Germânio</small></td>
            <td class="elemento metaloide">33<br><b>As</b><br><small>Arsênio</small></td>
            <td class="elemento nao-metal">34<br><b>Se</b><br><small>Selênio</small></td>
            <td class="elemento halogenio">35<br><b>Br</b><br><small>Bromo</small></td>
            <td class="elemento gas-nobre">36<br><b>Kr</b><br><small>Criptônio</small></td>
        </tr>
        <tr>
            <td class="elemento alcalino">37<br><b>Rb</b><br><small>Rubídio</small></td>
            <td class="elemento terroso">38<br><b>Sr</b><br><small>Estrôncio</small></td>
            <td class="elemento metal-transicao">39<br><b>Y</b><br><small>Ítrio</small></td>
            <td class="elemento metal-transicao">40<br><b>Zr</b><br><small>Zircônio</small></td>
            <td class="elemento metal-transicao">41<br><b>Nb</b><br><small>Nióbio</small></td>
            <td class="elemento metal-transicao">42<br><b>Mo</b><br><small>Molibdênio</small></td>
            <td class="elemento metal-transicao">43<br><b>Tc</b><br><small>Tecnécio</small></td>
            <td class="elemento metal-transicao">44<br><b>Ru</b><br><small>Rutênio</small></td>
            <td class="elemento metal-transicao">45<br><b>Rh</b><br><small>Ródio</small></td>
            <td class="elemento metal-transicao">46<br><b>Pd</b><br><small>Paládio</small></td>
            <td class="elemento metal-transicao">47<br><b>Ag</b><br><small>Prata</small></td>
            <td class="elemento metal-transicao">48<br><b>Cd</b><br><small>Cádmio</small></td>
            <td class="elemento metal-pos-transicao">49<br><b>In</b><br><small>Índio</small></td>
            <td class="elemento metal-pos-transicao">50<br><b>Sn</b><br><small>Estanho</small></td>
            <td class="elemento metaloide">51<br><b>Sb</b><br><small>Antimônio</small></td>
            <td class="elemento metaloide">52<br><b>Te</b><br><small>Telúrio</small></td>
            <td class="elemento halogenio">53<br><b>I</b><br><small>Iodo</small></td>
            <td class="elemento gas-nobre">54<br><b>Xe</b><br><small>Xenônio</small></td>
        </tr>
        <tr>
            <td class="elemento alcalino">55<br><b>Cs</b><br><small>Césio</small></td>
            <td class="elemento terroso">56<br><b>Ba</b><br><small>Bário</small></td>
            <td class="lantanideo">57-71<br><b>*</b></td>
            <td class="elemento metal-transicao">72<br><b>Hf</b><br><small>Háfnio</small></td>
            <td class="elemento metal-transicao">73<br><b>Ta</b><br><small>Tântalo</small></td>
            <td class="elemento metal-transicao">74<br><b>W</b><br><small>Tungstênio</small></td>
            <td class="elemento metal-transicao">75<br><b>Re</b><br><small>Rênio</small></td>
            <td class="elemento metal-transicao">76<br><b>Os</b><br><small>Ósmio</small></td>
            <td class="elemento metal-transicao">77<br><b>Ir</b><br><small>Irídio</small></td>
            <td class="elemento metal-transicao">78<br><b>Pt</b><br><small>Platina</small></td>
            <td class="elemento metal-transicao">79<br><b>Au</b><br><small>Ouro</small></td>
            <td class="elemento metal-transicao">80<br><b>Hg</b><br><small>Mercúrio</small></td>
            <td class="elemento metal-pos-transicao">81<br><b>Tl</b><br><small>Tálio</small></td>
            <td class="elemento metal-pos-transicao">82<br><b>Pb</b><br><small>Chumbo</small></td>
            <td class="elemento metal-pos-transicao">83<br><b>Bi</b><br><small>Bismuto</small></td>
            <td class="elemento metaloide">84<br><b>Po</b><br><small>Polônio</small></td>
            <td class="elemento halogenio">85<br><b>At</b><br><small>Astato</small></td>
            <td class="elemento gas-nobre">86<br><b>Rn</b><br><small>Radônio</small></td>
        </tr>
        <tr>
            <td class="elemento alcalino">87<br><b>Fr</b><br><small>Frâncio</small></td>
            <td class="elemento terroso">88<br><b>Ra</b><br><small>Rádio</small></td>
            <td class="actinideo">89-103<br><b>**</b></td>
            <td class="elemento metal-transicao">104<br><b>Rf</b><br><small>Rutherfórdio</small></td>
            <td class="elemento metal-transicao">105<br><b>Db</b><br><small>Dúbnio</small></td>
            <td class="elemento metal-transicao">106<br><b>Sg</b><br><small>Seabórgio</small></td>
            <td class="elemento metal-transicao">107<br><b>Bh</b><br><small>Bóhrio</small></td>
            <td class="elemento metal-transicao">108<br><b>Hs</b><br><small>Hássio</small></td>
            <td class="elemento metal-transicao">109<br><b>Mt</b><br><small>Meitnério</small></td>
            <td class="elemento metal-transicao">110<br><b>Ds</b><br><small>Darmstádio</small></td>
            <td class="elemento metal-transicao">111<br><b>Rg</b><br><small>Roentgênio</small></td>
            <td class="elemento metal-transicao">112<br><b>Cn</b><br><small>Copernício</small></td>
            <td class="elemento metal-pos-transicao">113<br><b>Nh</b><br><small>Nihônio</small></td>
            <td class="elemento metal-pos-transicao">114<br><b>Fl</b><br><small>Fleróvio</small></td>
            <td class="elemento metal-pos-transicao">115<br><b>Mc</b><br><small>Moscóvio</small></td>
            <td class="elemento metal-pos-transicao">116<br><b>Lv</b><br><small>Livermório</small></td>
            <td class="elemento halogenio">117<br><b>Ts</b><br><small>Tenesso</small></td>
            <td class="elemento gas-nobre">118<br><b>Og</b><br><small>Oganessônio</small></td>
        </tr>

        <tr>
            <td class="vazio" colspan="18" style="height: 20px;"></td>
        </tr>

        <tr>
            <td class="vazio" colspan="2"></td>
            <td class="elemento lantanideo">57<br><b>La</b><br><small>Lantânio</small></td>
            <td class="elemento lantanideo">58<br><b>Ce</b><br><small>Cério</small></td>
            <td class="elemento lantanideo">59<br><b>Pr</b><br><small>Praseodímio</small></td>
            <td class="elemento lantanideo">60<br><b>Nd</b><br><small>Neodímio</small></td>
            <td class="elemento lantanideo">61<br><b>Pm</b><br><small>Promécio</small></td>
            <td class="elemento lantanideo">62<br><b>Sm</b><br><small>Samário</small></td>
            <td class="elemento lantanideo">63<br><b>Eu</b><br><small>Európio</small></td>
            <td class="elemento lantanideo">64<br><b>Gd</b><br><small>Gadolínio</small></td>
            <td class="elemento lantanideo">65<br><b>Tb</b><br><small>Térbio</small></td>
            <td class="elemento lantanideo">66<br><b>Dy</b><br><small>Disprósio</small></td>
            <td class="elemento lantanideo">67<br><b>Ho</b><br><small>Hólmio</small></td>
            <td class="elemento lantanideo">68<br><b>Er</b><br><small>Érbio</small></td>
            <td class="elemento lantanideo">69<br><b>Tm</b><br><small>Túlio</small></td>
            <td class="elemento lantanideo">70<br><b>Yb</b><br><small>Itérbio</small></td>
            <td class="elemento lantanideo">71<br><b>Lu</b><br><small>Lutécio</small></td>
            <td class="vazio"></td>
        </tr>
        <tr>
            <td class="vazio" colspan="2"></td>
            <td class="elemento actinideo">89<br><b>Ac</b><br><small>Actínio</small></td>
            <td class="elemento actinideo">90<br><b>Th</b><br><small>Tório</small></td>
            <td class="elemento actinideo">91<br><b>Pa</b><br><small>Protactínio</small></td>
            <td class="elemento actinideo">92<br><b>U</b><br><small>Urânio</small></td>
            <td class="elemento actinideo">93<br><b>Np</b><br><small>Netúnio</small></td>
            <td class="elemento actinideo">94<br><b>Pu</b><br><small>Plutônio</small></td>
            <td class="elemento actinideo">95<br><b>Am</b><br><small>Amerício</small></td>
            <td class="elemento actinideo">96<br><b>Cm</b><br><small>Cúrio</small></td>
            <td class="elemento actinideo">97<br><b>Bk</b><br><small>Berquélio</small></td>
            <td class="elemento actinideo">98<br><b>Cf</b><br><small>Califórnio</small></td>
            <td class="elemento actinideo">99<br><b>Es</b><br><small>Einstênio</small></td>
            <td class="elemento actinideo">100<br><b>Fm</b><br><small>Férmio</small></td>
            <td class="elemento actinideo">101<br><b>Md</b><br><small>Mendelévio</small></td>
            <td class="elemento actinideo">102<br><b>No</b><br><small>Nobélio</small></td>
            <td class="elemento actinideo">103<br><b>Lr</b><br><small>Laurêncio</small></td>
            <td class="vazio"></td>
        </tr>
    </table>

    <br>
    <h2>Atividade 3 (+ Gemini):</h2>
    <table class="tabuleiro-xadrez">
        <tr>
            <td class="notacao"></td>
            <td class="notacao">a</td>
            <td class="notacao">b</td>
            <td class="notacao">c</td>
            <td class="notacao">d</td>
            <td class="notacao">e</td>
            <td class="notacao">f</td>
            <td class="notacao">g</td>
            <td class="notacao">h</td>
            <td class="notacao"></td>
        </tr>
        
        <tr>
            <td class="notacao">8</td>
            <td class="casa-clara">&#9820;</td> <td class="casa-escura">&#9822;</td> <td class="casa-clara">&#9821;</td> <td class="casa-escura">&#9819;</td> <td class="casa-clara">&#9818;</td> <td class="casa-escura">&#9821;</td> <td class="casa-clara">&#9822;</td> <td class="casa-escura">&#9820;</td> <td class="notacao">8</td>
        </tr>

        <tr>
            <td class="notacao">7</td>
            <td class="casa-escura">&#9823;</td> <td class="casa-clara">&#9823;</td>
            <td class="casa-escura">&#9823;</td>
            <td class="casa-clara">&#9823;</td>
            <td class="casa-escura">&#9823;</td>
            <td class="casa-clara">&#9823;</td>
            <td class="casa-escura">&#9823;</td>
            <td class="casa-clara">&#9823;</td>
            <td class="notacao">7</td>
        </tr>

        <tr>
            <td class="notacao">6</td>
            <td class="casa-clara"></td> <td class="casa-escura"></td> <td class="casa-clara"></td> <td class="casa-escura"></td>
            <td class="casa-clara"></td> <td class="casa-escura"></td> <td class="casa-clara"></td> <td class="casa-escura"></td>
            <td class="notacao">6</td>
        </tr>
        <tr>
            <td class="notacao">5</td>
            <td class="casa-escura"></td> <td class="casa-clara"></td> <td class="casa-escura"></td> <td class="casa-clara"></td>
            <td class="casa-escura"></td> <td class="casa-clara"></td> <td class="casa-escura"></td> <td class="casa-clara"></td>
            <td class="notacao">5</td>
        </tr>
        <tr>
            <td class="notacao">4</td>
            <td class="casa-clara"></td> <td class="casa-escura"></td> <td class="casa-clara"></td> <td class="casa-escura"></td>
            <td class="casa-clara"></td> <td class="casa-escura"></td> <td class="casa-clara"></td> <td class="casa-escura"></td>
            <td class="notacao">4</td>
        </tr>
        <tr>
            <td class="notacao">3</td>
            <td class="casa-escura"></td> <td class="casa-clara"></td> <td class="casa-escura"></td> <td class="casa-clara"></td>
            <td class="casa-escura"></td> <td class="casa-clara"></td> <td class="casa-escura"></td> <td class="casa-clara"></td>
            <td class="notacao">3</td>
        </tr>

        <tr>
            <td class="notacao">2</td>
            <td class="casa-clara">&#9817;</td> <td class="casa-escura">&#9817;</td>
            <td class="casa-clara">&#9817;</td>
            <td class="casa-escura">&#9817;</td>
            <td class="casa-clara">&#9817;</td>
            <td class="casa-escura">&#9817;</td>
            <td class="casa-clara">&#9817;</td>
            <td class="casa-escura">&#9817;</td>
            <td class="notacao">2</td>
        </tr>
        
        <tr>
            <td class="notacao">1</td>
            <td class="casa-escura">&#9814;</td> <td class="casa-clara">&#9816;</td> <td class="casa-escura">&#9815;</td> <td class="casa-clara">&#9813;</td> <td class="casa-escura">&#9812;</td> <td class="casa-clara">&#9815;</td> <td class="casa-escura">&#9816;</td> <td class="casa-clara">&#9814;</td> <td class="notacao">1</td>
        </tr>

        <tr>
            <td class="notacao"></td>
            <td class="notacao">a</td>
            <td class="notacao">b</td>
            <td class="notacao">c</td>
            <td class="notacao">d</td>
            <td class="notacao">e</td>
            <td class="notacao">f</td>
            <td class="notacao">g</td>
            <td class="notacao">h</td>
            <td class="notacao"></td>
        </tr>
    </table>
    <!-- JS -->
    <script src="js/script.js"></script>
</body>

</html>