@props([
    'name'=>'', // will be use for "id", "name", and "for" attributes, and to dynamically control validity and retreive old values
    'class' => "", // will be passed as the outer div`s class
    'placeholder' => "",
    'label_class' => "", // will be added to the label`s class
    'input_class' => "", //  will be added to the label`s class
    'table_data' => [],    // pass old table data to populate with data from the database (when updating)
    'de' => '',  // 🔴 DEPRICATED, use suffix instead // ex: 'de l'employé', 'de l'entreprise', 'de la resource'
    'prefix' => '',
    'suffix' => '',
    'readonly' => '',
    'no_label' => false,
    'end_badge' => '', // shows badge at the end like here https://getbootstrap.com/docs/5.0/forms/input-group/
    // use the slot for the label
    // use the <x-slot:footer> for elements below the input tag like valid and invalid feedback tags
    // any other attribute will be passed to the input tag
    /**
     * there are two types :
     * - 📄  input with "type" (text, number, tel, ...)
     * - 🔍 input with ":list = '$array'", will become a searchable choice input
    * > see SNIPPETS below
    */
])

<div class="{{$class}}">
    @php
        // retreive old value from previous (incomplete) form submit
        $old_value = old($name);
        // if there's no old value, get the data from the table  (if provided)
        if($old_value == ''){
            if (array_key_exists($name, $table_data)) {
                $old_value = $table_data[$name];
            }
        }

        if ($de){
            if ($suffix)
                throw new \Exception("You can't use 'de' and 'suffix' params at the same time ! use suffix only");
            $suffix = $de;
        }
        // use translations if placeholder and/or label aren't given
        if($placeholder == '')
            $placeholder = trim($prefix.' '.__('validation.attributes.'.$name).' '.$suffix);
    @endphp
    @if(!$no_label)
    <label for="{{$name}}" class='form-label {{$label_class}}'>
        @if ($slot->isNotEmpty())
            {{ $slot }}
        @else
            {{__('validation.attributes.'.$name)}}
        @endif
    </label>
    @endif
    <div @if($end_badge) class="input-group has-validation" @endif>
        <input
            name="{{$name}}" id="{{$name}}" placeholder="{{$placeholder}}"
            class="form-control {{input_validity($errors, $name)}} {{$input_class}}"
            value="{{ $old_value }}"
            @if ($attributes->has('list'))
                list="list_{{$name}}"
            @endif
            {{ $attributes->whereDoesntStartWith('list')}}
            {{$readonly}}
            @if($readonly)
                style="background: #f0f0f0"
            @endif
        >
        @if($end_badge)
            <span class="input-group-text" id="{{$name}}-badge">{{$end_badge}}</span>
        @endif
        @if ($attributes->has('list'))
            <datalist id="list_{{$name}}">
                @foreach ($attributes['list'] as $x)
                    <option value="{{$x}}">
                @endforeach
            </datalist>
        @endif
        <x-invalid-feedback name={{$name}}/>
        @isset($footer)
            {{$footer}}
        @endisset
    </div>
</div>

{{-- SNIPPETS
TYPE INPUT:
<x-input class="__CLASS__" type="__TYPE__"
name="__NAME__" placeholder="__PLACE_HOLDER__">
    __LABEL__
    <x-slot:footer>
    </x-slot:footer>
</x-input>


LIST INPUT:
<x-input class="__CLASS__" :list="$_ARRAY_OF_DATA_"
name="__NAME__" placeholder="__PLACE_HOLDER__">
    __LABEL__
    <x-slot:footer>
    </x-slot:footer>
</x-input>
--}}
