@php
    $content = getContent('supplies_hair_system_supplies_differs.content', true);
    $data_values = is_string($content->data_values) ? json_decode($content->data_values) : $content->data_values;
    // dd($dataValues);
@endphp
@if ($data_values)
<!-- Division -->
<section class="max-w-screen-xl mx-auto px-4 pb-20 grid md:grid-cols-2 grid-cols-1 gap-5">
    <a href="{{$data_values->link_men}}">
        <img class="w-full" src="{{ asset('assets/images/frontend/supplies_hair_system_supplies_differs/' . $data_values->men) }}" alt="Men">
    </a>
    <a href="{{$data_values->link_women}}">
        <img class="w-full" src="{{ asset('assets/images/frontend/supplies_hair_system_supplies_differs/' . $data_values->women) }}" alt="Women">
    </a>
</section>
@endif