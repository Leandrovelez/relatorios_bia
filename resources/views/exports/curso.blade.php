
<table>
    <tr>
        <th colspan="4" class="text-center">Promoters</th>
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
        <td> {{$promoters_pos[$key]}} </td>
        <td> {{$promoters_QASPS[$key]}} </td>
        <td> {{$promoters_QBA[$key]}} </td><br>   
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