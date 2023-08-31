
<table>
    <tr>
        <th colspan="4" class="text-center">Promoters</th>
    </tr>
    <tr>
        <th>Mês/Curso</th>
        <th>A</th>
        <th>AT</th>
        <th>B</th>
        <th>C</th>
        <th>D</th>
        <th>E</th>
        <th>F</th>
        <th>H</th>
        <th>I</th>
    </tr>
    @foreach($meses as $key => $mes)
    <tr>
        <td> {{$key}} </td>
        <td> {{$promoters[$key]['A']}} </td>
        <td> {{$promoters[$key]['B']}} </td>
        <td> {{$promoters[$key]['C']}} </td>
        <td> {{$promoters[$key]['D']}} </td>
        <td> {{$promoters[$key]['E']}} </td>
        <td> {{$promoters[$key]['F']}} </td>
        <td> {{$promoters[$key]['H']}} </td>
        <td> {{$promoters[$key]['I]}} </td><br>   
    </tr> 
    @endforeach
</table>
<br>
<table>
    <tr>
        <th colspan="4" class="text-center">Detractors</th>
    </tr>
    <tr>
        <th>Mês/Curso</th>
        <th>Pós</th>
        <th>QASPS</th>
        <th>QBA</th>
    </tr>
    @foreach($meses as $key => $mes)
    <tr>
        <td> {{$key}} </td>
        <td> {{$detractors_pos[$key]}} </td>
        <td> {{$detractors_QASPS[$key]}} </td>
        <td> {{$detractors_QBA[$key]}} </td>
    </tr>
    @endforeach
</table>
<br>
<table>
    <tr>
        <th colspan="4" class="text-center">Passíveis</th>
    </tr>
    <tr>
        <th>Mês/Curso</th>
        <th>Pós</th>
        <th>QASPS</th>
        <th>QBA</th>
    </tr>
    @foreach($meses as $key => $mes)
    <tr>
        <td> {{$key}} </td>
        <td> {{$passiveis_pos[$key]}} </td>
        <td> {{$passiveis_QASPS[$key]}} </td>
        <td> {{$passiveis_QBA[$key]}} </td>
    </tr>
    @endforeach
</table>