@inject('date','App\Utilities\Date')

@if($date->isweekend())
{{$nom}}
@else
{{"jjjj"}}
@endif