{{-- {{$tagName}}
{{$optionName}} --}}
<div class="form-group">
    <label>{{$tagName}}</label>
    <select class="form-control select2bs4" id="" name="{{$tagName}}[]" multiple>
        @foreach ($relationItems as $relationItem)
            <option {{ ($selected($relationItem) ? 'selected' : '') }} value="{{$relationItem->id}}">
                {{ $optionName ? $relationItem->$optionName : $relationItem->name }}
                {{-- @if($tagName == "actors")
                    {{$relationItem->first_name}} {{$relationItem->last_name}}
                @else
                    {{$relationItem->name}}
                @endif --}}
            </option>
        @endforeach
    </select>
</div>