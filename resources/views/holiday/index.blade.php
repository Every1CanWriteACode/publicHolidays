<form method="POST" action="{{route('holiday.store')}}">
    Country: <input type="text" name="">
    Year: <input type="number" min="2000" max="2020" step="1" value="2020" />
    @csrf
    <button type="submit">ADD</button>
 </form>
 {{$data}}