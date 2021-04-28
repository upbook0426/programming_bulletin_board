<!--差分時間表示_年-->
@if(floor($timeDifference/(60*60*24*30*365)) > 0)
<td>{{floor($timeDifference/(60*60*24*30*365))}}年前</td>
<!--月-->
@elseif(floor($timeDifference/(60*60*24*30)) > 0)
<td>{{floor($timeDifference/(60*60*24*30))}}ヶ月前</td>
<!--週間-->
@elseif(floor($timeDifference/(60*60*24*7)) > 0)
<td>{{floor($timeDifference/(60*60*24*7))}}週間前</td>
<!--日-->
@elseif(floor($timeDifference/(60*60*24)) > 0)
<td>{{floor($timeDifference/(60*60*24))}}日前</td>
<!--時間-->
@elseif(floor($timeDifference/(60*60)) > 0)
<td>{{floor($timeDifference/(60*60))}}時間前</td>
<!--分-->
@elseif(floor($timeDifference/(60)) > 0)
<td>{{floor($timeDifference/(60))}}分前</td>
<!--分またはその他-->
@else
<td>0分前</td>
@endif