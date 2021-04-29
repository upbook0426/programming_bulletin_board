<!--差分時間表示_年-->
@if(floor($timeDifference/(60*60*24*30*365)) > 0)
{{floor($timeDifference/(60*60*24*30*365))}}年前
<!--月-->
@elseif(floor($timeDifference/(60*60*24*30)) > 0)
{{floor($timeDifference/(60*60*24*30))}}ヶ月前
<!--週間-->
@elseif(floor($timeDifference/(60*60*24*7)) > 0)
{{floor($timeDifference/(60*60*24*7))}}週間前
<!--日-->
@elseif(floor($timeDifference/(60*60*24)) > 0)
{{floor($timeDifference/(60*60*24))}}日前
<!--時間-->
@elseif(floor($timeDifference/(60*60)) > 0)
{{floor($timeDifference/(60*60))}}時間前
<!--分-->
@elseif(floor($timeDifference/(60)) > 0)
{{floor($timeDifference/(60))}}分前
<!--分またはその他-->
@else
0分前
@endif
